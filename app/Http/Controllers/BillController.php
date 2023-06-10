<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function bill()
    {
        return view('purchase.purchase_bill');
    }
    public function recurring_bill()
    {
        return view('purchase.purchase_recurring_bill');
    }
    public function add_bill()
    {
        return view('purchase.purchase_add_bill');
    }
    public function add_recurring_bill()
    {
        return view('purchase.purchase_add_recurring_bill');
    }

    public function detail_rcr_bill()
    {
        return view('purchase.rcr_detail_bill');
    }

    public function detail_bill()
    {
        return view('purchase.detail_bill');
    }
}
