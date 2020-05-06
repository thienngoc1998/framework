<?php

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

use App\Http\Controllers\ProductController;

Route::group(['namespace' => 'user', 'as' => 'user.'], function () {
    Route::get('/form-login', [\App\Http\Controllers\HomeController::class, 'getFormLogin'])->name('home-login');
    Route::post('/login-customer', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login-customer');
});

Route::prefix('home')->group(function () {
    Route::get('',[\App\Http\Controllers\HomeController::class,'index'])->name('home-user');
    Route::get('product',[\App\Http\Controllers\HomeController::class,'getAllProducts'])->name('home-product');

    Route::get('product/{id}',[\App\Http\Controllers\HomeController::class,'getDetailProduct'])->name('home-detail-product');
    Route::post('get-product', [\App\Http\Controllers\HomeController::class, 'getResultFilter'])->name('home-detail-product-filter');
    Route::get('add-cart/{id}',[\App\Http\Controllers\HomeController::class,'addProductToCart'])->name('add-cart');
    Route::get('get-cart',[\App\Http\Controllers\HomeController::class,'getCart'])->name('home-cart');
    Route::get('get-total-cart',[\App\Http\Controllers\HomeController::class,'getTotalCart'])->name('home-get-total-cart');
    Route::get('checkout',[\App\Http\Controllers\HomeController::class,'Checkout'])->name('home-checkout');
    Route::get('delete-cart/{id}',[\App\Http\Controllers\HomeController::class,'DestroyItemCart'])->name('home-delete-item');
    Route::post('update-cart/{id}',[\App\Http\Controllers\HomeController::class,'UpdateItemCart'])->name('home-update-item');
    Route::post('checkout',[\App\Http\Controllers\HomeController::class,'CheckoutOrder'])->name('home-checkout-order');
});

Route::get('admin/login',[\App\Http\Controllers\AdminController::class,'getFormLoginAdmin'])->name('admin-login-form');
Route::post('admin/login',[\App\Http\Controllers\AdminController::class,'loginAdmin'])->name('admin-login');
Route::get('admin/dashboard',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin-dashboard');
Route::get('admin/logout',[\App\Http\Controllers\AdminController::class,'logout'])->name('admin-logout');



Route::prefix('admin/category')->group(function () {
    Route::get('',[\App\Http\Controllers\CategoryController::class,'index'])->name('category');
    Route::get('create',[\App\Http\Controllers\CategoryController::class,'create'])->name('create-category');
    Route::post('',[\App\Http\Controllers\CategoryController::class,'store'])->name('store-category');
    Route::get('/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('destroy-category');
    Route::get('edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('edit-category');
    Route::post('edit/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('update-category');
});

Route::prefix('admin/product')->group(function () {
    Route::get('',[ProductController::class,'index'])->name('product');
    Route::get('create',[ProductController::class,'create'])->name('create-product');
    Route::post('',[ProductController::class,'store'])->name('store-product');
    Route::get('edit/{id}',[ProductController::class,'detail'])->name('detail-product');
    Route::get('/delete/{id}',[ProductController::class,'destroy'])->name('destroy-product');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('update-product');
});

Route::prefix('admin/user')->group(function () {
    Route::get('',[\App\Http\Controllers\UserController::class,'index'])->name('user');
    Route::get('/create',[\App\Http\Controllers\UserController::class,'create'])->name('create-user');
    Route::post('/store',[\App\Http\Controllers\UserController::class,'store'])->name('store-user');
    Route::get('/edit/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('detail-user');
    Route::get('/delete/{id}',[\App\Http\Controllers\UserController::class,'destroy'])->name('destroy-user');
    Route::post('/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('update-user');
});

Route::prefix('admin/article')->group(function () {
    Route::get('',[\App\Http\Controllers\ArticleController::class,'index'])->name('article');
    Route::get('/create',[\App\Http\Controllers\ArticleController::class,'create'])->name('create-article');
    Route::post('/store',[\App\Http\Controllers\ArticleController::class,'store'])->name('store-article');
    Route::get('/edit/{id}',[\App\Http\Controllers\ArticleController::class,'edit'])->name('detail-article');
    Route::get('/delete/{id}',[\App\Http\Controllers\ArticleController::class,'destroy'])->name('destroy-article');
    Route::post('/update/{id}',[\App\Http\Controllers\ArticleController::class,'update'])->name('update-article');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

