<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index(){
        $cart = [];
        $data = [];
        if(session()->has('cart')) $cart = session('cart');
        foreach($cart as $item){
            $itemVariant = ProductVariant::find($item['variant']);
            $data[] = [
                'variant'=> $itemVariant,
                'product'=> Product::find($itemVariant->product_id),
                'quantity'=> $item['quantity']
            ];
        }
        return view('admin.checkout.index',compact('data'));
        // session()->flush();
        // return session('cart');
    }
}
