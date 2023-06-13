<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('kelogin', [AuthController::class, 'login'])->name('kelogin');
Route::get('keregis', [AuthController::class, 'register'])->name('keregis');

Route::post('keregis', [AuthController::class, 'p_register'])->name('register');
Route::post('kelogin', [AuthController::class, 'p_login'])->name('login');


Route::get('/email/varify/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/varify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');


Route::middleware([
    'auth',

    'auth.session', 'verified'
])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
