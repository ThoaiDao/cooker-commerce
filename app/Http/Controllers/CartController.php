<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\orders;
class CartController extends Controller
{
    public function getCart(){
        return view('page.cart');
    }
    public function index(){
        $cart = Cart::content();
        return view('page.cart',[
            'data' => $cart
        ]);
    }

    public function addItem($id){
        $pro = product::find($id);
        Cart::add(['id' => $pro->id,
         'name' => $pro->name, 
         'weight' => 1, 
         'qty' => 1,
         'price' => $pro->unit_price,
         'options'=>[
            'img'=>$pro->image,
            'description'=>$pro->description,
        ]
         ]);
      return back();
        
    }

    public function deleteItem($id){
        Cart::remove($id);
        return back();
    }
    public function getGioHang(){
        $cart = Cart::content();
        // dd($cart);
        return view('page.cart',compact('cart'),[
            'data' => $cart
        ]);


    }
    public function update(Request $request){
        $qty = $request->newQty;
        $rowId = $request->rowId;
        // update cart
        Cart::update($rowId,$qty);
        echo "Cart updated successfully";
      }
}
