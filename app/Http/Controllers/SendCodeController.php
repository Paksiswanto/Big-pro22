<?php

namespace App\Http\Controllers;

use App\Mail\sendCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendCodeController extends Controller
{
    function sendcode()
    {

        $kodeotp = '1234';
        Mail::to("renotamvam87@gmail.com")->send(new sendCode($kodeotp));
        return '<h1>sukses</h1>';
    }
    function otp()
    {
        return view('category.add');
    }
}
