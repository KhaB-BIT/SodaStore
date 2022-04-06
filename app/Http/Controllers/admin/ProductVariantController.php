<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ProductVariantController extends Controller
{
    function view($product_id,$variant_id){
        $data = ProductVariant::find($variant_id);
        if($data != []){
            return view('admin.product_variant.add.index',compact('data','product_id'));
        }
        else return redirect()->back();
    }
    function add($product_id){
        if(Product::find($product_id) != null){
            if(request()->isMethod('GET')){
                return view('admin.product_variant.add.index',compact('product_id'));
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
                return redirect(route('add_variant',$product_id));
            }
        }
        else return redirect()->back();
    }
    function upload($id){
        $uploadItem = ProductVariant::find($id);
            $uploadItem->size = request()->size;
            $uploadItem->color = request()->color;
            $uploadItem->quantity = request()->quantity;
            $uploadItem->save();
            return redirect()->back();
    }
    function delete($id){
        ProductVariant::find($id)->delete();
        return back();
    }
}
