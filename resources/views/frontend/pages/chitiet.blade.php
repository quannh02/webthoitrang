@extends('frontend.layout')
@section('content')
	<div id="chitiet">
<!--		<div class="chitiet_ten"><a href="#">Trang chủ </a> ><a href="#"> Áo sơ mi trắng dài tay xếp ly </a></div>-->
				<div class="demo">

						<div class="imagechitiet">    	  
							<div class="">
								<img src="{{ url('public/frontend/images', $product->pro_images) }}" height="400px" width="300px" alt="" title="Optional title display" style="display: block;">
							</div>
						</div><!--zoom-section end-->
	    
				</div>
				<div class="thongtin">
		                    <div class="ten_product1"></div>
					<div class="ten_product1">{{ $product->pro_name }}</div>
					<div class="giatien"><i>{{ number_format($product->pro_price, 0)}}vnđ</i></div>
					
					 <div class="comment more">
					 <p>
						 <span>Trẻ trung và thanh lịch của thương hiệu Blue Exchange. Đem đến cho bạn sự năng động và trẻ trung</span><br><br>
						 <span>- Chất liệu kate</span><br>
						 <span>- Mẫu y như hình</span><br>
						 <span>- Thiết kế form chuẩn, thích hợp với nhiều vóc dáng.</span><br>
					 </p>			
					 </div>
					
					<div class="thoigian">SẼ CÓ TẠI NHÀ BẠN<br>
						<i style="color:gray">trong 1 - 2 ngày giao hàng</i></div>
					<div class="mausac"></div>
				</div>
				
				<div class="muahang">
					@if ($errors->has('sizechose'))
    					<span class="error">{{ $errors->first('sizechose') }}</span>
					@endif
					<div class="kichco">Chọn kích cỡ<br>
					</div>
							
                              <form action="{{ url('themvaogio', $product->pro_id) }}" method="post">
                              	{{ csrf_field() }}
                          		<select class="sizechose" name="sizechose">
                                      @if($product->pro_sizeS != 0)                                        
                                      	<option value="s">S</option> 
                                      @endif 
                                      @if($product->pro_sizeM != 0)
                                      	<option value="m">M</option>
                                      @endif
                                      @if($product->pro_sizeL != 0)                                        
                                      	<option value="l">L</option> 
                                      @endif                                   
                                  </select>
                                
                                <input type="submit" value="Thêm vào giỏ" data-id="{{ $product->pro_id }}" class="btn btn-fefault btn-success">
                            </form>
				</div>
	</div>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1115738578446863',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-comments" data-href="{{url('chitiet')}}" data-colorscheme="light" data-numposts="100" data-width="500"></div>
	<div class="w3-row-padding">
  	<div class="w3-col s12 w3-green w3-center"><p>Sản phẩm cùng loại</p></div>
  	<div class="w3-col s12 w3-white w3-center">
  		<div class="w3-row-padding">
  		@foreach($productcungloai as $product)
  			<div class="w3-col s3">
  				
  				<div class="productItem" dealid="11547">
                        <a href="{{ url('chitiet', $product->pro_id )}}" ecimpression=""><span class="product-img">
                            
                            <img  src="{{ url('public/frontend/images', $product->pro_images) }}" style="display: block;"></span>
                            <span class="productName">
                                 {{ $product->pro_name }} - {{ $product->pro_code }}   
                            </span><span> </span> <span class="price">
                            {{ $product->pro_price }}
                                   </span>
                                    <span>

                                </span>
                            
                            <a href="{{url('chitiet', $product->pro_id)}}" class="btn btn-default add-to-cart">Chi tiết</a>
                        </a>
                </div>
                
            </div>
        @endforeach
       	<?php echo $productcungloai->render(); ?>
  		</div>
  	</div>
	</div>
@endsection