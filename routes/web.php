<?php

use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\AdminProducts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentControl;
use App\Http\Controllers\paymentMethods;
use App\Http\Controllers\UserPayment;

/*
|--------------------------------------------------------------------------
| user controling
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
// fonted showing data in details to show data
Route::get('/details/{id}', [HomeController::class, 'show'])->name('showProduct');

// payment getway in user
Route::post('/payment', [UserPayment::class, 'index'])->name(    'payment');


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


// PaymentMethod Routing

Route::get('/payment/method', [paymentMethods::class, 'index'])->name('paymentMethod');
Route::post('/method/add', [PaymentMethods::class,'store'])->name('createMethod');
Route::get('method/delete/{id}', [PaymentMethods::class,'destroy'])->name('methodDelte');



