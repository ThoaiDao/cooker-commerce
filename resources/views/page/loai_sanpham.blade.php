@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title" style="margin-top: 10px;">Sản phẩm  {{$ten_sp->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Loại sản phẩm</span>
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
							@foreach($loai as $l)
							<li><a href="{{route('loaisanpham',$l->id)}}">{{$l->name_type}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products">
								<p class="pull-left">Tìm thấy {{count($sp_theoloai_moi)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_theoloai_moi as $spLoai)
								<div class="col-sm-4">
									<div class="single-item">
									@if($spLoai->unit_price - $spLoai->promotion_price > 0)
									<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
									@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$spLoai->id)}}"><img style="width: 250px; height: 250px" src="source/image/product/{{$spLoai->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spLoai->name}}</p>
											<p class="single-item-price">
												@if($spLoai->unit_price - $spLoai->promotion_price > 0)
												<span class="flash-del">{{$spLoai->unit_price}}₫</span>
												<span class="flash-sale">{{$spLoai->promotion_price}}₫</span>
												@elseif($spLoai->unit_price = $spLoai->promotion_price)
												<span class="">{{$spLoai->promotion_price}}₫</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('cart',$spLoai->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a style ="" class="beta-btn primary" href="product.php">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-Chi tiếts">
								<p class="pull-left">Tìm thấy {{count($sp_khac)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $spkhac)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$spLoai->id)}}"><img style="width: 250px; height: 250px" src="source/image/product/{{$spLoai->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spkhac->name}}</p>
											<p class="single-item-price">
											@if($spkhac->unit_price - $spkhac->promotion_price == 0)
												<span class="flash-sale">{{number_format($spkhac->unit_price)}}₫</span>
												@elseif($spkhac->unit_price - $spkhac->promotion_price > 0)
												<span class="flash-del">{{number_format($spkhac->unit_price)}}₫</span>
												<span class="flash-sale">{{number_format($spkhac->promotion_price)}}₫</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('cart',$spkhac->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a style ="" class="beta-btn primary" href="product.php">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">
								{{$sp_khac->links()}}
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection
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