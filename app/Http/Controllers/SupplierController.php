<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier()
    {
        return view('purchase.purchase_supplier');
    }
    public function add()
    {
        return view('purchase.purchase_add_supplier');
    }
    public function edit()
    {
        return view('purchase.purchase_edit_supplier');
    }
    public function details()
    {
        return view('purchase.purchase_details_supplier');
    }
}
