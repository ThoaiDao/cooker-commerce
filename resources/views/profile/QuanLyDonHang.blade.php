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
							<li><a href="{{route('ql_donhang',$infor->id)}}">Quản lý đơn hàng</a></li>
						</ul>
					</div>
					<div class="col-sm-9">
                    <div class="">
                              <h4>Thông tin tài khoản</h4>
                              <br>
                              <div style="position: relative;height: 800px;overflow: auto; display: block;" class="table-wrapper-scroll-y my-custom-scrollbar">
                              <table class="table table-bordered table-striped mb-0">
                                <thead>
                                  <tr>
                                    
                                    <th>Tên khách hàng</th>
                                    <th>Ngày order</th>
                                    <th >Tổng hóa đơn</th>
                                    <th>Hình thức thanh toán</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_order as $order)
                                    <tr>
                                        <td style ="border-right: 1px ridge;">{{$order->name}}</td>
                                        <td style ="   border-right: 1px ridge;">{{$order->date_order}}</td>
                                        <td style ="   border-right: 1px ridge;">{{$order->total}}</td>
                                        <td style ="  border-right: 1px ridge;">{{$order->payment}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              
                              </table>
                            </div>
                            
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