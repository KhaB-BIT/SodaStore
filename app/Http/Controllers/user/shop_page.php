<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class shop_page extends Controller
{
    function index(){
        $data = Product::all();
        return view('user.shop_page.index', compact('data'));
    }
    function show($id){
        $variant = ProductVariant::whereRaw('product_id = ?',$id)->get();
        $data = Product::find($id);
        return response()->json(['data'=>$data, 'variant'=>$variant],200);
    }
}
