<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function p_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('/');
            // Jika login gagal
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
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
