<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blog_page extends Controller
{
    function index(){
        return view('user.blog_page.index');
    }
}
