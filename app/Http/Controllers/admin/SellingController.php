<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    function index(){
        $data = Product::all();
        return view('admin.selling.view.index', compact('data'));
        // session()->flush();
        // return session()->all();
    }
    function show($id){
        $variant = ProductVariant::whereRaw('product_id = ?',$id)->get();
        $data = Product::find($id);
        return response()->json(['data'=>$data, 'variant'=>$variant],200);
    }
    function addToCart($id, $quantity, $mode=0){
        if(session()->has('cart')){
            $data = session('cart');
            $check = true;
            foreach($data as $key => $item){
                if($item["variant"] == $id){
                    if($mode == 1){
                        $data[$key]["quantity"] = $quantity;
                    }
                    else $data[$key]["quantity"] = $data[$key]["quantity"] + $quantity;
                    $check = false;
                }
            }
            if($check) $data[] = ["variant"=>$id, "quantity"=>$quantity];
            session(['cart'=>$data]);
            return session('cart');
        }
        else session(["cart"=>[['variant'=>$id, 'quantity'=>$quantity]]]);
    }
}
