@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
								<p class="single-item-price">
								@if($sanpham->unit_price - $sanpham->promotion_price > 0)
								<span class="flash-del">{{$sanpham->unit_price}}₫</span>
								<span class="flash-sale">{{$sanpham->promotion_price}}₫</span>
								@elseif($sanpham->unit_price = $sanpham->promotion_price)
								<span class="">{{$sanpham->promotion_price}}₫</span>
								@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart"  href="{{route('cart',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-reviews">Bình luận (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sanpham->description}}</p>
							
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>

						<div class="row">
							@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sptt->id)}}"><img style="width: 250px; height: 250px"  src="source/image/product/{{$sptt->image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sptt->name}}</p>
										<p class="single-item-price">
										@if($sptt->unit_price - $sptt->promotion_price > 0)
										<span class="flash-del">{{$sptt->unit_price}}₫</span>
										<span class="flash-sale">{{$sptt->promotion_price}}₫</span>
										@elseif($sptt->unit_price = $sptt->promotion_price)
										<span class="">{{$sptt->promotion_price}}₫</span>
										@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left"  href="{{route('cart',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a style ="" class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">
					{{$sp_tuongtu->links()}}
				</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm bán chạy</h3>
						<div class="widget-body">
							@foreach($sp_banchay as $spbc)
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitietsanpham',$spbc->id_product)}}"><img style="width:90px;height: 80px;" src="source/image/product/{{$spbc->image}}" alt=""></a>
									<div class="media-body">
										{{$spbc->name}}
										<p style="font-size: 13px" class="single-item-price">
										@if($spbc->unit_price - $spbc->promotion_price > 0)
										<span class="flash-del">{{$spbc->unit_price}}₫</span>
										<span class="flash-sale">{{$spbc->promotion_price}}₫</span>
										@elseif($spbc->unit_price = $spbc->promotion_price)
										<span class="">{{$sptt->promotion_price}}₫</span>
										@endif
										</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							@foreach($sp_moi as $spmoi)
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitietsanpham',$spmoi->id)}}"><img style="width:90px;height: 80px;" src="source/image/product/{{$spmoi->image}}" alt=""></a>
									<div class="media-body">
										{{$spmoi->name}}
										@if($spmoi->unit_price - $spmoi->promotion_price > 0)
										<span style="font-size: 13px" class="flash-del">{{$spmoi->unit_price}}₫</span>
										<span style="font-size: 13px" class="flash-sale">{{$spmoi->promotion_price}}₫</span>
										@elseif($spmoi->unit_price = $spmoi->promotion_price)
										<span style="font-size: 13px" class="">{{$sptt->promotion_price}}₫</span>
										@endif
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
    </div> <!-- .container -->
    @endsection
    <script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
				$(this).parents('li').addClass('parent-active');
            }
        });
    });


</script>
<script>
	 jQuery(document).ready(function($) {
                'use strict';

// color box

//color
      jQuery('#style-selector').animate({
      left: '-213px'
    });

    jQuery('#style-selector a.close').click(function(e){
      e.preventDefault();
      var div = jQuery('#style-selector');
      if (div.css('left') === '-213px') {
        jQuery('#style-selector').animate({
          left: '0'
        });
        jQuery(this).removeClass('icon-angle-left');
        jQuery(this).addClass('icon-angle-right');
      } else {
        jQuery('#style-selector').animate({
          left: '-213px'
        });
        jQuery(this).removeClass('icon-angle-right');
        jQuery(this).addClass('icon-angle-left');
      }
    });
				});
	</script>