<!-- Left side column. contains the sidebar -->
<aside style="  position: fixed;" class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
      </div>
      @if (Auth::user())
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      @endif
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{route('admin-trang')}}">
        <span>Danh mục</span></a>
      </li>
     <li class="thefirst">
        <a href="{{route('addProduct')}}"><span>Sản phẩm</span> <i class=""></i></a>
        <!-- <ul class="sub-menu">
          <li><a href="#">Thêm sản phẩm</a></li>
          <li><a href="#">Xóa sửa sản phẩm</a></li>
        </ul> -->
      </li>
      <li><a href="{{route('listOrder')}}">
        <span>Đơn hàng</span></a>
      </li>
      <li><a href="{{route('member_list')}}">
        <span>Thành viên</span></a>
      </li>
      <li><a href="{{route('customer_list')}}">
        <span>Khách hàng</span></a>
      </li>
      
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>