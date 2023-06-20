<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function transfer()
    {
        $data = Transfer::all();
        return view('transfer.index',compact('data'));
    }

    public function add_transfer()
    {
        $account = Account::all();
        return view('transfer.add_transfer',compact('account'));
    }
    function insertTransfer(Request $request) {
      
        $ammount = $request->ammount;
        $cleanedAmmount = str_replace(',', '', $ammount);
        $reduced = Account::find($request->from_account);
        $plus = Account::find($request->to_account);
        $reduced->balance= $reduced->balance-$cleanedAmmount;
        $plus->balance= $plus->balance+$cleanedAmmount;
        $reduced->save();
        $plus->save();
        
      
        $data = Transfer::create([
            'description' => $request->description,
            'ammount' => $cleanedAmmount,
            'from_account' => $request->from_account,
            'to_account' => $request->to_account,
            'reference' => $request->reference,
            'attechment' => $request->attechment,
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
}
