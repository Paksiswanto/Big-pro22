<?php

namespace App\Http\Controllers;

use App\Models\pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinController extends Controller
{
   public function pin($pin)
   {
    $pins = pin::where('name',$pin)->array_where('user_id', Auth::user()->id)->first();
    if($pins) {
        $pins->delete();
    }else{
        $icon = $this->getIconByItem($pin);
        $link = $this->getLinkByItem($pin);

        pin::create([
            'name' =>$pin,
            'user_id' =>Auth()->user()->id,
            'icon' =>$icon,
            'link' =>$link,
        ]);
    }
    return redirect()->back();
   }
   private function getIconByItem($pin)
   {
    $icon = [
            'hada' => 'icon-download1',
            'hodo' => 'icon-tag1',
            'Pelanggan' => 'icon-user-plus',
            'Tagihan' => 'icon-file-minus',
            'Pemasok' => 'icon-user-minus',
            'Akun' => 'icon-user-check',
            'Transaksi' => 'icon-clipboard',
            'Transfer' => 'icon-repeat1',
            'Laporan' => 'icon-file-text',
            'Kalender' => 'icon-calendar1',
        ];

        return $icon[$pin] ?? '';
    }
    private function getLinkByItem($pin)
   {
    $link = [
            'hada' => 'show_report/{id}',
            'hodo' => 'icon-tag1',
            'Pelanggan' => 'icon-user-plus',
            'Tagihan' => 'icon-file-minus',
            'Pemasok' => 'icon-user-minus',
            'Akun' => 'icon-user-check',
            'Transaksi' => 'icon-clipboard',
            'Transfer' => 'icon-repeat1',
            'Laporan' => 'icon-file-text',
            'Kalender' => 'icon-calendar1',
        ];

        return $link[$pin] ?? '';
    }
    
   }

