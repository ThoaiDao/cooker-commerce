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
					<a href="{{route('addProduct')}}">Sản phẩm</a> / <span>Tìm sản phẩm</span>
				</div>
			</div>

      </div><!-- /.box-body -->
      <div class="box-footer">
<div class="content">
            <div class="container-fluid">
                <div class="row">

                            <h2>Danh sách sản phẩm </h2>
                            <div class="beta-products-Chi tiếts">
                            <p class="pull-left">Hiện tại có {{count($data)}} sản phẩm</p>
                            <div class="clearfix"></div>
                                <form role="search"  id="searchform" action="{{route('searchProduct')}}">
                                    <div class="input-group" style="width: 600px; float:right" >
                                          <input type="search" class="form-control" value="" name="searchData" id="s" placeholder="Nhập từ khóa..." />
                                          <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" id="searchsubmit">Tìm kiếm</button>
                                        </span>
                                    </div> 
                              </form>
                          </div>
                             
                            
                            <br>
                            <br>
                            <br>
                           
                            <div style="position: relative;height: 800px;overflow: auto; display: block;" class="table-wrapper-scroll-y my-custom-scrollbar">
                              <table class="table table-bordered table-striped mb-0">
                                <thead>
                                  <tr>
                                
                                    <th >Loại sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th >Hình ảnh</th>
                                    <th>Giá gốc</th>
                                    <th>Giá khuyến mãi</th>
                                    <th>Đơn vị</th>
                                    <th>Mô tả</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $dt)
                                      
                                    <tr>
                                      
                                        <td style ="width: 120px; border-right: 1px ridge;">{{$dt->name_type}}</td>
                                        <td style ="width: 60px ;   border-right: 1px ridge;">{{$dt->name}}</td>
                                        <td style ="width: 60px ;   border-right: 1px ridge;">{{$dt->image}}</td>
                                        <td style ="width: 60px;    border-right: 1px ridge;">{{$dt->unit_price}}₫</td>
                                        <td style ="width: 100px;    border-right: 1px ridge;">{{$dt->promotion_price}}₫</td>
                                        <td style ="width: 80px;    border-right: 1px ridge;">{{$dt->unit}}</td>
                                        <td style ="width: 100px;    border-right: 1px ridge;">{{$dt->description}}</td>
                                        <td style ="width: 60px;    border-right: 1px ridge; "><a href="{{route('editProduct',$dt->id)}}"><i style="color: #3c8dbc"class="fa fa-pencil-square-o fa-2x " aria-hidden="true"></i></a></td>
                                        <td style ="width: 60px;    border-right: 1px ridge;"><a href="{{route('deleteProduct',$dt->id)}}"><i style="color: red;" class="fa fa-remove fa-2x "></i></a> </td>
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

<script>
$(document).ready(function(){

  $("#msg").hide();


  $("#btn-add-product").click(function(e){
    e.preventDefault();
    $("#msg").show();

    var cat_id = $("#id_type").val()
    var newText = $("#new").val();
    var name = $("#name").val();
    var image = $("#image").val();
    var price = $("#unit_price").val();
    var promotion = $("#promotion_price").val();
    var Unit = $("#Unit").val();
    var description = $("#description").val();
    var token = $("#token").val();
    $.ajax({
      type: "post",
      data: "&name=" + name +"&new=" + newText +"&cat_id=" + cat_id + "&image=" + image + "&unit_price=" + price + "&promotion_price=" + promotion +"&Unit=" + Unit +"&description=" + description +"&_token=" + token,
      url: "<?php echo url('saveProduct') ?>",
      success:function(data){
        $("#msg").html("Product has been inserted");
        $("#msg").fadeOut(2000);
      }
    });
  });

//   var auto_refresh = setInterval(
//     function(){
//       $('#products').load('<?php echo url('admin/products');?>').fadeIn("slow");
//     },100);
// $('#cat_id').select2();
});
</script>
@stop