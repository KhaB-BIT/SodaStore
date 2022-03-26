<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    function index($product_id){
        $data = ProductVariant::whereRaw('product_id = ?',$product_id)->get();
        return view('admin.product_variant.view.index', compact('data'));
    }
    function view($id){
        $data = ProductVariant::find($id);
        if($data != []){
            return view('admin.product_variant.add.index',compact('data'));
        }
        else return redirect(route('list_customer'));
    }
    function add(){
        if(request()->isMethod('GET')){
            return view('admin.customer.add.index');
        }else{
            ProductVariant::create([ 
                'email'=>request()->email,
                'name'=>request()->name,
                'gender'=>request()->gender,
                'address'=>request()->address,
                'phone'=>request()->phone
            ]);
            return redirect(route('add_customer'));
        }
    }
    function upload($id){
        $uploadItem = ProductVariant::find($id);
            $uploadItem->email = request()->email;
            $uploadItem->name = request()->name;
            $uploadItem->gender = request()->gender;
            $uploadItem->address = request()->address;
            $uploadItem->phone = request()->phone;
            $uploadItem->save();
            return redirect(route('item_customer',['id'=>$id]));
    }
    function delete($id){
        ProductVariant::find($id)->delete();
        return redirect(route('list_customer'));
    }
}
