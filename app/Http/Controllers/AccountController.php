<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('transactions.account.index');
    }

    public function add_account(){
        return view('transactions.account.add_account');
    }

    public function edit_account(){
        return view('transactions.account.edit_account');
    }
    public function show_account1(){
        return view('transactions.account.show_account1');
    }
    public function show_account2(){
        return view('transactions.account.show_account2');
    }
}
