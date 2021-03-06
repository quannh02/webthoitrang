	<!DOCTYPE html>
<html>
<head id="Head1">   
    <title>
        Shop Quần Áo Nam Online</title>
    <meta name="title" content="Shop Quần Áo Nam">
    <meta name="keywords" content="Quan Ao">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend/css/chitiet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/w3.css')}}">
    <link rel="stylesheet" href="{{ url('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/font-awesome.css') }}">
    <script type="text/javascript" src="{{ url('public/frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/js/bootstrap.min.js')}}"></script>
	<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
</head>
<body>
	    <div id="pheader" class="clearfix">
	        <div class="pcontainer">
	            <div class="logo">
	               <a class="navbar-brand" href="{{url('index')}}">
      		</a>
	            </div>
	            <div class="form-search">
	                <form id="form-nav-search-fix" method="get" action="{{ url('tim-kiem')}}">
	                <input type="text" class="key-search" id="keyword" name="q" placeholder="Nhập tên sản phẩm...">
	                <button type="submit" class="btn-success">
	                  	Tìm kiếm
	                </button>
	                </form>
	            </div>
	            <div class="header-phone">
	                <p class="phone">
	                <strong>Hãy Gọi:</strong>
	                    0971315978
	                </p>
	            </div>
	            <div class="account">
	     @if(Auth::check())
	     <div class="accountInner">
	     	<div class="dropdown">
	     		<a href="{{ url('trangquanly')}}">{{ Auth::user()->username }}</a>
	     	</div>
	     </div>
	     @else       
	    <div class="accountInner">
	      
	        <div class="dropdown">
	           	Đăng nhập
	            <ul class="dropdown-menu">
	                <li><a href="{{ url('dangnhap') }}">Đăng nhập</a></li>
	                <li><a href="{{ url('dangky') }}">Đăng kí</a></li>
	            </ul>
	        </div>
	      </div>
	     @endif  
	     <div class="accountInner">

	        <p class="shoppingCart">
	            <a href="{!! url('gio-hang') !!}">
	            	<span class="icon-shopping"></span>
	            	Giỏ hàng
	            	<strong>
	            		<p class="soluongsanpham">
	            			@if(is_array(Session::get('giohang')))
	            				{{ count(Session::get('giohang')) }}
	            			@endif
	            		</p>
	            	</strong>
	            </a>
	        </p>
	    </div>

	            </div>
	        </div>
	    </div>
	    <!-- end header -->
	    <div class="pcontainer">
	        <!-- gnavi -->
	        <div id="menunav" class="gnavi">
	            
	<div id="gnaviInner" class="clearfix">
	    <div class="wap">
	        <ul id="gnaviInfo" class="clearfix">
	            
	            <li class="pa"><a href="{{ url('index')}}">Trang chủ</a></li>
	            
	            <li class="pa"><a href="" class="palink">
	                Quần Áo Nam</a>
	                <div class="contentSubmenu">
	                    <ul>
	                        @foreach($cates as $cate)
	                        <li><a href="{{ url('danhmuc', $cate->c_id)}}">
	                            {{ $cate->c_name }}</a>
	                        </li>
	                     
	                        @endforeach
	                    </ul>
	                </div>
	            </li>
	    		<li class="pa"><a href="{{url('tintuc')}}" class="palink">
	                Tin Tức</a>
	            </li>
	        </ul>
	        <div class="clearfix">
	        </div>
	    </div>
	</div>
	        </div>
	        <!-- end gnavi -->
	        
    <div class="pfull clearfix">
        <div id="category" class="productList productListMedium clearfix">
            
           <div class="slide-products clearfix">
    @yield('danhmuc')
                
   
@yield('content')
			         
            </div>
        </div>
        
    </div>
    
    </div>
    <!-- end container -->
    <div id="footer">
        <div class="pcontainer clearfix">
            <div id="footerTop" class="clearfix">
                <div id="footerLink" class="clearfix">
                    <div class="clearfix">
                        <dl class="col-md-4">
                            <dt>về chúng tôi</dt>
                            <dd>
                                <a href="#">Liên hệ</a></dd>
                            <dd>
                                <a href="#">Điều khoản sử dụng</a></dd>
                            <dd>
                                <a href="#">Chính sách bảo mật thông tin</a></dd>
                        </dl>
                        <dl class="col-md-4">
                            <dt>trợ giúp</dt>
                            <dd>
                                <a href="#">Hỏi đáp</a></dd>
                            <dd>
                                <a href="#">Hướng dẫn mua hàng</a></dd>
                            <dd>
                                <a href="#">Hướng dẫn thanh toán</a></dd>
                            <dd>
                                <a href="#">Góp ý - Ý kiến khách hàng</a></dd>
                            <dd>
                                <a href="#" title="mua hang gia re, mua hang online">Mua hàng giá rẻ</a></dd>
                        </dl>
                        <dl class="col-md-4">
                            <dt>hợp tác</dt>
                            <dd>
                                <a href="#">Hợp tác kinh doanh</a></dd>
                            <dd>
                                <a href="#">Liên hệ hợp tác</a></dd>
                            <dd>
                                <a href="#">Tuyển dụng</a></dd>
                        </dl>
                    </div>
                
                </div>
                <!-- end footerLink -->
            </div>
            <!-- end footerTop -->
        </div>
    </div>
    <!-- end footer -->
    <div id="footerBottom">
        <div class="pcontainer clearfix">
            <div class="company">
                BaShop Ngõ 10, Tôn Thất Tùng, Q. Đống Đa, TP.Hà Nội
            </div>
        </div>
    </div>

</body></html>
</body></html>