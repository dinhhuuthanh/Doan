<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', function(){
    return "Admin Dashboard";
});
Route::prefix('san-pham')->middleware('auth')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/xoa/{id}', [ProductController::class, 'remove'])->name('product.remove');
    Route::get('/tao-moi', [ProductController::class, 'addForm'])->name('product.add');
    Route::post('/tao-moi', [ProductController::class, 'saveAdd']);
    Route::get('/cap-nhat/{id}', [ProductController::class, 'editForm'])->name('product.edit');
    Route::post('/cap-nhat/{id}', [ProductController::class, 'saveEdit'])->middleware('log_edit_product');
});
Route::prefix('danh-muc')->middleware('auth')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/xoa/{id}', [CategoryController::class, 'remove'])->name('category.remove');
    Route::get('/tao-moi', [CategoryController::class, 'addForm'])->name('category.add');
    Route::post('/tao-moi', [CategoryController::class, 'saveAdd']);
    Route::get('/cap-nhat/{id}', [CategoryController::class, 'editForm'])->name('category.edit');
    Route::post('/cap-nhat/{id}', [CategoryController::class, 'saveEdit']);
});
Route::prefix('hoa-don')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'listInvoices'])->name('invoice.index');
    Route::get('/xoa/{id}', [HomeController::class, 'removeInvoice'])->name('invoice.remove');
    Route::get('/cap-nhat/{id}', [HomeController::class, 'editInvoice'])->name('invoice.edit');
    Route::post('/cap-nhat/{id}', [HomeController::class, 'saveEditInvoice']);
    Route::get('/order-detail/{id}', [HomeController::class, 'invoiceDetai'])->name('invoice.detail');
    Route::get('/xoa-order-detail/{id}/{id_invoi}', [HomeController::class, 'removeInvoiceDl'])->name('invoiceDetail.remove');
    Route::post('/them-san-pham/{id}', [HomeController::class, 'addProInvoice'])->name('invoiceDetail.addpro');
    Route::post('/update-quantity/{id}/{id_invoi}', [HomeController::class, 'updateQuantity'])->name('invoiceDetail.updateQuantity');
})
?>