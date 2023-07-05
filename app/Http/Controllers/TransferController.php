<?php

namespace App\Http\Controllers;

use App\Exports\DownloadTransfer;
use App\Exports\TransferExport;
use App\Imports\TransferImport;
use App\Models\Account;
use App\Models\Company;
use App\Models\FavoritSidebar;
use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class TransferController extends Controller
{
    public function transfer()
    {
        $data = Transfer::latest()->get();
        return view('transfer.index',compact('data'));
    }

    public function add_transfer()
    {
        $account = Account::all();
        return view('transfer.add_transfer',compact('account'));
    }
    function insertTransfer(Request $request) {
      
        $ammount = $request->ammount;
        $reduced = Account::find($request->from_account);
        $plus = Account::find($request->to_account);
        $reduced->balance= $reduced->balance-$ammount;
        $plus->balance= $plus->balance+$ammount;
        $reduced->save();
        $plus->save();
        
      
        $data = Transfer::create([
            'description' => $request->description,
            'ammount' => $ammount,
            'from_account' => $request->from_account,
            'to_account' => $request->to_account,
            'reference' => $request->reference,
            'attachment' => $request->attachment,
            'date' => $request->date,
            'company_id' => Auth::user()->company_id,
            'user_id' => Auth::user()->id,
            'payment_method' => $request->payment_method,
        ]);

        $transactionFromAccount = new Transaction();
        $transactionFromAccount -> transfer_id = $data->id;
        $transactionFromAccount -> account_id = $data->from_account;
        $transactionFromAccount -> save();
        $transactionToAccount = new Transaction();
        $transactionToAccount -> transfer_id = $data->id;
        $transactionToAccount -> account_id = $data->to_account;
        $transactionToAccount -> save();
        
        return redirect()->route('show_transfer', ['id' => $data->id])->with('success', 'Data berhasil dibuat');
    }
    public function edit_transfer($id){
        $data = Transfer::find($id);
        $account = Account::all();
        return view('transfer.edit_transfer',compact('account','data'));
    }

    public function show_transfer($id){
        $data = Transfer::find($id);
        $fromAccount = Account::find($data->from_account); 
        $toAccount = Account::find($data->to_account); 
        return view('transfer.show_transfer',compact('data','fromAccount','toAccount'));
    }
    public function updateTransfer(Request $request,$id){
        $transfer = Transfer::find($id);
        $oldammount = $transfer->ammount;

        $balanceBeforeAccount = Account::find($transfer->from_account);
        $balanceBeforeAccount->balance += $oldammount;
        $balanceBeforeAccount->save();

        $BalancetoAccountBefore = Account::find($transfer->to_account);
        $BalancetoAccountBefore->balance -= $oldammount;
        $BalancetoAccountBefore->save();        

        $fromAccountAfter = Account::find($transfer->from_account);
        $fromAccountAfter->balance -= $request->ammount;
        $fromAccountAfter->save();

        $toAccountAfter = Account::find($transfer->to_account);
        $toAccountAfter->balance += $request->ammount;
        $toAccountAfter->save();

        $transfer->ammount = $request->ammount;
        $date = $request->date;
        $transfer->date = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        $transfer->description = $request->description;
        $transfer->payment_method = $request->payment_method;
        $transfer->reference = $request->reference;
        $transfer->attachment = $request->attachment;
        // Update data lainnya jika ada

        $transfer->save();

        
        return redirect()->route('show_transfer', ['id' => $id])->with('success', 'Data berhasil diubah');
    
    }
    function deleteTransfer($id) {
        $data = Transfer::find($id);
        $oldammount = $data->ammount;

        $balanceBeforeAccount = Account::find($data->from_account);
        $balanceBeforeAccount->balance += $oldammount;
        $balanceBeforeAccount->save();

        $BalancetoAccountBefore = Account::find($data->to_account);
        $BalancetoAccountBefore->balance -= $oldammount;
        $BalancetoAccountBefore->save();

        $data->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
    public function importTransfer()
    {
        return view('transfer.ExportImport.import');
    }
    public function ImportDataTransfer(Request $request)
    {
        $this->validate($request, [
            'myFile' => 'required|mimes::xls,xlsx'
        ]);

        $file = $request->file('myFile');

        try {
            Excel::import(new TransferImport, $file);

            return redirect()->back()->with('success', 'Data berhasil diimpor');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi keslahan saat mengimpor data: ' . $e->getMessage());
        }
    }
    public function DownloadTransfer()
    {
        $from_account = Account::get()->toArray();
        $to_account = Account::get()->toArray();
        $user = User::get()->toArray();
        $company = Company::get()->toArray();

        $randomNumber = random_int(1000, 9999); // Menghasilkan nomor acak antara 1000 dan 9999
        
        $fileName = 'Dataset_' . $randomNumber . '.xlsx'; // Gabungkan nomor acak dengan nama file

        return (new DownloadTransfer($from_account,$to_account,$user,$company))->download($fileName);
    }
    public function ExportTransfer()
    {
        $from_account = Account::all();
        $to_account = Account::all();
        $user = User::all();
        $company = Company::all();

        $randomNumber = random_int(1000, 9999); // Menghasilkan nomor acak antara 1000 dan 9999
        
        $fileName = 'Transfer_' . $randomNumber . '.xlsx'; // Menggabungkan nomor acak dengan nama file

        return Excel::download(new TransferExport($from_account->toArray(), $to_account->toArray(), $user->toArray(), $company->toArray()), $fileName);
    }
}
