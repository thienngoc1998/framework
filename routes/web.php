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

Route::get('/', function () {
    return view('welcome');
});
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
    Route::get('/{id}',[ProductController::class,'destroy'])->name('destroy-product');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

