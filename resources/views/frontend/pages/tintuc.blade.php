@extends('frontend.layout')
@section('content')
<div id = 'tintuc'>
	@foreach($tintucs as $tintuc)
	 <div class="productItem" dealid="11547">
                        <a href="{{ url('chitiettintuc', $tintuc->new_id )}}" ecimpression=""><span class="product-img">
                            
                            <img  src="{{ url('public/frontend/images', $tintuc->new_images) }}" style="display: block;"></span>
                            <span class="productName">
                                {{ $tintuc->new_name }}
                            </span> <span class="price"><span>
           
                            <a href="{{url('chitiettintuc', $tintuc->new_id)}}" class="btn btn-default add-to-cart">Chi tiết</a>
                        </a>
                    </div>
    @endforeach
</div>

@endsection