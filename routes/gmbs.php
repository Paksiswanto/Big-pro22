<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::post('insert_customers', [CostumersController::class, 'insert_cos'])->name('insert_customers');
Route::post('update_customers/{id}', [CostumersController::class, 'update_cos'])->name('update_customers');
Route::get('delete_customers/{id}', [CostumersController::class, 'delete_cos'])->name('delete_customers');
Route::delete('delete_customers/{id}', [CostumersController::class, 'delete_cos'])->name('delete_customers')->middleware('permission:Delete_Customer');
Route::delete('/delete_selected_customers', [CostumersController::class, 'deleteSelected'])->name('delete_selected_customers');
Route::delete('/delete_selected_customers', [CostumersController::class, 'deleteSelected'])->name('delete_selected_customers');
Route::patch('/status_update_sup/{supplierId}', [CostumersController::class, 'updateStatus'])->name('status_update_cos');



Route::middleware(['auth','auth.session', 'verified'])->group(function () {

    Route::post('/insert_income', [TransactionsController::class, 'insert_income'])->name('insert_income');
    Route::delete('/delete_income/{id}', [TransactionsController::class, 'delete_income'])->name('delete_income');
    Route::get('/show_income/{id}', [TransactionsController::class, 'show_income'])->name('income_show');



});


Route::post('insert_supplier', [SupplierController::class, 'insert_supplier'])->name('insert_supplier');
Route::post('update_supplier/{id}', [SupplierController::class, 'update_supplier'])->name('update_supplier');
Route::get('delete_supplier/{id}', [SupplierController::class, 'delete_supplier'])->name('delete_supplier');
Route::delete('/delete_supp/{id}', [SupplierController::class, 'delete'])->name('delete_supp')->middleware('permission:Delete_Supplier');
Route::delete('/delete_selected_supplier', [SupplierController::class, 'deleteSelected'])->name('delete_selected_supplier');
Route::patch('/status_update/{supplierId}', [SupplierController::class, 'updateStatus'])->name('status_update');
Route::get('/detail_sup/{id}', [SupplierController::class, 'show'])->name('detail_sup');

Route::post('/insert_report', [ReportController::class, 'insert_report'])->name('insert_report');

Route::post('/insert_income', [TransactionsController::class, 'insert_income'])->name('insert_income');
Route::post('/update_income/{id}', [TransactionsController::class, 'update_income'])->name('update_income');

Route::post('/insert_expenditure', [TransactionsController::class, 'insert_expenditure'])->name('insert_expenditure');
Route::get('/show_update_expenditure/{id}', [TransactionsController::class, 'edit_expenditure'])->name('update_expenditure');
Route::post('/update_expenditure/{id}', [TransactionsController::class, 'update_expenditure'])->name('edit_expend');
Route::delete('/delete_expenditure/{id}', [TransactionsController::class, 'delete_expend'])->name('delete_expend');


Route::post('/insert_account_income', [TransactionsController::class, 'insert_account_income'])->name('insert_account_income');
Route::post('/insert_category_income', [TransactionsController::class, 'insert_category_income'])->name('insert_category_income');
Route::post('/insert_cos_income', [TransactionsController::class, 'insert_cos_income'])->name('insert_cos_income');
Route::post('/insert_sup_expenditure', [TransactionsController::class, 'insert_sup_income'])->name('insert_sup_income');

Route::post('/insert_recurring_income', [TransactionsController::class, 'insert_recurring_income'])->name('insert_recurring_income');
Route::post('/update_recurring_income/{id}', [TransactionsController::class, 'update_recurring_income'])->name('update_recurring_income');

Route::post('/insert_recurring_expenditure', [TransactionsController::class, 'insert_recurring_expenditure'])->name('insert_recurring_expenditure');
