<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request){
        $katakunci = $request->katakunci;
        $data = Account::where('account', 'LIKE', '%'.$katakunci.'%');
        $data = Account::all();
        return view('transactions.account.index', compact('data'));
    }

    public function add_account(){
        return view('transactions.account.add_account');
    }

    public function insert_account(Request $request){
        Account::create([
            'name' => $request->name,
            'rekening_number' => $request->rekening_number,
            'currency' => $request->currency,
            'balance' => $request->balance,
            'name_bank' => $request->name_bank,
            'bank_telephone' => $request->bank_telephone,
            'bank_address' => $request->bank_address,
            'company_id' => 1,
        ]);

        return redirect()->route('account');
    }

    public function edit_account($id){
        $data = Account::find($id);
        return view('transactions.account.edit_account', compact('data'));
    }

    public function update_account(Request $request, $id){
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

        return redirect()->route('account');
    }

    public function delete_account($id)
    {
        $data = Account::find($id);
        $data->delete();
        return redirect()->route('account');
    }

    public function show_account1($id){
        $data = Account::find($id);
        return view('transactions.account.show_account1', compact('data'));
    }
    public function show_account2(){
        return view('transactions.account.show_account2');
    }
}
