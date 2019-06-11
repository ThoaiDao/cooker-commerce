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
					<a href="{{route('addProduct')}}">Sản phẩm</a> / <span>Sửa sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

      </div><!-- /.box-body -->
      <div class="box-footer">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                   
                            <div class="content">
                            <h2>Sửa sản phẩm</h2>
                            <br>
                            <form action="{{route('updateProduct',$edit_Product->id)}}" method="POST">
                            {{csrf_field()}}
                            @if(Session::has('thanhcong'))
                              <div class="alert alert-success">
                                  {{Session::get('thanhcong')}}</div>
                            @endif
                            <label>Loại sản phẩm</label>
                              <input type="text" name="id_type" class="form-control" value="{{$edit_Product->id_type}}"/>
                              <br>
                                <label>Tên sản phẩm</label>
                              <input type="text" name="name" class="form-control" value="{{$edit_Product->name}}"/>
                              <br>
                              <label>Sản phẩm mới</label>
                              <input type="text" name="new" class="form-control" value="{{$edit_Product->new}}"/>
                              <br>
                              <label>Hình ảnh</label>
                              <input type="text" name="image" class="form-control" value="{{$edit_Product->image}}"/>
                              <br>

                              <label>Giá gốc</label> 
                              <input type="text" name="price" class="form-control" value="{{$edit_Product->unit_price}}"/>
                              <br>
                              <label>Giá khuyến mãi</label>
                              <input type="text" name="promotion" class="form-control" value="{{$edit_Product->promotion_price}}"/>
                              <br>
                              <label>Đơn vị</label>
                              <input type="text" name="Unit" class="form-control" value="{{$edit_Product->unit}}"/>
                              <br>
                              <label>Mô tả sản phẩm</label>
                              <textarea name="description" class="form-control">{{$edit_Product->description}}</textarea>
                              <br>
                                <input type="submit" class="btn btn-success btn-fill" value="Sửa" id="btn"/> 
                            </form>
                            
                            <!-- <p id="msg" class="alert alert-success"></p> -->
                        </div>
                          <input type="hidden" value="{{csrf_token()}}" id="token"/>
                            <br>
                        </div>
                        <div class="row">
                        

                   
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