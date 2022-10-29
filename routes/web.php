<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/about-us', [HomeController::class, "about"])->name('about');

Route::prefix('products')->group(function (){
    Route::get('/',[ProductController::class, 'index'])->name('products.all');
});

Route::prefix('contact-us')->group(function () {
    Route::get('/', [ContactUsController::class,'contact'])->name('contact');
});

Route::prefix('checkout')->group(function () {
    Route::get('/', [CheckOutController::class,'index'])->name('checkout');
});

Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class,'index'])->name('orders');
});

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class,'index'])->name('cart');
});

Route::prefix('MyAccount')->group(function () {
    Route::get('/', [CustomerController::class,'index'])->name('MyAccount');
});

Route::prefix('quotation')->group(function () {
    Route::get('/', [QuotationController::class,'index'])->name('quotation');
});

