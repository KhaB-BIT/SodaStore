<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        // Product::create([
        //     'category_id'=>1,
        //     'name'=>'Áo khoác nữ Nike',
        //     'desc'=>'Áo khoác với chất liệu độ bền vượt trội',
        //     'short_desc'=>'Áo khoác với chất liệu độ bền vượt trội',
        //     'image'=>'https://taru.vn/image/cache/data/product-3868/H11200-500x500.jpg',
        //     'price'=>1200000
        // ]);
        $data = Product::all();
        return view('admin.product.view.index', compact('data'));
    }
    function form(){
        $categories = Category::all();
        return view('admin.product.add.index',compact('categories'));
    }
    function add(){
        
    }
}
