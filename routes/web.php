<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\user\about_page;
use App\Http\Controllers\user\blog_page;
use App\Http\Controllers\user\checkout_page;
use App\Http\Controllers\user\contact_page;
use App\Http\Controllers\user\home_page;
use App\Http\Controllers\user\shop_page;
use App\Models\Product;
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

Route::get('/', [home_page::class,'index']);
Route::get('/ve-chung-toi', [about_page::class,'index']);
Route::get('/blog', [blog_page::class,'index']);
Route::get('/thanh-toan', [checkout_page::class,'index']);
Route::get('/shop', [shop_page::class,'index']);
Route::get('/lien-he', [contact_page::class,'index']);

Route::prefix('/admin')->group(function(){
    Route::prefix('/product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('list_product');
        Route::get('/detail/{id}',[ProductController::class,'view'])->name('item_product');
        Route::put('/detail/{id}',[ProductController::class,'upload'])->name('update_product');
        Route::get('/add',[ProductController::class,'add'])->name('add_product');
        Route::post('/add',[ProductController::class,'add'])->name('addfunc_product');
        Route::delete('/delete/{id}',[ProductController::class,'delete'])->name('delete_product');
    });

    Route::prefix('/customer')->group(function(){
        Route::get('/',[CustomerController::class,'index'])->name('list_customer');
        Route::get('/detail/{id}',[CustomerController::class,'view'])->name('item_customer');
        Route::put('/detail/{id}',[CustomerController::class,'upload'])->name('update_customer');
        Route::get('/add',[CustomerController::class,'add'])->name('add_customer');
        Route::post('/add',[CustomerController::class,'add'])->name('addfunc_customer');
        Route::delete('/delete/{id}',[CustomerController::class,'delete'])->name('delete_customer');
    });
});