<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function calendar(Request $request)
    {
        if($request->ajax()){
            $coba = Transaction::with(['invoice','bill','income','expend'])->get();
            return response($coba);
        }

        $transaction = Transaction::all();
        return view('calendar', compact('transaction'));
    }

}
