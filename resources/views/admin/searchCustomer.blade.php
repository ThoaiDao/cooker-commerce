@extends('admin.dashboard')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      
      <div class="box-body">
      <div class="container">
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('addProduct')}}">Khách hàng</a> / <span>Danh sách khách hàng</span>
				</div>
			</div>

      </div><!-- /.box-body -->
      <div class="box-footer">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                            <h2>Danh sách khách hàng </h2>
                            <div class="beta-products-Chi tiếts">
                            <p class="pull-left">Hiện tại có {{count($data)}} khách hàng</p>
                            <div class="clearfix"></div>
                          </div>
                          <form role="search"  id="searchform" action="{{route('searchCustomer')}}">
                                    <div class="input-group" style="width: 600px; float:right" >
                                          <input type="search" class="form-control" value="" name="searchData" id="s" placeholder="Nhập từ khóa..." />
                                          <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" id="searchsubmit">Tìm kiếm</button>
                                        </span>
                                    </div> 
                              </form>
                            
                            <br>
                            <br>
                            <br>
                            <div style="position: relative;height: 800px;overflow: auto; display: block;" class="table-wrapper-scroll-y my-custom-scrollbar">
                              <table class="table table-bordered table-striped mb-0">
                                <thead>
                                  <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Giới tính</th>
                                    <th >Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Ghi chú</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $dt)
                                    <tr>
                                      <td style ="width: 20px; border-right: 1px ridge;">{{$i=$i+1}}</td>
                                        <td style ="width: 120px; border-right: 1px ridge;">{{$dt->name}}</td>
                                        <td style ="width: 150px ;   border-right: 1px ridge;">{{$dt->gender}}</td>
                                        <td style ="width: 60px ;   border-right: 1px ridge;">{{$dt->email}}</td>
                                        <td style ="width: 60px;    border-right: 1px ridge;">{{$dt->address}}</td>
                                        <td style ="width: 120px;    border-right: 1px ridge;">{{$dt->phone_number}}</td>
                                        <td style ="width: 80px;    border-right: 1px ridge;">{{$dt->note}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              
                              </table>
                            </div>

                              <div class="footer">

                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>


            </div>
        </div>



      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- /.col -->
  <div class='col-md-6'>
    <!-- Box -->
   
  </div><!-- /.col -->

</div><!-- /.row -->


@stop