<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact_page extends Controller
{
    function index(){
        return view('contact_page.index');
    }
}
