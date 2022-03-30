<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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

    Route::get('/category', [HomeController::class, 'category'])->name('category');
    Route::get('/product', [HomeController::class, 'product'])->name('product');
    Route::get('/order', [HomeController::class, 'order'])->name('order');


Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/admin', [AdminController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
});
