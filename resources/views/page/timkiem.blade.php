@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>tìm kiếm</span>
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
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm tìm kiếm</h4>
							<div class="beta-products-Chi tiếts">
								<p class="pull-left">Tìm thấy {{count($data)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($data as $dt)
								<div class="col-sm-3">
									<div class="single-item">
									@if($dt->unit_price - $dt->promotion_price > 0)
									<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
									@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$dt->id)}}"><img style="width: 250px; height: 250px" src="source/image/product/{{$dt->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$dt->name}}</p>
											<p class="single-item-price">
												@if($dt->unit_price - $dt->promotion_price == 0)
												<span class="flash-sale">{{number_format($dt->unit_price)}}₫</span>
												@elseif($dt->unit_price - $dt->promotion_price > 0)
												<span class="flash-del">{{number_format($dt->unit_price)}}₫</span>
												<span class="flash-sale">{{number_format($dt->promotion_price)}}₫</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('cart',$dt->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a style="" class="beta-btn primary" href="product.php">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">
								{{$data->links()}}
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
					<!--Top product-->
						
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->


@stop