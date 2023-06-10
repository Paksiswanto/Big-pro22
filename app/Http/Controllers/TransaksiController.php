<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi(){
    return view('transaksi.utama.index');
    }

    public function transaksi_berulang(){
        return view('transaksi.transaksi_berulang.index');
    }
    
    public function add_pendapatan(){
        return view('transaksi.utama.pendapatan.add_pendapatan');
    }

}