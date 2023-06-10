<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function transfer()
    {
        return view('transfer.index');
    }

    public function add_transfer()
    {
        return view('transfer.add_transfer');
    }

    public function edit_transfer(){
        return view('transfer.edit_transfer');
    }

    public function show_transfer(){
        return view('transfer.show_transfer');
    }
}
