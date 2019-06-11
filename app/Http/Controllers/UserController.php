<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getDangNhap(){
        return view('auth.login');
    }

    public function postDangNhap(Request $req){
         $this->validate($req,
           [
                'email' =>'required|email',
                'password' =>'required|min:6|max:30',
           ],
            [
                'email.required' =>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
               'passsword.required'=>'Vui lòng nhập mật khẩu',
               'password.min'=>'Mật khẩu tối thiểu là 6 kí tự',
                'password.max'=>'Mật khẩu tối đa là 30 kí tự', 
           ]);
        $login = [
            'email' => $req->email,
            'password' => $req->password
        ];
        $login_user= [
            'email' => $req->email,
            'password' => $req->password,
            'level' => 0,
            'status' => 0
        ];
        if (Auth::attempt($login)) {
            return redirect('trang-chu');
        } 
        return redirect()->back()->withInput($req->only('email', 'remember'))->withErrors([
            'approve' => 'Wrong password or this account not approved yet.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('trang-chu');
    }

}
