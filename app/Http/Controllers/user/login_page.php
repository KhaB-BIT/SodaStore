<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login_page extends Controller
{
    function index(){
        return view('user.login_page.index');
    }
}
