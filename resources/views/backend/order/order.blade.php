@extends('backend.master')
@section('content')
	<div class="row">
	<div class="col-md-4">
			<p>Đặt hàng</p>
			<form method="post" action="{{ url('dat-hang') }}">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
       	<h2>Người đặt</h2>
       	 @if ($errors->has('namenguoigui'))
    		<span class="error">{{ $errors->first('namenguoigui') }}</span>
		@endif
        <div class="form-group">Họ và tên đệm của bạn (*)
            <input type="text" class="form-control" name="namenguoigui" value="{{ $user->username }}"> 
        </div>
        @if ($errors->has('emailnguoigui'))
    		<span class="error">{{ $errors->first('emailnguoigui') }}</span>
		@endif
        <div class="form-group">Email (*)
            <input type="email"  class="form-control" name="emailnguoigui" value="{{ $user->email }}">
        </div>
        @if ($errors->has('sdtnguoigui'))
    		<span class="error">{{ $errors->first('sdtnguoigui') }}</span>
		@endif
        <div class="form-group">Số điện thoại (*)
            <input type="text" value="{{ $user->sodienthoai }}" class="form-control" name="sdtnguoigui">
        </div>
        @if ($errors->has('addressnguoigui'))
    		<span class="error">{{ $errors->first('addressnguoigui') }}</span>
		@endif
        <div class="form-group">Địa chỉ (*)
             <textarea class="form-control" rows="4" cols="40" id="message" name="addressnguoigui">{{ $user->address }}</textarea>
        </div>
        <h2>Người nhận</h2>
        @if ($errors->has('namenguoinhan'))
    		<span class="error">{{ $errors->first('namenguoinhan') }}</span>
		@endif
        <div class="form-group">Họ và tên đệm của bạn (*)
            <input type="text" class="form-control" name="namenguoinhan" value="{{ old('name') }}"> 
        </div>
        @if ($errors->has('sdtnguoinhan'))
    		<span class="error">{{ $errors->first('sdtnguoinhan') }}</span>
		@endif
        <div class="form-group">Số điện thoại (*)
            <input type="text"  class="form-control" name="sdtnguoinhan">
        </div>
        @if ($errors->has('addressnguoinhan'))
    		<span class="error">{{ $errors->first('addressnguoinhan') }}</span>
		@endif
        <div class="form-group">Địa chỉ (*)
             <textarea class="form-control" rows="4" cols="40" id="message" name="addressnguoinhan"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Gửi đơn hàng</button>
        </div>
        </fieldset>
        </form>
		</div>
		<div class="col-md-8">
			<table class="table table-responsive">
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
                @if(Session::has('giohang'))
                @foreach(Session::get('giohang') as $key => $value)
                <tr>
                <td class="cart_product">
                <img class"img img-responsive imagecart" src="{{ url('public/frontend/images', $value['image'])}}" alt="">
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
                <a class="cart_quantity_input" name="quantity">{{$value['quantity']}}</a>
                </div>
                </td>
                <td class="cart_total">
                <p class="cart_total_price">{{{ number_format($value['quantity'] * $value['price'], 0) }}} VNĐ</p>
                </td>
                </tr>
                @endforeach
                @else
                <p>Bạn không có sản phẩm trong giỏ hàng</p>
                @endif
                </tbody>
            </table>
            <p>Tổng tiền {{ number_format($tongtien,0) }} VNĐ</p>
		</div>
	</div>
@endsection