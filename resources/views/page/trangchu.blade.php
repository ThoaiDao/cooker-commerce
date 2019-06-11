@extends('master_index')
@section('content')
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
        <div class="banner" >
                <ul>
					@foreach($slide as $sl) 
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined"
							 data-bgfit="cover" data-bgposition="center center" 
							 data-bgrepeat="no-repeat" data-lazydone="undefined" 
							 src="source/image/slide/{{$sl->image}}" 
							 data-src="source/image/slide/{{$sl->image}}" 
							 style="background-color: rgba(0, 0, 0, 0); background-repeat: 
							 no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); 
							 background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							<div class="row">
								<div class="col-md-6">
								<h2 style="text-align: center;margin-left: 60px; padding-top: 200px!important;font-family: Dancing Script, cursive; color: #fff; font-style: italic;font-size: 50px; 
                            ">
                        Cùng thưởng thức những hương vị đậm đà  <span style="color:#fead00 !important">Cooker</span>
                    </h2>
							</div>
							 
							
								
								<div class="col-md-6 real-cf">
									
									<div class="title-real-cf">
										Real Cooker
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="hours">
												<i class="flaticon-coffee icon-cf"></i>
												<h4>Bánh kem</h4>
												<p class="hours-text">9:00AM-11:30AM</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="hours">
												<i class="flaticon-coffee icon-cf"></i>
												<h4>Su kem</h4>
												<p class="hours-text">9:00AM-11:30AM</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="hours">
												<i class="flaticon-coffee icon-cf"></i>
												<h4>Bánh ngọt</h4>
												<p class="hours-text">9:00AM-11:30AM</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="hours">
												<i class="flaticon-coffee icon-cf"></i>
												<h4>Pizza</h4>
												<p class="hours-text">9:00AM-11:30AM</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="hours">
												<i class="flaticon-coffee icon-cf"></i>
												<h4>Bánh crepe</h4>
												<p class="hours-text">9:00AM-11:30AM</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="hours">
												<i class="flaticon-coffee icon-cf"></i>
												<h4>Bánh trái cây</h4>
												<p class="hours-text">9:00AM-11:30AM</p>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</li>
				
					@endforeach
				</ul>
          
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<!--container-->
<div class="container">
<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-Chi tiếts">
								<p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
									@if($new->unit_price - $new->promotion_price > 0)
									<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
									@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img style="width: 250px; height: 250px" src="source/image/product/{{$new->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												@if($new->unit_price - $new->promotion_price == 0)
												<span class="flash-sale">{{number_format($new->unit_price)}}₫</span>
												@elseif($new->unit_price - $new->promotion_price > 0)
												<span class="flash-del">{{number_format($new->unit_price)}}₫</span>
												<span class="flash-sale">{{number_format($new->promotion_price)}}₫</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('cart',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a style="" class="beta-btn primary" href="product.php">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">
								{{$new_product->links()}}
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
					<!--Top product-->
						<div class="beta-products-list">
							<h4>Sản phẩm khuyến mãi</h4>
							<div class="beta-products-Chi tiếts">
								<p class="pull-left">Tìm thấy {{count($sanpham_khuyenmai)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sanpham_khuyenmai as $km)
								<div class="col-sm-3" style="margin-bottom:50px;">
									<div class="single-item">
									@if($km->unit_price - $km->promotion_price > 0)
									<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
									@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img style="width: 250px; height: 250px" src="source/image/product/{{$km->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$km->name}}</p>
											<p class="single-item-price">
												@if($km->unit_price - $km->promotion_price ==0)
												<span class="flash-sale">{{number_format($km->unit_price)}}₫</span>
												@elseif($km->unit_price - $km->promotion_price > 0)
												<span class="flash-del">{{number_format($km->unit_price)}}₫</span>
												<span class="flash-sale">{{number_format($km->promotion_price)}}₫</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('cart',$km->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a style =""class="beta-btn primary" href="product.php">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							
							<div class="row">
								{{$sanpham_khuyenmai->links()}}
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@stop
