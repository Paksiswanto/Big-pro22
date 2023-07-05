<?php

namespace App\Http\Controllers;

use App\Models\FavoritSidebar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritController extends Controller
{
    public function active($item)
    {
        if($item == 'Barang'){
            FavoritSidebar::create([
                'name' => 'Barang',
                'user_id' => Auth()->user()->id,
                'icon' => 'icon-download1',
                'link' => 'itemindex',
            ]);
        }else if($item == 'Faktur'){
            FavoritSidebar::create([
                'name' => 'Faktur',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-tag1',
                'link' => 'invoice',
            ]);
        }else if($item == 'Pelanggan'){
            FavoritSidebar::create([
                'name' => 'Pelanggan',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-user-plus',
                'link' => 'costumer',
            ]);
        }else if($item == 'Tagihan'){
            FavoritSidebar::create([
                'name' => 'Tagihan',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-file-minus',
                'link' => 'bill',
            ]);
        }else if($item == 'Pemasok'){
            FavoritSidebar::create([
                'name' => 'Pemasok',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-user-minus',
                'link' => 'supplier',
            ]);
        }else if($item == 'Akun'){
            FavoritSidebar::create([
                'name' => 'Akun',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-user-check', 
                'link' => 'account',
            ]);
        }else if($item == 'Transaksi'){
            FavoritSidebar::create([
                'name' => 'Transaksi',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-clipboard', 
                'link' => 'transactions',
            ]);
        }else if($item == 'Transfer'){
            FavoritSidebar::create([
                'name' => 'Transfer',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-repeat1', 
                'link' => 'transfer',
            ]);
        }else if($item == 'Laporan'){
            FavoritSidebar::create([
                'name' => 'Laporan',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-file-text',
                'link' => 'report',
            ]);
        }else if($item == 'Kalender'){
            FavoritSidebar::create([
                'name' => 'Kalender',
                'user_id' => Auth::user()->id,
                'icon' => 'icon-calendar1',
                'link' => 'calendar',
            ]);
        }

        return redirect()->back();
    }

    public function nonactive($item)
    {
        FavoritSidebar::where('user_id',auth()->user()->id)->where('name',$item)->delete();
        return redirect()->back();
    }
}
