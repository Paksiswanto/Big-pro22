<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

// Route::post('delete-items/{id}', [ItemController::class], 'delete_item');
// Route::post('create_item',[ItemController::class], 'create_item')->name('create_item');

Route::post('delete-items/{id}', [ItemController::class, 'delete_item']);
Route::post('create_item', [ItemController::class, 'create_items'])->name('create_item');
Route::put('edit-item', [ItemController::class, 'edits'])->name('edit_item');
Route::post('create_category', [CategoryController::class, 'create_category'])->name('create_category');
Route::post('delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');
Route::put('edit_category/{id}', [CategoryController::class, 'edit_category'])->name('edit_category');