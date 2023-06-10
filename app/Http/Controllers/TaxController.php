<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax_index()
    {
        return  view('Tax.index');
    }
    public function tax_add()
    {
        return  view('Tax.add');
    }

    public function tax_edit()
    {
        return  view('Tax.edit');
    }
}
