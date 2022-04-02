<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class home_page extends Controller
{
    function index(){
        $data = Product::all();
        return view('user.home_page.index', compact('data'));
    }
}
