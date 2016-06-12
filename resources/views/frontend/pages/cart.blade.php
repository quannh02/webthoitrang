@extends('frontend.layout')
@section('content')

		<section id="cart_items">
		<div class="container">
		<div class="table-responsive cart_info">
		@if(is_array(Session::get('giohang')))
		<table class="table table-condensed">
		<thead>
		<tr class="cart_menu">
		<td class="image">Sản phẩm</td>
		<td class="description"></td>
		<td class="price">Giá</td>
		<td>Cỡ</td>
		<td class="quantity">Số lượng</td>
		<td class="total">Tổng</td>
		<td></td>
		</tr>
		</thead>
		<tbody>
		@foreach(Session::get('giohang') as $key => $value)
		<tr>
		<td class="cart_product">
		<a href=""><img src="{{ url('public/frontend/images', $value['image'])}}" alt=""></a>
		</td>
		<td class="cart_description">
		<h4><a href="{{ url('chitiet', $value['id']) }}">{{$value['name'] }}</a></h4>
		<p class="idcartitem">{{$value['id']}}</p>
		</td>
		<td class="cart_price">
		<p>{{{ number_format($value['price'], 0) }}} VNĐ</p>
		</td>
		<td class="cart_size">
			<p>{{ strtoupper($value['size']) }}</p>
		</td>
		<td class="cart_quantity">
		<div class="cart_quantity_button">
		<form action="{{ url('congvaogio', [$value['id'], $value['size']])}}" method="post">
		{{ csrf_field() }}
		<button type="submit" class="cart_quantity_up btn">+</button>
		</form>
		<a class="cart_quantity_input" name="quantity">{{$value['quantity']}}</a>
		<form action="{{ url('truvaogio', [$value['id'], $value['size']]) }}" method="post">
		{{ csrf_field() }}
		<button type="submit" class="cart_quantity_down btn">-</button>
		</form>
		</div>
		</td>
		<td class="cart_total">
		<p class="cart_total_price">{{{ number_format($value['quantity'] * $value['price'], 0) }}} VNĐ</p>
		</td>
		<td class="cart_delete">
		<form action="{{ url('xoagiohang', [$value['id'], $value['size']]) }}" method="post">
		{{ csrf_field() }}
		<button type="submit" class="cart_quantity_delete btn">X</button>
		</form>
		</td>
		</tr>
		@endforeach
		@else
			@if(Session::has('message'))
	            <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('message') }}</div>
	        @endif
		@endif
		</tbody>

		</table>
		</div>
		<div class="col-md-6">
		<div class="total_area">
		<ul>
		<li>Vận chuyển <span>Miễn phí</span></li>
		<li>Tổng tiền: <span>{{ number_format($tongtien,0) }} VNĐ</span></li>
		</ul>

		<a href="{{ url('dat-hang') }}" class="btn btn-success">Đặt Hàng</a>
		</div>
		</div>
		<div class="col-md-6">
			<div class="pull-right">
			
			<a type="submit" href="{{ url('xoahetgiohang')}}" class="cart_quantity_delete btn btn-success">Hủy giỏ hàng</a>
			</div>
		</div>
		</div>
		
		 
		
		</section> <!--/#cart_items-->
		 
		
@endsection