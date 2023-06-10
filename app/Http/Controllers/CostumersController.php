<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function costumers()
    {
        return view('sale.costumers');
    }

    public function add_cos()
    {
        return view('sale.add_costumers');
    }

    public function edit_cos()
    {
        return view('sale.edit_costumers');
    }

    public function show_cos()
    {
        return view('sale.showcostumers');
    }
}
