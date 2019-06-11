@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title" style="margin-top: 10px;">Thông tin tài khoản</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin tài khoản</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<li><a href="{{route('tt_taikhoan',$infor->id)}}">Thông tin tài khoản</a></li>
							<li><a href="{{route('ql_donhang')}}">Quản lý đơn hàng</a></li>
						</ul>
					</div>
					<div class="col-sm-9">
                    <div class="">
                              <h4>Thông tin tài khoản</h4>
                              <br>
                              <form action="{{route('updateProfile',$infor->id)}}" method="POST">
                              {{csrf_field()}}
                              @if(Session::has('thanhcong'))
                                <div class="alert alert-success">
                                    {{Session::get('thanhcong')}}</div>
                              @endif
                              <label>Họ tên</label>
                                <input type="text" name="name" class="form-control" value="{{$infor->name}}"/>
                                <br>
                                  <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{$infor->email}}"/>
                                <br>
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="{{$infor->phone}}"/>
                                <br>
                                <label>Địa chỉ</label>
                                <input type="text" name="address" class="form-control" value="{{$infor->address}}"/>
                                <br>
                                <div style="-webkit-appearance: none !important;">
                                    <input type="checkbox" id="scales" name="repass"
                                            checked>
                                    <label for="scales">Thay đổi mật khẩu</label>
                                   
                                </div> <br>
                                <div>
                                    <label>Nhập mật khẩu cũ</label>
                                    <input type="password" name="oldpass" class="form-control" value=""/>
                                    <br>
                                    <label>Nhập mật khẩu mới</label>
                                    <input type="password" name="newpass" class="form-control" value=""/>
                                    <br>
                                    <label>Nhập lại mật khẩu mới</label>
                                    <input type="password" name="image" class="form-control" value=""/>
                                    <br>
                                </div>
                                <br>
                                  <input type="submit" class="btn btn-success btn-fill" value="Cập nhật" id="btn"/> 
                              </form>
                            
                            <!-- <p id="msg" class="alert alert-success"></p> -->
                        </div>
                       
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection
@section('js_content')
<script src="source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
    @stop