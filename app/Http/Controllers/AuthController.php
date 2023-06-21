<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\sendCode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
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
                'email' => ['Email atau password salah      .'],
            ]);
        }
        $kodeOTP = random_int(100000, 999999);
        if($user && $user->otp_exp > Carbon::now()->addMinutes(9)){
             throw ValidationException::withMessages([
            'email' => ['Tunggu 1 menit untuk mendapat OTP baru'],
        ]);
        }
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
            'email' => ['Akun tidak di temukan.'],
        ]);
    }

    // Periksa apakah kode OTP yang dimasukkan sesuai
    if ($request->otp != $user->otp) {
        throw ValidationException::withMessages([
            'otp' => ['OTP salah.'],
        ]);
    }

    // Periksa apakah kode OTP telah kadaluarsa
    $now = Carbon::now();
    $otpExpired = Carbon::parse($user->otp_exp);
    if ($now->gt($otpExpired)) {
        throw ValidationException::withMessages([
            'otp' => ['OTP Kadarluarsa.'],
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

        $user -> assignRole(1);
        event(new Registered($user));
        auth()->login($user);
        return redirect()->route('verification.notice')->with('success',' Alun berhasil dibuat, silahkan verifikasi Dil Anda');


    }
   function sendReset(Request $request)  {

    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
        return back()->with(['status' => __('Email berhasil dikirim')]);
    } else {
        return back()->withErrors(['email' => __('Email tidak ditemukan')]);
    }
   }

   function newPassword(Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:3|confirmed',
    ], [
        'token.required' => 'Token harus diisi.',
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'password.required' => 'Kata sandi harus diisi.',
        'password.min' => 'Kata sandi minimal harus terdiri dari :min karakter.',
        'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    if ($status === Password::PASSWORD_RESET) {
        return redirect()->route('login')->with('status', __('Kata sandi Anda telah diatur ulang. Silakan masuk dengan kata sandi baru.'));
    } else {
        return back()->withErrors(['email' => ['Gagal mengatur ulang kata sandi. Silakan coba lagi.']]);
    }
   }


}
