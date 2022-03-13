<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkout_page extends Controller
{
    function index(){
        return view('checkout_page.index');
    }
}
