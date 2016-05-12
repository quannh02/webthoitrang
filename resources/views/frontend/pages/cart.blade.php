@extends('frontend.layout')
@section('content')
	<section id="advertisement">
	<div class="container">
		</div>
		</section>
		<section id="cart_items">
		<div class="container">
		<div class="table-responsive cart_info">
		@if(count($cart))
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
		@foreach($cart as $item)
		<tr>
		<td class="cart_product">
		<a href=""><img src="{{ url('frontend/images', $item->image )}}" alt=""></a>
		</td>
		<td class="cart_description">
		<h4><a href="">{{$item->name}}</a></h4>
		<p>Web ID: {{$item->id}}</p>
		</td>
		<td class="cart_price">
		<p>{{{ number_format($item->price, 0) }}} VNĐ</p>
		</td>
		<td>
			<p>{{ strtoupper($item->options['size']) }}</p>
		</td>
		<td class="cart_quantity">
		<div class="cart_quantity_button">
		<a class="cart_quantity_up" href="{{ url('/cartincrease', $item->id )}}"> + </a>
		<input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
		<a class="cart_quantity_down" href="{{ url('/cartdecrease', $item->id ) }}"> - </a>
		</div>
		</td>
		<td class="cart_total">
		<p class="cart_total_price">{{{ number_format($item->subtotal, 0) }}} VNĐ</p>
		</td>
		<td class="cart_delete">
		<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
		</td>
		</tr>
		@endforeach
		@else
		<p>Bạn không có sản phẩm trong giỏ hàng</p>
		@endif
		</tbody>
		</table>
		</div>
		</div>
		</section> <!--/#cart_items-->
		 
		<section id="do_action">
		<div class="container">
		 
		<div class="row">
		<div class="col-sm-6">
		<div class="total_area">
		<ul>
		<li>Vận chuyển <span>Miễn phí</span></li>
		<li>Tổng tiền: <span>{{{ number_format(Cart::total(), 0) }}} VNĐ</span></li>
		</ul>
		 
		</div>
		</div>
		</div>
		</div>
		</section><!--/#do_action-->
@endsection