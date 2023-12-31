<?php
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ConvertController;
use Illuminate\Support\Facades\Route;

//account
Route::post('/insert_account', [AccountController::class, 'insert_account'])->name('insert_account');
Route::post('/update_account/{id}', [AccountController::class, 'update_account'])->name('update_account');
Route::post('/delete_account/{id}',[AccountController::class,'delete_account'])->name('delete_account')->middleware('permission:Delete_Account');
Route::get('/show_account1/{id}', [AccountController::class, 'show_account1'])->name('show_account1');

Route::get('coba', [ConvertController::class, 'coba'])->name('coba');
Route::post('/convertCurrency', [ConvertController::class, 'convertCurrency'])->name('convertCurrency');
