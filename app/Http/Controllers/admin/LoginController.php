<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('admin.login_page.index');
    }
    function process(){
        if(Admin::whereRaw('email=?',request()->email)->first()->password == request()->password){
            session(['admin'=>[
                'email'=>request()->email,
                'password'=>request()->password
            ]]);
        }
        return redirect(route('admin'));
    }
    function logout(){
        session()->forget('admin');
        return redirect(route('admin_login'));
    }
}
