<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Product; 
use App\Customer; 
use App\users; 
class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        // do u want get current user? can use it code "Auth::user()" 
        $data['tasks'] = [
            [
                'name' => 'Design New Dashboard',
                'progress' => '87',
                'color' => 'danger'
            ],
            [
                'name' => 'Create Home Page',
                'progress' => '76',
                'color' => 'warning'
            ],
            [
                'name' => 'Some Other Task',
                'progress' => '32',
                'color' => 'success'
            ],
            [
                'name' => 'Start Building Website',
                'progress' => '56',
                'color' => 'info'
            ],
            [
                'name' => 'Develop an Awesome Algorithm',
                'progress' => '10',
                'color' => 'success'
            ]
        ];
        return view('admin.admin')->with($data);
      }
      public function getLogin()
      {
         
              return view('page.login');
         
  
      }

      public function postLogin(LoginRequest $request)
      {
          $login = [
              'email' => $request->txtEmail,
              'password' => $request->txtPassword,
              'level' => 1,
              'status' => 1
          ];
          if (Auth::attempt($login)) {
              return redirect('admin.admin');
          } else {
              return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
          }
      }
  
      /**
       * action admincp/logout
       * @return RedirectResponse
       */
      public function getLogout()
      {
          Auth::logout();
          return redirect()->route('getLogin');
      }

  
     public function profile(){
         return view('admin.profile');
     }

    //Save product after add new product
     public function saveProduct(Request $request){
        $id_type = $request->id_type;
        $name = $request->name;
        $new = $request->new;
        $image = $request->image;
        $price = $request->price;
        $promotion = $request->promotion;
        $Unit = $request->Unit;
        $description = $request->description;
        $add_Product = DB::table("products")->insert([
            'id_type'=> $id_type,
            'name' =>  $name,
            'new' =>  "1",
            'image' =>  $image,
            'unit_price'=> $price,
            'promotion_price' =>  $promotion,
            'Unit'=> $Unit,
            'description'=> $description,
        ]);
        if($add_Product){
            return redirect()->back()->with('them','Thêm mới thành công');
        }else{
            echo"Error";
        }
     }

     //Add Product
     public function addProduct(){
         $i = 0;
        $list_product = DB::table('products')
        ->join('type_products','type_products.id','=','products.id_type')
       ->select('products.*','type_products.name_type')
          ->get();
         return view('admin.addProduct',compact('list_product','i')); 
     }
    
     //Edit Product 
     public function editProduct($id){
         $edit_Product = Product::find($id);
         return view('admin.editProduct',compact('edit_Product'));
     }

     //Update Product after edit
     public function updateProduct(Request $req, $id){
        $edit_Product = Product::find($id);
        $edit_Product->id_type = $req->id_type;
        $edit_Product->name = $req->name;
        $edit_Product->new = $req->new;
        $edit_Product->image = $req->image;
        $edit_Product->unit_price = $req->price;
        $edit_Product->promotion_price = $req->promotion;
        $edit_Product->unit = $req->Unit;
        $edit_Product->description = $req->description;
        $edit_Product->update();
        return redirect()->back()->with('thanhcong','Sửa thành công');
    }

    //List Customer
    public function listCustomer(){
        $i = 0;
       $list_customer = DB::table('customer')->get();
        return view('admin.customer',compact('list_customer','i')); 
    }

    //List User
    public function listUser(){
        $i = 0;
       $list_user = DB::table('users')->get();
        return view('admin.user',compact('list_user','i')); 
    }

    //delete Product
    public function deleteProduct($id){
        Product::destroy($id);
        return redirect()->back()->with('delete','Xóa thành công');
    }

    //search product
    public function searchProduct(Request $request){
        $searchData = $request->searchData;
        //start query fo search
        $data =  DB::table('products')
        ->join('type_products','type_products.id','=','products.id_type')
       ->select('products.*','type_products.name_type')
        ->where('name','like','%'.$searchData. '%')->paginate(4);
      
       return view('admin.searchProduct',compact('data','searchData')); 
    }

    //search user
    public function search_user(Request $request){
        $i = 0;
        $searchData = $request->searchData;
        //start query fo search
        $data =  DB::table('users')
        ->where('name','like','%'.$searchData. '%')->get();
       return view('admin.searchUser',compact('data','i')); 
    }

    //search customer
    public function searchCustomer(Request $request){
        $i = 0;
        $searchData = $request->searchData;
        //start query fo search
        $data =  DB::table('customer')
        ->where('name','like','%'.$searchData. '%')->get();
       return view('admin.searchCustomer',compact('data','i')); 
    }

    //
    public function listOrder(){
        $list_order = DB::table('bills')
        ->leftjoin('customer', 'customer.id', '=', 'bills.id_customer')
        // ->leftjoin('bill_detail', 'bills.id', '=', 'bill_detail.id_bill')
        ->select('customer.*','bills.*')
        ->get();
          return view('admin.listOrder',compact('list_order')); 
    }
}
