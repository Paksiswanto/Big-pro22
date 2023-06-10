<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_index()
    {
        return view('category.index');
    }
    public function category_add()
    {
        return view('category.add');
    }
    public function category_edit()
    {
        return view('category.edit');
    }
}
