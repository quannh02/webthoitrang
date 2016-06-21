@extends('frontend.layout')
@section('content')
 <div class="col-sm-offset-3 col-md-offset-3 col-md-5 col-sm-5 col-xs-12">
    <h4>Trang đăng nhập</h4>
        @if(Session::has('message'))
            <p style="color:red;">{{ Session::get('message')}}</p>
        @endif
     <form method="post" action="{{ url('dangnhap') }}">
     {{csrf_field()}}
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class = 'col-md-9'>
        
         @if($errors->has('email'))
         <span class="error">{{ $errors->first('email') }}</span>
         @endif
        <div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        </div>
        @if($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
            <br>
            <br>
        </div>
        </div>
        </form>
        </div>
@endsection
