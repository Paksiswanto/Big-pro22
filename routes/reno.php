<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

Route::get('kelogin', [AuthController::class, 'login'])->name('kelogin');
Route::get('keregis', [AuthController::class, 'register'])->name('keregis');
Route::get('testingg', [SendCodeController::class, 'sendcode'])->name('code');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('otp', [AuthController::class, 'otp'])->name('otp');
Route::get('send_otp', [AuthController::class, 'send_otp'])->name('send_otp');

Route::post('keregis', [AuthController::class, 'p_register'])->name('register');
Route::post('kelogin', [AuthController::class, 'p_login'])->name('login');

Route::post('/forgot-password', [AuthController::class, ''])->name('login');

Route::get('/forgot-password', function () {
    return view('auth.reset_password');
})->middleware('guest')->name('password.request');

// Route::post('/forgot-password', function (Request $request) {
//     $request->validate(['email' => 'required|email']);
 
//     $status = Password::sendResetLink(
//         $request->only('email')
//     );
 
//     return $status === Password::RESET_LINK_SENT
//                 ? back()->with(['status' => __($status)])
//                 : back()->withErrors(['email' => __($status)]);
// })->middleware('guest')->name('password.email');



Route::get('/email/varify/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/varify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');
Route::get('/email/varify/resend-verification', [VerificationController::class, 'resend'])->middleware('auth','throttle:6,1')->name('resend');



Route::middleware(['auth','auth.session', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
