<?php
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

//account
Route::post('/insert_account', [AccountController::class, 'insert_account'])->name('insert_account');
Route::post('/update_account/{id}', [AccountController::class, 'update_account'])->name('update_account');
Route::get('/delete_account/{id}',[AccountController::class,'delete_account'])->name('delete_account');
Route::get('/show_account1/{id}', [AccountController::class, 'show_account1'])->name('show_account1');
