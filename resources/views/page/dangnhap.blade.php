@extends('master_index')
@section('content')
<div class="content-login">
        <div class="page-content">
                <div class="container background-SignIn">
                   <form role="form" action="admin/dangnhap" method="post">
                         <fieldset>
                            <div id="London" class="tabcontent">
                                <p style="margin-top: 40px">
                                    <label for="">Email</label>
                                    <input style ="margin-bottom: 7px;" class="input-tab" type="email" placeholder="Email...">
                                </p>
                                <p>
                                    <label for="">Mật khẩu</label>
                                    <input class="input-tab" type="password" placeholder="Mật khẩu...">
                                </p>
                                <p style="margin-top: 40px !important; margin-left: 200px !important;" >
                                    <input style="width: 20px !important; height: 20px !important;" type="checkbox" name="Remember" id=""> <label for="">Nhớ mật khẩu</label>  
                                    <button type="submit" id="login" style="padding: 10px 20px;    margin: 0 30px;">Đăng nhập</button>
                                </p>
                                <p style="margin-left: 200px !important;">
                                    <a style="color: #a10000; font-weight: bold" href="#">Quên mật khẩu?</a>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                </div>
            
        </div>
    </div>
@stop


