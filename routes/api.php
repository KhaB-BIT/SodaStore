<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'paypal'], function(){
    // Route::get('/order/create',[\App\Http\Controllers\Front\PaypalPaymentController::class,'create']);
    Route::post('/order/create',function(){
        $data = [
            'total'=>json_decode(request()->cookie('cart'))
        ];
        return response()->json(['data'=>$data]);
    });
    Route::post('/order/capture/',[\App\Http\Controllers\Front\PaypalPaymentController::class,'capture']);
});
