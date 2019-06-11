<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide; //sử dụng  Slide model 
use App\Product; //sử dụng model Product 
use App\ProductType;
use App\BillDetail;
use DB;
use App\SlideHistory;
use App\Cart;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
       
       
       
   
}
