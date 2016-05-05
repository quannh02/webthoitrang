<!DOCTYPE html>
<html>
<head id="Head1">   
    <title>
        Shop Quần Áo Nam Online</title>
    <meta name="title" content="Shop Quần Áo Nam">
    <meta name="keywords" content="Quan Ao">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/font-awesome.css') }}">
    <script type="text/javascript" src="{{ url('frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
</head>
<body>
	    <div id="pheader" class="clearfix">
	        <div class="pcontainer">
	            <div class="logo">
	                <a href="/">BaShop</a>
	            </div>
	            <div class="form-search">
	                <form id="form-nav-search-fix" method="get" action="/tim-kiem">
	                <input type="text" class="key-search" id="keyword" name="q" placeholder="Nhập tên sản phẩm...">
	                <button type="submit" class="btn-search">
	                    <span class="icon-search"></span>
	                </button>
	                </form>
	            </div>
	            <div class="header-phone">
	                <p class="phone">
	                    911
	                </p>
	            </div>
	            <div class="account">
	                
	    <div class="accountInner">
	    
	        <div class="dropdown">
	            <span class="icon-user"></span><a href="">Đăng nhập<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	                <li><a href="http://localhost:8000/webthoitrang/public/dangnhap">Đăng nhập</a></li>
	                <li><a href="http://localhost:8000/webthoitrang/public/dangky">Đăng kí</a></li>
	            </ul>
	        </div>
	        
	        <p class="shoppingCart">
	            <a href="/gio-hang"><span class="icon-shopping"></span>Giỏ hàng<strong>(0)</strong></a></p>
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
	            <li class="gnavi_logo pa hide"><a href="/">
	                <img src="images/logo.png" alt=""></a></li>
	            <li class="gnavi_home pa"><a href="/">Trang chủ</a></li>
	            
	            <li class="pa"><a href="" class="palink">
	                Quần Áo Nam</a>
	                <div class="contentSubmenu">
	                    <ul>
	                        
	                        <li><a href="">
	                            Áo sơ mi nam</a></li>
	                        
	                        <li><a href="/hot-deal/105/ao-thun-nam">
	                            Áo thun nam</a></li>
	                        
	                        <li><a href="/hot-deal/95/ao-doi-ao-cap">
	                            Áo đôi - Áo cặp</a></li>
	                        
	                        <li><a href="/hot-deal/102/ao-khoac-nam">
	                            Áo khoác nam</a></li>
	                        
	                        <li><a href="/hot-deal/173/quan-dai-nam">
	                            Quần dài nam</a></li>
	                        
	                        <li><a href="/hot-deal/106/quan-short-nam">
	                            Quần short nam</a></li>
	                        
	                        <li><a href="/hot-deal/167/quan-the-thao-nam">
	                            Quần thể thao nam</a></li>
	                        
	                        <li><a href="/hot-deal/175/quan-jean-nam">
	                            Quần jean nam</a></li>
	                        
	                        <li><a href="/hot-deal/107/quan-lot-nam">
	                            Quần lót nam</a></li>
	                        
	                    </ul>
	                </div>
	            </li>
	           
	           
	            
	            <li class="pa"><a href="/hot-deal/101/sale-off" class="palink">
	                Sale off</a>
	                <div class="contentSubmenu">
	                    <ul class="">
	                        <li><a href="/hot-deal/101/sale-off?g=1"><b>Dành cho Nam</b></a></li>
	                        
	                        <li><a href="/hot-deal/135/thoi-trang-nam-sale">
	                            Thời trang nam SALE</a></li>
	                        
	                        <li><a href="/hot-deal/136/giay-dep-nam-sale">
	                            Giày dép nam SALE</a></li>
	                        
	                        <li><a href="/hot-deal/137/dong-ho-nam-sale">
	                            Đồng hồ nam SALE</a></li>
	                        
	                        <li><a href="/hot-deal/138/phu-kien-sale">
	                            Phụ kiện SALE</a></li>
	                        
	                        <li><a href="/hot-deal/139/phu-kien-hitech-sale">
	                            Phụ kiện Hitech SALE</a></li>
	                        
	                        <li><a href="/hot-deal/140/sale-off-khac">
	                            Sale off khác</a></li>
	                        
	                    </ul>
	                </div>
	            </li>
	            
	            <li class="pa"><a href="/dang-hot" class="palink">Top sale</a></li>
	        </ul>
	        <div class="clearfix">
	        </div>
	    </div>
	</div>
	        </div>
	        <!-- end gnavi -->
	        
	    
	<div class="bread-crumb-trail clearfix">
	    <ol class="breadcrumb clearfix">
	        <li><a href="/">Trang chủ</a></li>
	        
	        <li><a href="/danh-cho-nam">
	            Nam</a></li>
	        
	        <li class="active">
	            Quần Áo</li>
	        
	    </ol>
	</div>
@yield('content')

</body></html>