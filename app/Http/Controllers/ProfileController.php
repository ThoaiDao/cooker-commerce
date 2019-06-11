<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function profile($id){
        $infor = User::find($id);
        return view('profile.ThongTinTaiKhoan',compact('infor'));
    }
    public function updateProfile(Request $req, $id){
         $infor = User::find($id);
         $infor->name = $req->name;
         $infor->email = $req->email;
         $infor->phone = $req->phone;
         $infor->address = $req->address;
         $infor->update();
        return redirect()->back()->with('thanhcong','Cập nhật tài khoản thành công');
    }
    public function order(){
        return view('profile.QuanLyDonHang');
    }
}
