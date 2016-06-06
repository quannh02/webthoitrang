@extends('frontend.layout')
@section('content')
<!-- <div id = 'chitiettintuc'>
	 <div class="productItem" dealid="11547">
                        <a href="{{ url('chitiettintuc', $chitiettintuc->new_id )}}" ecimpression=""><span class="product-img">
                            
                            <img  src="{{ url('public/frontend/images', $chitiettintuc->new_images) }}" style="display: block;"></span>
                            <span class="productName">
                                {{ $chitiettintuc->new_name }}
                            </span> <span class="price"><span>
         					<span class="productName">
                                {{ $chitiettintuc->new_detail }}
                            </span> <span class="price"><span>
                    </div>
</div> -->
<div class="demo">

						<div class="imagechitiet">    	  
							<div class="">
								<img src="{{ url('public/frontend/images', $chitiettintuc->new_images) }}" height="400px" width="300px" alt="" title="Optional title display" style="display: block;">
							</div>
						</div><!--zoom-section end-->
	    
				</div>
				<div class="thongtin">
		                    <div class="ten_product1"></div>
					<div class="ten_product1">{{ $chitiettintuc->new_name }}</div>
					
					 <div class="comment more">
					 <p>
						 <span class="productName">
                                {{ $chitiettintuc->new_detail }}
                            </span> <span class="price"><span>
					 </p>			
					 </div>
@endsection