<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CopyTextController extends Controller
{
    public function CopyText()
    {
        return view('auth.copy_text');
    }
}
