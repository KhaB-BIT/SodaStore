<?php

use App\Http\Controllers\admin\CheckoutController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\admin\InvoiceController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariantController;
use App\Http\Controllers\admin\SellingController;
use App\Http\Controllers\user\about_page;
use App\Http\Controllers\user\blog_page;
use App\Http\Controllers\user\checkout_page;
use App\Http\Controllers\user\contact_page;
use App\Http\Controllers\user\home_page;
use App\Http\Controllers\user\shop_page;
use App\Http\Controllers\user\login_page;
use App\Mail\SodastoreInvoiceMail;
use App\Models\ProductVariant;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [home_page::class,'index'])->name('homepage');
Route::get('/ve-chung-toi', [about_page::class,'index']);
Route::get('/blog', [blog_page::class,'index']);
Route::get('/thanh-toan', [checkout_page::class,'index']);
Route::prefix('/shop')->group(function(){
    Route::get('', [shop_page::class,'index']);
    Route::get('/show/{id}',[shop_page::class, 'show'])->where(['id'=>'[0-9]+'])->name('show_shop_item');
});
Route::get('/lien-he', [contact_page::class,'index']);
Route::get('/login',[login_page::class,'index']);

// Route::get('/mail',function(){
//     // Mail::to('bi.nv2@oude.edu.vn')->send(new SodastoreInvoiceMail());
//     return new SodastoreInvoiceMail();
// });

//----------------------------- ADMIN ROUTE ---------------------------//

Route::get('admin/login',[LoginController::class, 'index'])->name('admin_login');
Route::post('admin/login',[LoginController::class,'process'])->name('admin_loginFunc');
Route::get('admin/logout',[LoginController::class,'logout'])->name('admin_logout');



Route::prefix('/admin')->middleware('AdminPermission')->group(function(){
    Route::get('/',[SellingController::class,'index'])->name('admin');

    Route::get('/selling',[SellingController::class,'index'])->name('list_selling');
    Route::get('/selling/addtocart/{id}/{quantity}/{mode?}',[SellingController::class,'addToCart'])->name('addTocart_selling');


    Route::get('/checkout',[CheckoutController::class,'index'])->name('list_checkout');
    Route::post('/checkout/total',[CheckoutController::class,'total']);
    Route::post('/checkout/completed/{customer_id}/{payment_id}',[CheckoutController::class,'completed']);
    Route::get('/checkout/clear',[CheckoutController::class,'clear'])->name('clear_checkout');

    
    Route::prefix('/product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('list_product');
        Route::get('/detail/{id}',[ProductController::class,'view'])->name('item_product');
        Route::put('/detail/{id}',[ProductController::class,'upload'])->name('update_product');
        Route::get('/add',[ProductController::class,'add'])->name('add_product');
        Route::post('/add',[ProductController::class,'add'])->name('addfunc_product');
        Route::delete('/delete/{id}',[ProductController::class,'delete'])->name('delete_product');
    });

    Route::prefix('/variant')->group(function(){
        Route::get('/view/{product_id}',[ProductVariantController::class,'index'])->where(['id'=>'[0-9]+'])->name('list_variant');
        Route::get('/view/{product_id}/{variant_id}',[ProductVariantController::class,'view'])->where(['id'=>'[0-9]+', 'variant_id'=>'[0-9]+'])->name('item_variant');
        Route::get('/add/{id}',[ProductVariantController::class,'add'])->where(['id'=>'[0-9]+'])->name('add_variant');
        Route::post('/add/{id}',[ProductVariantController::class,'add'])->where(['id'=>'[0-9]+'])->name('addfunc_variant');
        Route::put('/upload/{id}')->where(['id'=>'[0-9]+'])->name('update_variant');
        Route::delete('/delete/{id}',[ProductVariantController::class,'delete'])->where(['id'=>'[0-9]+'])->name('delete_variant');

    });

    Route::prefix('/customer')->group(function(){
        Route::get('/',[CustomerController::class,'index'])->name('list_customer');
        Route::get('/detail/{id}',[CustomerController::class,'view'])->name('item_customer');
        Route::put('/detail/{id}',[CustomerController::class,'upload'])->name('update_customer');
        Route::get('/add',[CustomerController::class,'add'])->name('add_customer');
        Route::post('/add',[CustomerController::class,'add'])->name('addfunc_customer');
        Route::delete('/delete/{id}',[CustomerController::class,'delete'])->name('delete_customer');
        Route::get('/search/{phone}',[CustomerController::class,'search'])->name('search_customer');
    });

    Route::prefix('/invoice')->group(function(){
        Route::get('/',[InvoiceController::class,'view'])->name('list_invoice');
    });
});