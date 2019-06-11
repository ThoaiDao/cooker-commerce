<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li style="font-weight: bold"><a href="{{route('lienhe')}}"><i class="fa fa-home"></i> Số 92 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, TPHCM</a></li>
						<li style="font-weight: bold"><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if (Auth::user())
						<li style="font-weight: bold"><a href="{{route('tt_taikhoan',Auth::user()->id)}}"><i class="fa fa-user"></i>Tài khoản</a></li>
							@if (Auth::user() && Auth::user()->role === 'admin')
							<li style="font-weight: bold"><a href="{{route('admin-trang')}}"><i class="fa fa-user"></i>Admin</a></li>
							@endif
						<li style="font-weight: bold"><a href="{{route('logout')}}">Đăng xuất</a></li>
						@else						
						<li style="font-weight: bold"><a href="{{route('signin')}}">Đăng kí</a></li>
						<li style="font-weight: bold"><a href="{{route('login')}}">Đăng nhập</a></li>
						@endif
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
						<form role="search"  id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="searchData" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
					@if(Session::has('cart'))
						<div  class="cart">
							<div  class=""><a href="{{route('gio-hang')}}"><i style="color:#a10000 " class="fa fa-shopping-cart"></i>Giỏ hàng</a>
							 (
								{{Cart::count()}}
							) 
							
						</div> <!-- .cart -->
						@endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #780000;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a href="#">Loại sản phẩm</a>
						<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham', $loai->id)}}">{{$loai->name_type}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	