<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice(){
        return view('auth.verify1');
    }

    public function verify (EmailVerificationRequest $request){
        $request->fulfill();
        return redirect()->route('add_company');
    }
}
