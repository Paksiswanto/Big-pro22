<?php

namespace App\Http\Controllers;

use App\Models\Account;
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
        $date = $request->date;
        $formattedDate = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        $reduced = Account::find($request->from_account);
        $plus = Account::find($request->to_account);
        $reduced->balance= $reduced->balance-$request->ammount;
        $plus->balance= $plus->balance+$request->ammount;
        $reduced->save();
        $plus->save();
        
        
       
        $requestData = $request->except('date'.'user_id');
        $userID = Auth::user()->id;
        $requestData['date'] = $formattedDate;
        $requestData['user_id'] = $userID;
        Transfer::create($requestData);
        
        return redirect()->route('show_transfer')->with('success','Data Berhasil Disimpan');
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

        
        return redirect()->route('show_transfer')->with('success', 'Transfer berhasil diperbarui');
    
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
        return redirect()->back()->with('success','Data Berhasil di Hapus');
    }
}
