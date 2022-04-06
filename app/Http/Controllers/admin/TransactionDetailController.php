<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    function index($id){
        $data = TransactionDetail::whereRaw('transaction_id = ?',$id)->get();
        if(count($data) > 0) return view('admin.invoice_detail.index',compact('data','id'));
        else return redirect()->back();
    }
}
