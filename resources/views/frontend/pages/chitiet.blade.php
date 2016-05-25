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
						 <span>Trẻ trung và thanh lịch với áo sơ mi màu trắng của thương hiệu Inner Circle. Áo in họa tiết chấm bi đen đem đến cho bạn sự nổi bật và cá tính</span><br><br>
						 <span>- Chất liệu cotton pha</span><br>
						 <span>- Cổ lật</span><br>
						 <span>- Tay ngắn</span><br>
						 <span>- Hàng nút cài dọc thân áo trước</span><br>
						 <span>- May túi đắp bên ngực trái</span><br>
						 <span>- Vạt ngang</span><br><span>- Không có lót trong</span>
					 </p>			
					 </div>
					
					<div class="thoigian">SẼ CÓ TẠI NHÀ BẠN<br>
						<i style="color:gray">trong 1 - 2 ngày làm việc</i></div>
					<div class="mausac"></div>
				</div>
		
				<div class="muahang">
					<div class="kichco">Chọn kích cỡ<br>
					</div>
							
                            <form action="{{ url('themvaogio', $product->pro_id) }}" method="post">
                            	{{ csrf_field() }}
                        		<select class="sizechose" name="sizechose">
                                    <option selected value="">size:</option>
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
                            </span> <span class="price"><span>
                                    280.000</span>
                                    
                                </span>
                            
                            <a href="{{url('chitiet', $product->pro_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                        </a>
                </div>
                
            </div>
        @endforeach
       	<?php echo $productcungloai->render(); ?>
  		</div>
  	</div>
	</div>
@endsection