<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function p_register(Request $request){
        $request->validate([
            "name" => 'required',
            "email" => 'required|unique:users,email',
            "password" => 'required|min:3|confirmed:password_confirmation',
        ], [
            "name.required" => "Nama harus diisi.", // Menambahkan pesan kesalahan khusus untuk aturan "required" pada field "name"
            "password.confirmed" => "Konfirmasi password tidak cocok.",
        ]);
        

        $user = User::create($request->except (['_token']));


        event(new Registered($user));
        auth()->login($user);
        return redirect()->route('verification.notice')->with('success',' Alun berhasil dibuat, silahkan verifikasi Dil Anda');


    }
}
