<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\SodastoreInvoiceMail;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    function total($customerID){
        $data = session('cart');
        $total = 0;
        foreach($data as $item){
            $itemVariant = Product::find(ProductVariant::find($item['variant'])->product_id);
            $total += $item['quantity'] * $itemVariant->price;
        }

        if(session()->has('cart_total')) session()->forget('cart_total');
        session(['cart_pending'=>[
            'customer_id' => $customerID,
            'total' => $total
        ]]);

        $total = round($total / 23000,2);
        return response()->json(['total'=>$total],200);
    }
    function completed($paymentID){
        $cartPending = session()->pull('cart_pending');
        $itemTrans = Transaction::create([
            'payment_id'=>$paymentID,
            'admin_id'=>1,
            'customer_id'=>$cartPending['customer_id'],
            'total'=> $cartPending['total'],
            'payment_method' => $paymentID != "-"?'PAYPAL':"CASH",
            'status'=>'COMPLETED'
        ]);

        $data = session()->pull('cart');
        foreach($data as $item){
            $itemProduct = Product::find(ProductVariant::find($item['variant'])->product_id);
            $itemTransactionDetail[] = TransactionDetail::create([
                'transaction_id'=>$itemTrans->id,
                'variant_id'=>$item['variant'],
                'price'=>$itemProduct->price,
                'quantity'=>$item['quantity']
            ]);
            $itemVariant = ProductVariant::find($item['variant']);
            $itemVariant->quantity -= $item['quantity'];
            $itemVariant->save();
        }
        Mail::to(Customer::find($cartPending['customer_id'])->email)->send(new SodastoreInvoiceMail(Customer::find($cartPending['customer_id']),$itemTrans));

    }
    function clear(){
        session()->forget('cart');
        return redirect()->back();
    }
}
