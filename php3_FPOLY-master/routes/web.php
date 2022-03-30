<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/categories/{id}', [HomeController::class, 'cateList'])->name('cate.list');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/product/{id}/{cate_id}', [HomeController::class, 'productsDetail'])->name('product.detail');
Route::get('dang-xuat', function(){
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::post('/cart/{id}', [HomeController::class, 'addToCart'])->name('addCart');
Route::get('/cart-list', [HomeController::class, 'listCart'])->name('cart.list');
Route::get('/cart-delete/{id}', [HomeController::class, 'removeCart'])->name('cart.remove');
Route::post('/cart-update', [HomeController::class, 'updateCart'])->name('cart.update');
Route::post('/add-invoice', [HomeController::class, 'addinvoice'])->name('invoice.add');
Route::get('/list-order', [HomeController::class, 'listOrder'])->name('order.list');
Route::post('/show-order', [HomeController::class, 'showOrder'])->name('show.order');

// Route::get('demo-phan-quyen', function(){
//     $admin = User::find(4);
//     $khuongtv  = User::find(5);

//     $admin->givePermissionTo('show_product');
//     $admin->givePermissionTo('remove_product');

//     $khuongtv->givePermissionTo('show_product');
//     $khuongtv->givePermissionTo('add_product');
//     $khuongtv->givePermissionTo('edit_product');
//     $khuongtv->givePermissionTo('remove_product');

// });

// ->middleware('permission:add_product')





























Route::get('products', [HomeController::class, 'listProducts'])->name('products');
Route::get('product-add', [HomeController::class, 'addProduct'])->name('addProduct');
Route::post('save-add', [HomeController::class, 'saveAdd'])->name('save-add');
Route::get('product-delete/{id}', [HomeController::class, 'deleteProduct'])->name('deleteProducts');
Route::get('product-edit/{id}', [HomeController::class, 'editProduct'])->name('editProducts');
Route::post('product-edit/save-edit/{id}', [HomeController::class, 'saveEdit'])->name('save-edit');

Route::get('users', [HomeController::class, 'index']);
Route::get('info', [HomeController::class, 'infoForm']);
Route::get('save-info', [HomeController::class, 'saveInfo'])->name('save.info');
Route::get('test', [HomeController::class, 'test']);


Route::get('dang-nhap', [LoginController::class, 'LoginForm'])->name('login');
Route::post('dang-nhap', [LoginController::class, 'postLogin']);

Route::get('fake-password/{mk?}', function($mk = '123456'){
    return Hash::make($mk);
});

