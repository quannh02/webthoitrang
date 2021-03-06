<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="title" content="Shop Quần Áo Nam">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Quan Ao">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/w3.css')}}">
    <link rel="stylesheet" href="{{ url('public/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend/css/style.css') }}">
    <script type="text/javascript" src="{{ url('public/frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/js/delete.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/js/bootstrap.min.js') }}"></script>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-lg-8 col-md-8 col-sm-8">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('index')}}">
        <img src="{{ url('public/frontend/images/bashoplogo.png') }}" style="height:70px">
      </a>
      <form class="navbar-form navbar-left col-lg-12 col-md-12 col-sm-12 col-xs-6" action="{{ url('timkiem') }}" method="GET" id="search-form" style="min-width: 65%; margin-left: 15%;">
        <div class="input-group col-lg-12 col-md-12 col-sm-10 col-xs-10">
          <span class="ui-helper-hidden-accessible"></span>
          <input type="text" name="q" class="search form-control" placeholder="Tìm kiếm... (sản phẩm, mã sản phẩm...)">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">Tìm kiếm</button>
          </div>
        </div>
      </form>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
            {{ Auth::user()->username }}
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ url('thongtintaikhoan', Auth::user()->user_id) }}">
                <i class="fa fa-info-circle" style="margin-right:10px"></i> Thông tin tài khoản
              </a>
              <a href="{{ url('dangxuat') }}" style="color: #d2322d" data-method="DELETE">
                <b><i class="fa fa-sign-out" style="margin-right:10px"></i>  Đăng xuất</b>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<ul></ul>

  <div class="container" style="margin-top:40px">
    <div class="row">
    @if(Auth::user()->role == 'admin' or Auth::user()->role == 'nhanvien')
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
      
        <div style="margin-top:100px">
          <ul class="nav bs-docs-sidenav">
            <li class="active">
              <a href="{{ url('quanlysanpham') }}">Quản lý sản phẩm</a>
            </li>
            <li class="">
              <a href="{{ url('quanlydanhmuc')}}">Quản lý danh mục</a>
            </li>
            <li class="">
              <a href="{{ url('quanlytintuc')}}">Quản lý tin tức</a>
            </li>
            <li class="">
              <a href="{{ url('allusers') }}">Quản lý thành viên</a>
            </li>
            <li class="">
              <a href="{{ url('quanlydonhang') }}">Quản lý đơn hàng</a>
            </li>
          </ul>
        </div>

     </div>
      @endif
     
     <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
       
	<br>
	<hr>
   @if(Session::has('message'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('message') !!}
            </div>
            @endif
		@yield('content')
    </div>
  </div>
  <div class="launch-modal-placeholder"></div>

</body>
</html>