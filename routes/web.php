<?php

use App\Http\Controllers\user\about_page;
use App\Http\Controllers\user\blog_page;
use App\Http\Controllers\user\checkout_page;
use App\Http\Controllers\user\contact_page;
use App\Http\Controllers\user\home_page;
use App\Http\Controllers\user\shop_page;
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

Route::get('/admin',function(){
    return view('admin.table.index');
});

