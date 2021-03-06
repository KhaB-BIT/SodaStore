<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    function index($id = null){
        $data = null;
        if(request()->search_product == null){
            if($id == null) $data = Product::all();
            else if(Category::find($id) != null) $data = Product::whereRaw('category_id = ?',$id)->get();
        }
        else $data = Product::whereRaw('name like ?','%'.request()->search_product.'%')->get();
        $categories = Category::all();
        return view('admin.selling.view.index', compact('data','categories','id'));
        // session()->flush();
        // return session()->all();
    }
    function show($id){
        $variant = ProductVariant::whereRaw('product_id = ?',$id)->get();
        $data = Product::find($id);
        return response()->json(['data'=>$data, 'variant'=>$variant],200);
    }
    function addToCart($id, $quantity, $mode=0){
        $itemVariant = ProductVariant::find($id);
        if($itemVariant == null) return response()->json(['status'=>'Please choose SIZE and COLOR']);
        else{
            if(session()->has('cart')){
                $data = session('cart');
                $check = true;
                foreach($data as $key => $item){
                    if($item["variant"] == $id){
                        if($mode == 1){
                            if($itemVariant->quantity < $quantity) $data[$key]["quantity"] = $itemVariant->quantity;
                            else $data[$key]["quantity"] = $quantity;
                        }
                        else{
                            if($itemVariant->quantity < $data[$key]["quantity"] + $quantity) $data[$key]["quantity"] = $itemVariant->quantity;
                            else $data[$key]["quantity"] = $data[$key]["quantity"] + $quantity;
                        }
                        $check = false;
                    }
                }
                if($check) $data[] = ["variant"=>$id, "quantity"=>$quantity];
                session(['cart'=>$data]);
            }
            else session(["cart"=>[['variant'=>$id, 'quantity'=>$quantity]]]);
            return response()->json(['status'=>'ADDED TO CART']);
        }
    }
}
