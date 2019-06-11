<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function search(Request $request){
        $searchData = $request->searchData;
        //start query fo search
        $data = DB::table('products')
        ->where('name','like','%'.$searchData. '%')->paginate(4);
      
       return view('page.timkiem',compact('data','searchData')); 
    }
}
