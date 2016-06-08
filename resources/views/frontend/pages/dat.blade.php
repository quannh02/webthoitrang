@extends('frontend.layout')
@section('content')
    <div class="container">
	<div class="row">
		<div class="col-md-4">
			<p>Mua hàng không cần đăng ký</p>
			<form method="post" action="{{ url('dat-hang') }}">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
       	<h2>Người đặt</h2>
       	 @if ($errors->has('namenguoigui'))
    		<span class="error">{{ $errors->first('namenguoigui') }}</span>
		@endif
        <div class="form-group">Họ và tên đệm của bạn (*)
            <input type="text" class="form-control" name="namenguoigui" value="{{ old('name') }}"> 
        </div>
        @if ($errors->has('emailnguoigui'))
    		<span class="error">{{ $errors->first('emailnguoigui') }}</span>
		@endif
        <div class="form-group">Email (*)
            <input type="email"  class="form-control" name="emailnguoigui" value="{{ old('email') }}">
        </div>
        @if ($errors->has('sdtnguoigui'))
    		<span class="error">{{ $errors->first('sdtnguoigui') }}</span>
		@endif
        <div class="form-group">Số điện thoại (*)
            <input type="text"  class="form-control" name="sdtnguoigui">
        </div>
        @if ($errors->has('addressnguoigui'))
    		<span class="error">{{ $errors->first('addressnguoigui') }}</span>
		@endif
        <div class="form-group">Địa chỉ (*)
             <textarea rows="4" cols="40" id="message" name="addressnguoigui"></textarea>
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
             <textarea rows="4" cols="40" id="message" name="addressnguoinhan"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Gửi đơn hàng</button>
        </div>
        </fieldset>
        </form>
		</div>
        <div class="col-md-1">
        </div>
		<div class="col-md-3">
			<p>Bạn đã có tài khoản trên hệ thống</p></br>
			<p>Để tiếp tục, vui lòng nhập địa chỉ email và mật khẩu mà bạn sử dụng cho tài khoản của bạn.</p>
			<form method="post" action="{{ url('dangnhap') }}">
     		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<fieldset>
        	<div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        	</div>
        	<div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        	</div>
        	<div>
            <button type="submit" class="btn btn-success">Đăng nhập</button>
        	</div>
       	 	</fieldset>
        	</form>
		</div>
	</div>
    </div>
@endsection