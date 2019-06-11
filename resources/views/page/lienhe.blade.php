@extends('master_index')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904" ></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Form Liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p>Từ  khát khao mang đến những thức uống tươi ngon, đậm vị được pha chế trực tiếp, phục vụ tận tay khách hàng với phong cách hiện đại và mức giá hợp lý, cửa hàng Phúc Long Coffee & Tea đầu tiên đã ra mắt tại TTTM Crescent Mall Quận 7. Đây là sự kiện đánh dấu bước chuyển mình trong lịch sử phát triển của Phúc Long, từng bước trở thành thương hiệu Việt hiếm hoi chính thức tham gia vào lĩnh vực Food & Beverage với cửa hàng hoạt động theo mô hình tự phục vụ trong không gian hiện đại, đẳng cấp và nổi bật.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên bạn">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email của bạn">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Chủ đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Nội dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên hệ</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
					42/24 - 42/26 Đường 643 Tạ Quang Bửu,<br>
					phường 4, quận 8,  <br>
					Hồ Chí Minh
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Điện thoại</h6>
					<p>
					028 6263 0377 - 6263 0378  <br>
						<a href="mailto:biz@betadesign.com">Sales@phuclong.com.vn</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Trụ sở chính</h6>
					<p>
					Công ty TNHH TM SX Phúc Long - ĐKKD: 0302 108 546
do sở KHĐT TPHCM cấp lần đầu ngày 12/9/2000 <br>
						<a href="hr@betadesign.com">hr@betadesign.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
    </div> <!-- .container -->
    @stop
	@section('js_content')
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
	@stop