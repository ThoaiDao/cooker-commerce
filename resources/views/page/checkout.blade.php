@extends('master_index')
@section('content')
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default panel-body">
                    <div  style=" border-bottom: 1px solid #c9c9c9;padding-bottom: 10px;" ><br>
                        <h6>1. Hình thức giao hàng</h6>
                        <input style="  " type="radio" name="" id="">Giao hàng tiêu chuẩn <br>
                        <br>
                    </div>
                    <div  style=" border-bottom: 1px solid #c9c9c9;padding-bottom: 10px;" ><br>
                        <h6>2. Hình thức thanh toán</h6>
                        <input type="radio" name="" id=""> Thanh toán tiền mặt khi nhận hàng <br>
                        <br>
                    </div>
                    <div  style="padding-bottom: 10px;" ><br>
                        <h6>3. Địa chỉ giao hàng</h6>
                        <div class="information">
                            <span>Đào Anh Nữ Huyền Thoại</span><br>
                            <span>19/25 số 8 Linh Trung Thủ Đức, Phường Linh Trung, Quận Thủ Đức, Hồ Chí Minh<br>Điện thoại: 0337482132</span>
                        </div>
                        <br>
                        <a href="/checkout/cart/" class="btn btn-default btn-custom1">Sửa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default panel-body">
                <div style="border-bottom: 1px solid #c9c9c9;padding-bottom: 10px;" class="order">
                    <span class="title">Đơn Hàng ({{count($cart)}} sản phẩm) </span>
                    <span class="title"></span>
                        <a style="float: right;margin-top: -9px" href="/checkout/cart/" class="btn btn-default btn-custom1">Sửa</a><br>
                </div>
               
                <br>
                <div style="border-bottom: 1px solid #c9c9c9;padding-bottom: 10px;">
                    <div  class="row">
                    @foreach($cart as $pr)
                        <div class="col-md-8">
                        {{$pr->qty}} x <a href="#">{{$pr->name}}</a>
                        </div>
                        <div class="col-md-4">
                            <span>{{$pr->price * $pr->qty}} ₫</span>
                        </div>
                    @endforeach
                    </div>
                </div>
                <br>
                <div style="border-bottom: 2px solid #c9c9c9;padding-bottom: 10px;">
                    <div  class="row">
                        <div class="col-md-8">
                            <span>Tạm tính</span>
                            <br>
                            <span>Phí vận chuyển</span>
                        </div>
                        <div class="col-md-4">
                            <span>{{Cart::subtotal()}}₫</span>
                            <br><span>0₫</span>
                        </div>
                    </div>
                </div>
                <br>
                <div style="border-bottom: 1px solid #c9c9c9;padding-bottom: 10px;" class="order">
                <div  class="row">
                        <div class="col-md-8">
                            <span>Thành tiền</span>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <span>{{Cart::subtotal(0)}} ₫</span><br>
                            <span><i>(Đã gồm VAT)</i></span>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="row">
                <button style="width: 250px ; height: 50px; margin-left: 70px; background: #a10000; color: white; font-weight: bold" type="submit" id="btn-placeorder" class="btn btn-block btn-default ">ĐẶT MUA</button>
                <br><p style=" margin-left: 40px"  class="note"><i>(Xin vui lòng kiểm tra lại đơn hàng trước khi Đặt Mua)</i></p>
            </div>
   
        </div>
    </div>
    <br>
@stop