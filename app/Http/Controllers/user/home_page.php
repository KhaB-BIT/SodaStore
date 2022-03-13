<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class home_page extends Controller
{
    function index(){
        return view('home_page.index');
    }
}
