<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\sendCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('kelogin');   
    }


    public function login(){
        return view('auth.login');
    }

    

    public function p_login(Request $request)
    {
        $user =  User::where('email',$request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        $kodeOTP = random_int(100000, 999999);
        $user->update([
            'otp' => $kodeOTP,
            'otp_exp' =>  Carbon::now()->addMinutes(10),
        ]);
        $email = $user->email;
        Mail::to($email)->send(new sendCode($kodeOTP));
        return view('auth.otp',compact('email'));
    }

   

    function send_otp(Request $request) {
    
    $user = User::where('email', $request->email)->first();

 
    if (!$user) {
        throw ValidationException::withMessages([
            'email' => ['User not found.'],
        ]);
    }

    // Periksa apakah kode OTP yang dimasukkan sesuai
    if ($request->otp != $user->otp) {
        throw ValidationException::withMessages([
            'otp' => ['Invalid OTP.'],
        ]);
    }

    // Periksa apakah kode OTP telah kadaluarsa
    $now = Carbon::now();
    $otpExpired = Carbon::parse($user->otp_exp);
    if ($now->gt($otpExpired)) {
        throw ValidationException::withMessages([
            'otp' => ['OTP has expired.'],
        ]);
    }

    auth()->login($user);
    return redirect()->route('dashboard');
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
            "name.required" => "Nama harus diisi.",
            "password.confirmed" => "Konfirmasi password tidak cocok.",
        ]);
        

        $user = User::create($request->except (['_token']));


        event(new Registered($user));
        auth()->login($user);
        return redirect()->route('verification.notice')->with('success',' Alun berhasil dibuat, silahkan verifikasi Dil Anda');


    }
}
