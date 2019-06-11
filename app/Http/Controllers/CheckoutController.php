<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CheckoutController extends Controller
{
    public function checkOut(){
        return view('page.checkout');
    }
    public function getCheckOut(){
        $cart = Cart::content();
        return view('page.checkout',compact('cart'),[
            'data' => $cart
        ]);
    }
    public function postCheckOut(){

    }
}
