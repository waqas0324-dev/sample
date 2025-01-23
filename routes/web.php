<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;


Route::get('/', [WebController::class, 'welcome'])->name('layouts-welcome');

Route::get('shop', [WebController::class, 'shop'])->name('shop');

Route::get('/layouts/home', [webController::class, 'home'])->name('layouts-home');
Route::get('/layouts/about', [webController::class, 'about'])->name('layouts-about');
Route::get('/layouts/blog', [webController::class, 'blog'])->name('layouts-blog');
Route::get('/layouts/contact', [webController::class, 'contact'])->name('layouts-contact');
Route::get('/layouts/services' ,[WebController::class, 'services'])->name('layouts-services');
Route::get('/layouts/shop' ,[WebController::class, 'shop'])->name('layouts-shop');




// card method
Route::get('/cart/index', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
//checkout controller


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');













Route::get('/admin/adminmaster', [webController::class, 'adminmaster'])->name('admin-adminmaster');
Route::get('/admin/adminhome', [webController::class, 'adminhome'])->name('admin-adminhome');

Route::get('admin/create_product', [ProductController::class, 'create'])->name('admin-product-create');
Route::post('admin/store-product', [ProductController::class, 'store'])->name('admin-product-store');



