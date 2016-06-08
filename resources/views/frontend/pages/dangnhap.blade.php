@extends('frontend.layout')
@section('content')
 <div class="col-sm-offset-3 col-md-offset-3 col-md-5 col-sm-5 col-xs-12">
    <h4>Trang đăng nhập</h4>
     <form method="post" action="{{ url('dangnhap') }}">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class = 'col-md-9'>
        <fieldset>
        <div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
            <br>
            <br>
        </div>
        </fieldset>
        </div>
        </form>
        </div>
@endsection
