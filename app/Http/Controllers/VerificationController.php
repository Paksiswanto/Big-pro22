<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice(){
        return view('auth.verify1');
    }

    public function verify (EmailVerificationRequest $request,$id){
        $request->fulfill();
        $data = User::find($id);
        return view('add_company',compact('data'));
    }
}
