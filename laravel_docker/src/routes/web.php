<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;



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





Route::group(['prefix' => 'admin'], function () {

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    Route::prefix('subcategory')->group(function () {
        Route::get('/', [SubCategoryController::class, 'index'])->name('subcategory.index');
        Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
        Route::post('/create', [SubCategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('/edit/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::get('/delete/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
    });
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/edit/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::get('/category/subcategory/ajax/{category_id}', [SubCategoryController::class, 'getSubCategory']);
});
