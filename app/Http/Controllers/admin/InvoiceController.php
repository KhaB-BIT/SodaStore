<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function view(){
        $data = Transaction::all();
        return view('admin.invoice.view.index',compact('data'));
    }
}
