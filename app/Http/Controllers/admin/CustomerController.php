<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(){
        $data = Customer::all();
        return view('admin.customer.view.index', compact('data'));
    }
    function view($id){
        $data = Customer::find($id);
        if($data != []){
            return view('admin.customer.add.index',compact('data'));
        }
        else return redirect(route('list_customer'));
    }
    function add(){
        if(request()->isMethod('GET')){
            return view('admin.customer.add.index');
        }else{
            Customer::create([
                'email'=>request()->email,
                'name'=>request()->name,
                'gender'=>request()->gender,
                'address'=>request()->address,
                'phone'=>request()->phone
            ]);
            return redirect(route('add_customer'));
        }
    }
    function upload($id){
        $uploadItem = Customer::find($id);
            $uploadItem->email = request()->email;
            $uploadItem->name = request()->name;
            $uploadItem->gender = request()->gender;
            $uploadItem->address = request()->address;
            $uploadItem->phone = request()->phone;
            $uploadItem->save();
            return redirect(route('item_customer',['id'=>$id]));
    }
    function delete($id){
        Customer::find($id)->delete();
        return redirect(route('list_customer'));
    }
}
