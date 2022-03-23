<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('admin.product.view.index', compact('data'));
    }
    function view($id){
        $data = Product::find($id);
        $categories = Category::all();
        if($data != []){
            return view('admin.product.add.index',compact('data','categories'));
        }
        else return redirect(route('list_product'));
    }
    function add(){
        if(request()->isMethod('GET')){
            $categories = Category::all();
            return view('admin.product.add.index',compact('categories'));
        }else{
            Product::create([
                'category_id'=>request()->category_id,
                'name'=>request()->name,
                'desc'=>request()->desc,
                'short_desc'=>request()->short_desc,
                'image'=>request()->image,
                'price'=>request()->price
    
            ]);
            return redirect(route('add_product'));
        }
    }
    function upload($id){
        $uploadItem = Product::find($id);
            $uploadItem->name = request()->name;
            $uploadItem->desc = request()->desc;
            $uploadItem->short_desc = request()->short_desc;
            $uploadItem->image = request()->image;
            $uploadItem->price = request()->price;
            $uploadItem->save();
            return redirect(route('item_product',['id'=>$id]));
    }
    function delete($id){
        Product::find($id)->delete();
        return redirect(route('list_product'));
    }
}
