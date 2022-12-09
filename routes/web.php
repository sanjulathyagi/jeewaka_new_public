<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberArea\AccountController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [HomeController::class, 'index'])->name('about');

Route::prefix('products')->group(function (){
    Route::get('/',[ProductController::class, 'index'])->name('products.all');
    Route::get('/filter',[ProductController::class,'filter'])->name('products.filter');
    Route::get('/{product_id}/view',[ProductController::class,'view'])->name('products.view');
    Route::post('/add/cart',[ProductController::class,'addCart'])->name('products.add.cart');
});

Route::prefix('MyAccount')->group(function (){
    Route::get('/',[AccountController::class, 'index'])->name('account.index');
});

Route::prefix('contact-us')->group(function () {
    Route::get('/', [ContactUsController::class,'index'])->name('contact');
    Route::get('/store', [ContactUsController::class,'store'])->name('contact.store');
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

