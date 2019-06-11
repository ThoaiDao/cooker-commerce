<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Session;
class CheckoutController extends Controller
{
    public function checkOut(){
        return view('page.checkout');
    }
    public function getCheckOut(){
        $cart = Cart::content();
        // dd($cart);
        return view('page.checkout',compact('cart'),[
            'data' => $cart
        ]);
    }
    public function postCheckOut(Request $request){
        $cart = Cart::content();
        $customer = new customer;
        $customer->name = $request->name;
        $customer->gender= $request->name;
        $customer->email= $request->email;
        $customer->phone_number= $request->phone;
        $customer->address= $request->address;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = Cart::subtotal(0);
        $bill->payment = $request->payment;
        $bill->save();
        foreach($cart  as $ct){
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $ct->id;
            $bill_detail->quantity = $ct->qty;
            $bill_detail->unit_price = $ct->price;
           
            $bill_detail->save();
        }
        // Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Đặt hàng thành công');

    }
   
}
