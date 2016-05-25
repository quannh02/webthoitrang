@extends('backend.master')
@section('content')
<form method="post" action="{{ url('taikhoan/edit', $user->user_id)}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="w3-row">
		<div class=" w3-col s12">
		<div class="w3-label w3-col s3">
			<p>Địa chỉ:</p>
		</div>
		<div class="w3-col s9">
			<input class="w3-input" name="address" type="text" value="{{ $user->address }}">
		</div>
		</div>
		<div class="w3-col s12">
		<div class="w3-label w3-col s3">
			<p>Số điện thoại:</p>
		</div>
		<div class="w3-col s9">
			<input class="w3-input" name="sodienthoai" type="text" value="{{ $user->sodienthoai }}">
		</div>
		</div>
		
			</div>
			<button type="submit" class="btn btn-default">Sửa</button>
		</form>

@endsection