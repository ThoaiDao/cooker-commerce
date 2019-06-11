@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title" style="margin-top: 10px;">Quản lý đơn hàng </h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('/')}}">Tài khoản</a> / <span>Quản lý đơn hàng</span>
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
							<li><a href="{{route('tt_taikhoan',$infor->id)}">Thông tin tài khoản</a></li>
							<li><a href="{{route('ql_donhang')}}">Quản lý đơn hàng</a></li>
						</ul>
					</div>
					<div class="col-sm-7">
                    <h2>Đơn hàng của tôi</h2>
                            <div class="beta-products-Chi tiếts">
                           
                            <div class="clearfix"></div>
                          </div>
                            <br>
                            <br>
                            <div class="">
                              <table style="    width: 850px;"  class="table table-bordered table-striped mb-0">
                                <thead  >
                                  <tr>
                                  <th style="background: white !important;">Mã đơn hàng</th>
                                    <th>Ngày mua</th>
                                    <th>Sản phẩm</th>
                                    <th >Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                      <td style ="width: 20px; border-right: 1px ridge;"></td>
                                        <td style ="width: 120px; border-right: 1px ridge;"></td>
                                        <td style ="width: 150px ;   border-right: 1px ridge;"></td>
                                        <td style ="width: 60px ;   border-right: 1px ridge;"></td>
                                        <td style ="width: 20px; border-right: 1px ridge;"></td>
                                    </tr>
                               
                                </tbody>
                              
                              </table>
                            
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