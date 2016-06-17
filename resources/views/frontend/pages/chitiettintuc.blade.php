@extends('frontend.layout')
@section('content')

				<div class="col-md-4">

						<div class="imagechitiet">    	  
							<div class="">
								<img src="{{ url('public/frontend/images', $chitiettintuc->new_images) }}" height="400px" width="300px" alt="" title="Optional title display" style="display: block;">
							</div>
						</div><!--zoom-section end-->
	    
				</div>
				<div class="col-md-8">
		                    <div class="ten_product1"></div>
					<div class="ten_product1">{{ $chitiettintuc->new_name }}</div>
					
					 <div class="col-md-12">
					 <p>
						 <span class="productName">
                                {{ $chitiettintuc->new_detail }}
					 </p>			
					 </div>
@endsection