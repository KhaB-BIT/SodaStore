<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index(){
        $cart = [];
        $data = [];
        if(session()->has('cart')) $cart = session('cart');
        foreach($cart as $item){
            $itemVariant = ProductVariant::find($item['variant']);
            $data[] = [
                'variant'=> $itemVariant,
                'product'=> Product::find($itemVariant->product_id),
                'quantity'=> $item['quantity']
            ];
        }
        return view('admin.checkout.index',compact('data'));
        // session()->flush();
        // return session('cart');
    }
    function total(){
        $data = session('cart');
        $total = 0;
        foreach($data as $item){
            $itemVariant = Product::find(ProductVariant::find($item['variant'])->product_id);
            $total += $item['quantity'] * $itemVariant->price;
        }

        if(session()->has('cart_total')) session()->forget('cart_total');
        session(['cart_total'=>$total]);

        $total = round($total / 23000,2);
        return response()->json(['total'=>$total],200);
    }
    function completed($customerID,$paymentID){
        $transID = Transaction::create([
            'payment_id'=>$paymentID,
            'admin_id'=>1,
            'customer_id'=>$customerID,
            'total'=>12000,
            'payment_mothod' => 'PAYPAL',
            'status'=>'COMPLETED'
        ])->id;

        $data = session()->pull('cart');
        foreach($data as $item){
            $itemProduct = Product::find(ProductVariant::find($item['variant'])->product_id);
            TransactionDetail::create([
                'transaction_id'=>$transID,
                'variant_id'=>$item['variant'],
                'price'=>$itemProduct->price,
                'quantity'=>$item['quantity']
            ]);
        }
    }
}
