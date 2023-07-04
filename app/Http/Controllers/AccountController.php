<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transfer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request){
        $data = Account::latest()->get();
        return view('transactions.account.index', compact('data'));
    }

    public function add_account(){
        return view('transactions.account.add_account');
    }

    public function insert_account(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'rekening_number' => 'required|numeric',
            'currency' => 'required',
            'balance' => 'required',
            'name_bank' => 'required',
            'bank_telephone' => 'required|numeric',
            'bank_address' => 'required'
        ]);
        $balance = $request->balance;
        $cleanedBalance = str_replace(',', '', $balance);
        Account::create([
            'name' => $request->name,
            'rekening_number' => $request->rekening_number,
            'currency' => $request->currency,
            'balance' => $cleanedBalance,
            'name_bank' => $request->name_bank,
            'bank_telephone' => $request->bank_telephone,
            'bank_address' => $request->bank_address,
            'company_id' => 1,
        ]);

        return redirect()->route('account')->withErrors($validatedData)->withInput()->with('success', 'Data berhasil ditambahkan');
    }

    public function edit_account($id){
        $data = Account::find($id);
        return view('transactions.account.edit_account', compact('data'));
    }

    public function update_account(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'rekening_number' => 'required|numeric',
            'currency' => 'required',
            'balance' => 'required',
            'name_bank' => 'required',
            'bank_telephone' => 'required|numeric',
            'bank_address' => 'required'
        ]);
        $data = Account::find($id);
        $data->update([
            'name' => $request->name,
            'rekening_number' => $request->rekening_number,
            'currency' => $request->currency,
            'balance' => $request->balance,
            'name_bank' => $request->name_bank,
            'bank_telephone' => $request->bank_telephone,
            'bank_address' => $request->bank_address,
            'company_id' => 1,
        ]);

        return redirect()->route('account')->withErrors($validatedData)->withInput()->with('success', 'Data berhasil diubah');
    }

    public function delete_account($id)
    {
        $data = Account::find($id);
        $data->delete();
        return redirect()->route('account')->with('success', 'Data berhasil dihapus');
    }

    public function show_account($id){
        $data = Account::find($id);
        $transfer = Transfer::whereIn('from_account',[$id])
                            ->orWhereIn('to_account',[$id])
                            ->get();
        return view('transactions.account.show_account1', compact('data','transfer'));
    }
    public function show_account2(){
        return view('transactions.account.show_account2');
    }
}