@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Giới thiệu</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Giới thiệu</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="our-history">
				<h2 class="text-center wow fadeInDown">Lịch sử</h2>
				<div class="space35">&nbsp;</div>

				<div class="history-slider">
					<div class="history-navigation">
						<a data-slide-index="0" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2003</span></a>
						<a data-slide-index="1" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2004</span></a>
						<a data-slide-index="2" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2005</span></a>
						<a data-slide-index="3" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2007</span></a>
						<a data-slide-index="4" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2009</span></a>
						<a data-slide-index="5" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2011</span></a>
						<a data-slide-index="6" href="blog_with_2sidebars_type_e.php" class="circle"><span class="auto-center">2014</span></a>
					</div>

					<div class="history-slides">
						@foreach($slide_gt as $gt)
						<div> 
							<div class="row">
							<div class="col-sm-5">
								<img src="source/image/slide/{{$gt->image}}" alt="">
							</div>
							<div class="col-sm-7">
								<h4 style ="    color: #780000 !important;"class="other-title">{{$gt->title_about}}</h4>
								<p>
								
								</p>
								<div class="space20">&nbsp;</div>
								<p >{{$gt->content}}</p>
							</div>
							</div> 
						</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="space50">&nbsp;</div>
			<hr />
			<div class="space50">&nbsp;</div>
			<h2 style =" color: #780000 " class="text-center wow fadeInDown">Niềm đam mê của chúng tôi về dịch vụ</h2>
			<div class="space20">&nbsp;</div>
			<p class="text-center wow fadeInLeft">Hoạt động với phương châm “Chất lượng khởi nguồn từ đam mê”, cùng nhau, chúng tôi đã và đang viết tiếp câu chuyện của một thương hiệu Việt giàu truyền thống, kết nối tinh túy của nhiều thập niên kinh nghiệm và không ngừng chắt lọc, làm mới mình trong bước chuyển thời gian để trở thành thương hiệu luôn gắn bó với nhiều thế hệ khách hàng.</p>
			<div class="space35">&nbsp;</div>

			<div class="row">
				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fa fa-user"></i></p>
						<p class="beta-counter-value timer numbers" data-to="19855" data-speed="2000">19855</p>
						<p class="beta-counter-title">Sự hài lòng khách hàng</p>
					</div>
				</div>

				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="far fa-image"></i></p>
						<p class="beta-counter-value timer numbers" data-to="3568" data-speed="2000">3568</p>
						<p class="beta-counter-title">Hình ảnh tuyệt vời</p>
					</div>
				</div>

				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fas fa-clock"></i></p>
						<p class="beta-counter-value timer numbers" data-to="258934" data-speed="2000">258934</p>
						<p class="beta-counter-title">Giờ hỗ trợ</p>
					</div>
				</div>

				<div class="col-sm-2 col-sm-push-2">
					<div class="beta-counter">
						<p class="beta-counter-icon"><i class="fas fa-birthday-cake"></i></p>
						<p class="beta-counter-value timer numbers" data-to="150" data-speed="2000">150</p>
						<p class="beta-counter-title">Sản phẩm mới</p>
					</div>
				</div>
			</div> <!-- .beta-counter block end -->

			<div class="space50">&nbsp;</div>
			<hr />
			<div class="space50">&nbsp;</div>

			<h2 class="text-center wow fadeInDownwow fadeInDown">ĐỘI NGŨ NHÂN VIÊN TRÀN ĐẦY NHIỆT HUYẾT</h2>
			<div class="space20">&nbsp;</div>
			<h5 class="text-center other-title wow fadeInLeft">Gia nhập đội ngũ Cooker</h5>

			<p class="text-center wow fadeInRight">Trong suốt quá trình hoạt động và phát triển, đội ngũ quản lý và nhân viên của Phúc Long Coffee & Tea, qua bao thế hệ, đã cùng nhau xây dựng, nuôi dưỡng niềm đam mê dành cho trà và cà phê với mong muốn được thử thách bản thân trong ngành dịch vụ năng động và sáng tạo.</p>
			<div class="space20">&nbsp;</div>
			<div class="row">
				<div class="col-sm-6 wow fadeInLeft">
					<div class="beta-person media">
					
					<img style="height: 250px" class="pull-left" src="source/image/slide/PP.jpg" alt="">
					
						<div class="media-body beta-person-body">
							<h5>Đầu bếp chuyên nghiệp</h5>
							<p class="font-large"><br></p>
							<p>Cooker với những đầu bếp chuyên nghiệp từ các nước Đông Tây Âu, tạo ra những chiếc bánh bằng cả nhiệt huyết.</p>
							<a href="single_type_gallery.php">Xem thêm <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 wow fadeInRight">
					<div class="beta-person media ">
					
						<img style="height: 250px" class="pull-left" src="source/image/slide/cogai.jpg" alt="">
					
						<div class="media-body beta-person-body">
							<h5>Nhân viên vui vẻ</h5>
							<p class="font-large"><br></p>
							<p>Nụ cười luôn ở trên môi của nhân viên bên Cooker. Khách hàng là thượng đế, luôn mong muốn khách hàng hài lòng khi đến Cooker và ra về cùng với những chiếc bánh ngọt ngào trên tay.</p>
							<a href="single_type_gallery.php">Xem thêm  <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="space60">&nbsp;</div>
			<h5 class="text-center other-title wow fadeInDown">Những chuyên gia giỏi nhất</h5>
			<p class="text-center wow fadeInUp">Cooker hội tụ những chuyên gia giỏi đã có nhiều nay kinh nghiệm và được học tập tại Pháp, Mỹ, Anh</p>
			<div class="space20">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="beta-person beta-person-full">
				<div class="bets-img-hover">
						<img style="height: 250px" src="source/image/slide/lambanh1.jpg" alt="">
				</div>
						<div class="beta-person-body">
							<h5>Huyền Trâm</h5><br>
							<p class="font-large">Đầu bếp bánh creper</p>
							
							<a href="single_type_gallery.php">Xem thêm<i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="beta-person beta-person-full">
					<div class="bets-img-hover">
						<img style="height: 250px" src="source/image/slide/lambanh2.jpg" alt="">
					</div>
						<div class="beta-person-body">
							<h5>Bob Robertson</h5><br>
							<p class="font-large">Đầu bếp bánh mì</p>
							
							<a href="single_type_gallery.php">Xem thêm <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="beta-person beta-person-full">
					<div class="bets-img-hover">
						<img style="height: 250px" src="source/image/slide/lambanh3.jpg" alt="">
					</div>
						<div class="beta-person-body">
							<h5>Hòa My</h5><br>
							<p class="font-large">Đầu bếp bánh kem</p>
							
							<a href="single_type_gallery.php">Xem thêm<i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="beta-person beta-person-full">
					<div class="bets-img-hover">	
						<img style="height: 250px" src="source/image/slide/lambanh4.jpg" alt="">
					</div>
						<div class="beta-person-body">
							<h5>Trương Trịnh</h5><br>
							<p class="font-large">Đầu bếp bánh Âu</p>
							
							<a href="single_type_gallery.php">Xem thêm<i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@stop
@section('js_content')
<script>
            /* <![CDATA[ */
            jQuery(document).ready(function($) {
                'use strict';

                             
try {		
		if ($(".animated")[0]) {
            $('.animated').css('opacity', '0');
			}
			$('.triggerAnimation').waypoint(function() {
            var animation = $(this).attr('data-animate');
            $(this).css('opacity', '');
            $(this).addClass("animated " + animation);

			},
                {
                    offset: '80%',
                    triggerOnce: true
                }
			);
	} catch(err) {

		}
		
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       150,          // distance to the element when triggering the animation (default is 0)
    mobile:       false        // trigger animations on mobile devices (true is default)
  }
);
wow.init();	 
// NUMBERS COUNTER START
                $('.numbers').data('countToOptions', {
                    formatter: function(value, options) {
                        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                    }
                });

                // start timer
                $('.timer').each(count);

                function count(options) {
                    var $this = $(this);
                    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                    $this.countTo(options);
                } // NUMBERS COUNTER END 

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

            /* ]]> */
        </script>
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
@stop