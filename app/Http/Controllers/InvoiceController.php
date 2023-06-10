<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice()
    {
        return view('sale.sale_invoice');
    }
    public function recurring_invoice()
    {
        return view('sale.sale_recurring_invoice');
    }
    public function add_invoice()
    {
        return view('sale.sale_add_invoice');
    }
    public function add_recurring_invoice()
    {
        return view('sale.sale_add_recurring_invoice');
    }
    public function detail_recurring()
    {
        return view('sale.sale_details_recurring_invoice');
    }
    
    public function costumers()
    {
        return view('sale.costumers');
    }

    public function add_cos()
    {
        return view('sale.add_costumers');
    }
    public function details()
    {
        return view('sale.sale_details_invoice');
    }
    public function setting_invoice()
    {
        return view('sistem_invoice.index');
    }
}
