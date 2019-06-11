@extends('master_index')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.php">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
        @if(count($errors) > 0)
						<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{$err}}
						@endforeach
						</div>
					@endif

					@if(Session::has('thanhcong'))
						{{Session::get('thanhcong')}}
					@endif
			<form action="" method="POST" class="beta-form-checkout">
			{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" id="email" required>
						</div>
						<div class="form-block">
							<label for="password">Password*</label>
							<input style="height: 35px" type="password" name="password" required>
						</div>
						<div class="row">
             <div class="col-xs-8">
                 <div class="checkbox icheck">
                     <label>
                         <input type="checkbox"> Remember Me
                     </label>
                 </div>
             </div>
             <div class="col-xs-4">
                 <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
             </div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
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