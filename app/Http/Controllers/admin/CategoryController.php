<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $data = Category::all();
        return view('admin.categories.view.index', compact('data'));
    }
    function view($id){
        $data = Category::find($id);
        if($data != []){
            return view('admin.categories.add.index',compact('data'));
        }
        else return redirect(route('list_category '));
    }
    function add(){
        if(request()->isMethod('GET')){
            return view('admin.categories.add.index');
        }else{
            Category::create([
                'name'=>request()->name,
            ]);
            return redirect(route('add_category'));
        }
    }
    function upload($id){
        $uploadItem = Category::find($id);
            $uploadItem->name = request()->name;
            $uploadItem->save();
            return redirect(route('item_category',['id'=>$id]));
    }
    function delete($id){
        Category::find($id)->delete();
        return redirect(route('list_category'));
    }
}
