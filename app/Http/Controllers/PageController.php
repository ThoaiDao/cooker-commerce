<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  use Illuminate\Support\Facades\Auth;
use App\Slide; //sử dụng  Slide model 
 use App\Product; //sử dụng model Product 
use App\ProductType;
use App\BillDetail;
 use DB;
 use App\SlideHistory;
use App\Cart;
 use Session;
 use App\User;
 use Hash;
 use Auth;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all(); //lấy tất cả dữ liệu trong  Slide
        $new_product = Product::where('new',1)->paginate(4);//lây product có new =1
        $sanpham_khuyenmai = Product::where('promotion_price','<>','unit_price')->paginate(8);
         return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai')); //compact truyền vào biến slide để in ra mảng
     }

     public function getLoaiSp($type){
        $sp_theoloai_moi = Product::where('id_type',$type)->where('new',1)->get();
       $sp_khac = Product::where('id_type','<>', $type)->paginate(3);
        $loai = ProductType::all();
        $ten_sp = ProductType::where('id',$type)->first();
        return view('page.loai_sanpham',compact('sp_theoloai_moi', 'sp_khac','loai','ten_sp'));
     }

    public function getChiTietSp(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
      $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);
    $sp_banchay = DB::table('products')
              ->join('bill_detail','products.id','=','bill_detail.id_product')
             ->select('products.*','bill_detail.*')
               ->where('quantity','>',2)
                ->get();
       $sp_moi = Product::where('new',1)->paginate(4);
        return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu','sp_banchay','sp_moi'));
    }

     public function getLienHe(){
        return view('page.lienhe');
     }

    public function getGioiThieu(){
       $slide_gt = SlideHistory::all();
       return view('page.gioithieu',compact('slide_gt'));
   }
   

    public function getLogIn(){
        return view('page.login');
    }

    public function getSignIn(){
        return view('page.signup');
    }

    public function postSignIn(Request $req){
        $this->validate($req,
            [
                'email' =>'required|email|unique:users,email',
                'password' =>'required|min:6|max:30',
                'name' =>'required',
                're_password'=>'required|same:password',
                'phone'=>'required',
                'address'=>'required',
            ],
            [
                'email.required' =>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email này đã đăng kí', 
                'passsword.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu tối thiểu là 6 kí tự',
                'password.max'=>'Mật khẩu tối đa là 30 kí tự',  
                're_password.same'=>'Mật khẩu không giống nhau',
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'address.required'=>'Vui lòng nhập địa chỉ',
            ]);
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password); 
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->save();
            return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');

    }

    
    
    public function getMyAccount(){
        return view('page.myaccount');
    }
}
