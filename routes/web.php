<?php

use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\AdminProducts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'index'])->name('home');
// fonted showing data in details to show data
Route::get('/details/{id}', [HomeController::class, 'show'])->name('showProduct');


/*
|--------------------------------------------------------------------------
| admin controling
|--------------------------------------------------------------------------
*/
Route::get('/admin', [AdminDasboard::class, 'index'])->name('admin');

// Product
Route::get('/admin/product', [AdminProducts::class, 'index'])->name('adminProduct');
Route::post('product/create', [AdminProducts::class, 'store'])->name('createProduct');
Route::get('product/edit/{id}', [AdminProducts::class, 'edit'])->name('productEdit');
Route::put('product/update/{id}', [AdminProducts::class, 'update'])->name('productUpdate');
Route::get('product/delete/{id}', [AdminProducts::class, 'destroy'])->name('productDelete');

