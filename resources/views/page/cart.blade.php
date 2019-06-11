@extends('master_index')
@section('content')

<!--content-->

<div style="margin-top: 30px" class="row top20 hidden-xs">
	            <div class="col-sm-3">
		            <div class="blk-box">
		              <div class="blk-boxHd">Giỏ hàng</div>
		              <div class="blk-boxTxt hidden-sm">Bạn có muốn xem lại đơn hàng?</div>
		              <div class="arrow-down"></div>
		            </div>
	            </div>
	            <div class="col-sm-3">
		            <div class="wht-box">
		              <div class="wht-boxHd">Hóa đơn &amp; Giao hàng</div>
		              <div class="wht-boxTxt hidden-sm">Bạn muốn giao hàng tới đâu?</div>
		            </div>
	            </div>
	            <div class="col-sm-3">
		            <div class="wht-box">
		              <div class="wht-boxHd">Đánh giá đặt hàng</div>
		              <div class="wht-boxTxt hidden-sm">Bạn có hài lòng không?</div>
		            </div>
	            </div>
	            <div class="col-sm-3">
		            <div class="wht-box">
		              <div class="wht-boxHd">Xác nhận </div>
		              <div class="wht-boxTxt hidden-sm">Xác nhận đơn hàng</div>
		            </div>
	            </div>
	        </div>
						@if(Cart::count()!="0")
		    <div class="row">
		        <div class="cart">
		            <div class="col-sm-12">
                        <h2 style="margin-top:30px">Giỏ hàng</h2>
			            <div class="row">
			                <div class="col-sm-8">
										
                         @foreach($data as $pro)
				                <div class="cart-row">
				                    <div class="row">
					                    <div class="col-xs-12 col-sm-6 col-md-6 text-center"><img style="height: 160px; width: 160px" src="source/image/product/{{$pro->options->img}}" class="img-responsive pull-left" />
																<span style="margin-left: 30px" class="pull-left top20">
																<strong>{{$pro->name}}</strong> <br>
																<strong>{{$pro->options->description}}</strong> <br>
																</span>
																</div>
					                    <div class="col-xs-12 col-sm-3 col-md-3">
															<input type="hidden" value="{{$pro->rowId}}"
                                       id="rowID{{$pro->id}}"/>
					                      <div class="cart-qty"> <span>Số lượng : </span>
					                         <input style ="height: 30px;width: 50px;"type="number" max="10" min="1"
                                        value="{{$pro->qty}}" class="qty-fill"
                                        id="upCart{{$pro->id}}">
					                      </div>
					                      <a href="{{route('gio-hang')}}" class="cart-remove btn btn-success">Cập nhật</a>
					                      <div class="cart-remove btn btn-danger"> <a href="{{route('remove',$pro->rowId)}}">Xóa</a> </div>
					                    </div>
					                    <div class="col-xs-12 col-sm-3 col-md-3">
					                      <h6>Đơn giá: {{$pro->price}} ₫</h6>
					                      <hr/>
					                      <h6 class="redtext">Tổng tiền: {{$pro->price * $pro->qty}} ₫</h6>
					                    </div>
				                    </div>
				                </div>
				                @endforeach
											
				                <div class="col-xs-12 col-sm-12 col-md-6">
					                <div class="chk-coupon">
						                <label>Phiếu Code (nếu có)</label>
						                <div class="input-group">
						                    <input type="text" class="form-control" >
						                    <span class="input-group-btn">
						                    <input style="background: white ; border: 2px solid #cc1602; color: #cc1602" type="button" class="btn fld-btn" value="Đồng ý" />
						                    </span> 
						                </div>
					                </div>
					            </div>
					            <div style ="margin-bottom: 50px"class="clearfix"></div>  
			                </div>
			                <div class="col-sm-4">
					            <div class="cart-total">
					                <h4>Tổng số tiền</h4>
					                <table>
					                  <tbody>
					                    <tr>
					                      <td>Tạm tính</td>
					                      <td>{{Cart::subtotal()}}₫</td>
					                    </tr>
					                    <tr>
					                      <td>Mã giảm giá (Nếu có)</td>
					                      <td>0₫</td>
					                    </tr>
					                    <tr>
					                      <td>Tổng tiền</td>
					                      <td>{{Cart::subtotal()}}₫</td>
					                    </tr>
					                  </tbody>
					                </table>
													@if (Auth::user())
														<a style="margin-left: 200px;background: white ; border: 2px solid #cc1602; color: #cc1602" href="{{route('check_out')}}" class="btn check_out btn_block">Tiến hàng đặt hàng</a>
													@else
													<i style="margin-left: 150px;">Tiến hành <a href="{{route('signin')}}">đăng kí</a>  hoặc <a href="{{route('login')}}">đăng nhập</a>  để đặt hàng</i>
													<a style="margin-left: 200px;background: white ; border: 2px solid #cc1602; color: #cc1602" href="{{route('signin')}}" class="btn check_out btn_block">Tiến hàng đặt hàng</a>
													@endif
					                
					                
					            </div>
		                    </div>
			            </div>
		            </div>
		            <div class="clearfix"></div>
		        </div>
						@else
						<h1>Không có sản phẩm nào trong giỏ hàng</h1>
						
						@endif
	        </div>
					@stop
					@section('js_content')
<script>
  $(document).ready(function(){
    $("#CartMsg").hide();
    //$('#CartTotal').hide();
    @foreach($data as $pro)
    $("#upCart{{$pro->id}}").on('change keyup', function(){
      var newQty = $("#upCart{{$pro->id}}").val();
      var rowID = $("#rowID{{$pro->id}}").val();
      $.ajax({
          url:'{{url('/cart/update')}}',
          data:'rowId=' + rowID + '&newQty=' + newQty,
          type:'get',
          success:function(response){
            $("#CartMsg").show();
            console.log(response);
            $("#CartMsg").html(response);
          }
      });
    });
    @endforeach
  $('#coupon_btn').click(function(){
      var coupon_id = $('#coupon_id').val();
      //alert(coupon_id);
      $.ajax({
        url:'{{url('/checkCoupon')}}',
        data: 'code=' + coupon_id,
        success:function(res){
       // alert(res);
       $('#cartTotal').html(res);
        }
      })
  });
   
  });
  </script>



@stop
