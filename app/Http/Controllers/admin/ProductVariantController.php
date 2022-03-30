<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ProductVariantController extends Controller
{
    function index($product_id){
        $data = ProductVariant::whereRaw('product_id = ?',$product_id)->get();
        return view('admin.product_variant.view.index', compact('data','product_id'));
    }
    function view($product_id,$variant_id){
        $data = ProductVariant::find($variant_id);
        if($data != []){
            return view('admin.product_variant.add.index',compact('data'));
        }
        else return redirect(route('list_variant'));
    }
    function add($id){
        if(Product::find($id) != null){
            if(request()->isMethod('GET')){
                return view('admin.product_variant.add.index',compact('id'));
            }else{
                $checkData = ProductVariant::whereRaw("color = :color AND size = :size AND product_id = :product_id",[
                    'color'=>request()->color,
                    'size'=>request()->size,
                    'product_id'=>request()->product_id
                ])->get();
                if(count($checkData) == 0){
                    ProductVariant::create([
                        'product_id'=>request()->product_id,
                        'size'=>request()->size,
                        'color'=>request()->color,
                        'quantity'=>request()->quantity,
                    ]);                    
                }
                return redirect(route('add_variant',$id));
            }
        }
        else return redirect('list_variant');
    }
    function upload($id){
        $uploadItem = ProductVariant::find($id);
            $uploadItem->email = request()->email;
            $uploadItem->name = request()->name;
            $uploadItem->gender = request()->gender;
            $uploadItem->address = request()->address;
            $uploadItem->phone = request()->phone;
            $uploadItem->save();
            return redirect(route('item_variant',['id'=>$id]));
    }
    function delete($id){
        ProductVariant::find($id)->delete();
        return back();
    }
}
