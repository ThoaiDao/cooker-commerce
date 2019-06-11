<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script">

</head>
<body>

	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li style="font-weight: bold"><a href=""><i class="fa fa-home"></i> Số 92 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, TPHCM</a></li>
						<li style="font-weight: bold"><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
                
					<ul class="l-inline ov top-details menu-beta l-inline">
						<li style="font-weight: bold"><a href="{{route('trang-chu')}}"><i class="fa fa-user"></i>Trang chủ</a></li>
						<li style="font-weight: bold"><a href="{{route('signin')}}">Tài khoản</a>
                        <ul class="sub-menu">
								<li><a href="">Tài khoản của tôi</a></li>
                                <li><a href="">Đơn hàng của tôi</a></li>
                                <li><a href="">Đổi mật khẩu</a></li>
							</ul>
                        </li>
						<li style="font-weight: bold"><a href="{{route('login_')}}">Đăng xuất</a></li>
					</ul>
                   
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('trang-chu')}}" id="logo"><h2 style="color:#780000;   font-family: Dancing Script, cursive; font-size: 70px; font-weight: bold;">Cooker</h2></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
					@if(Session::has('cart'))
						<div class="cart">
							<div  class="beta-select"><i class="fa fa-shopping-cart"></i> 
							Giỏ hàng (
								@if(Session::has('cart'))
									{{Session('cart')->totalQty}}
								@else
									Trống
								@endif
							) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								
								
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title"></span>
											<!--<span class="cart-item-options">Size: XS; Colar: Navy</span>-->
											<span class="cart-item-amount"><span></span></span>
										</div>
									</div>
								</div>
							
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value"></span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.php" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
						@endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		
	</div> <!-- #header -->
	
    <div class="rev-slider">
    MYACCOUNT <!--nội dung thay đổi theo từng trang-->
	</div> <!-- .container -->
	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Instagram Feed</h4>
						
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Information</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.php"><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><a href="blog_fullwidth_2col.php"><i class="fa fa-chevron-right"></i> Web development</a></li>
								<li><a href="blog_fullwidth_2col.php"><i class="fa fa-chevron-right"></i> Marketing</a></li>
								<li><a href="blog_fullwidth_2col.php"><i class="fa fa-chevron-right"></i> Tips</a></li>
								<li><a href="blog_fullwidth_2col.php"><i class="fa fa-chevron-right"></i> Resources</a></li>
								<li><a href="blog_fullwidth_2col.php"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
								<p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Newsletter Subscribe</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="source/assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>


		<!--customjs-->
		@yield('js_content')
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
</body>
</html>