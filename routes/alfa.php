<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransferController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

// Route::post('delete-items/{id}', [ItemController::class], 'delete_item');
// Route::post('create_item',[ItemController::class], 'create_item')->name('create_item');

Route::post('delete-items/{id}', [ItemController::class, 'delete_item'])->middleware('permission:Delete_Item');
Route::post('create_item', [ItemController::class, 'create_items'])->name('create_item');
Route::put('edite-item/{id}', [ItemController::class, 'edits'])->name('edite-item');
Route::post('create_category', [CategoryController::class, 'create_category'])->name('create_category');
Route::post('delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category')->middleware('permission:Delete_Category');
Route::put('edit_category/{id}', [CategoryController::class, 'edit_category'])->name('edit_category');
Route::post('create_invoice', [InvoiceController::class, 'create_invoice'])->name('create_invoice');
Route::get('get-item/{itemId}', [InvoiceController::class, 'getItem'])->name('get-item');
Route::post('create_settingInvoice', [InvoiceController::class, 'update_invSetting'])->name('create_settingInvoice');
Route::put('update_company', [CompanyController::class, 'update_company'])->name('update_company')->middleware('permission:Edit_Company_general');
//Import-Export Item
Route::get('/ImportItem', [ItemController::class, 'ImportItem'])->name('ImportItem');
Route::post('/ImportDataItem', [ItemController::class, 'ImportDataItem'])->name('ImportDataItem');
Route::get('/DownloadItem', [ItemController::class, 'DownloadItem'])->name('DownloadItem');
Route::get('/ExportItem', [ItemController::class, 'ExportItem'])->name('ExportItem');
//Import-Export Category
Route::get('/ImportCategory', [CategoryController::class, 'ImportCategory'])->name('ImportCategory');
Route::post('/ImportDataCategory',[CategoryController::class, 'ImportDataCategory'])->name('ImportDataCategory');
Route::get('/DownloadCategory', [CategoryController::class, 'DownloadCategory'])->name('DownloadCategory');
Route::get('/ExportCategory', [CategoryController::class, 'ExportCategory'])->name('ExportCategory');
//Inport-Export Customer
Route::get('/ImportCustomer', [CostumersController::class, 'ImportCustomer'])->name('ImportCustomer');
Route::post('/ImportDataCustomer', [CostumersController::class, 'ImportDataCustomer'])->name('ImportDataCustomer');
Route::get('/DownloadCustomer', [CostumersController::class, 'DownloadCustomer'])->name('DownloadCustomer');
Route::get('/ExportCustomer', [CostumersController::class, 'ExportCustomer'])->name('ExportCustomer');
//ExportImport
Route::get('ImportSupplier', [SupplierController::class, 'ImportSupplier'])->name('ImportSupplier');
Route::post('/ImportDataSupplier', [SupplierController::class, 'ImportDataSupplier'])->name('ImportDataSupplier');
Route::get('/DownloadSupplier', [SupplierController::class, 'DownloadSupplier'])->name('DownloadSupplier');
Route::get('/ExportSupplier', [SupplierController::class, 'ExportSupplier'])->name('ExportSupplier');
//ExportImport
Route::get('ImportTransfer', [TransferController::class, 'importTransfer'])->name('ImportTransfer');
Route::post('/ImportDataTransfer', [TransferController::class, 'ImportDataTransfer'])->name('ImportDataTransfer');
Route::get('/DownloadTransfer', [TransferController::class, 'DownloadTransfer'])->name('DownloadTransfer');