<?php

use App\Http\Controllers\CostumersController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::post('insert_customers', [CostumersController::class, 'insert_cos'])->name('insert_customers');
Route::post('update_customers/{id}', [CostumersController::class, 'update_cos'])->name('update_customers');
Route::get('delete_customers/{id}', [CostumersController::class, 'delete_cos'])->name('delete_customers');

Route::post('insert_supplier', [SupplierController::class, 'insert_supplier'])->name('insert_supplier');
Route::post('update_supplier/{id}', [SupplierController::class, 'update_supplier'])->name('update_supplier');
Route::get('delete_supplier/{id}', [SupplierController::class, 'delete_supplier'])->name('delete_supplier');

Route::post('/insert_income', [TransactionsController::class, 'insert_income'])->name('insert_income');
Route::post('/update_income/{id}', [TransactionsController::class, 'update_income'])->name('update_income');
