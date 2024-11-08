<?php

use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\AdminProducts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');



/*
|--------------------------------------------------------------------------
| admin controling
|--------------------------------------------------------------------------
*/
Route::get('/admin', [AdminDasboard::class, 'index'])->name('admin');

// Product 
Route::get('/admin/product', [AdminProducts::class, 'index'])->name('adminProduct');
Route::get('/admin/create', [AdminProducts::class, 'store'])->name('createProduct');