<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemindex()
    {
      return view('item.index');
    }
    public function additem()
    {
      return view('item.add');
    }
    public function edititem()
    {
      return view('item.edit');
    }
}
