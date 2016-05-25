@extends('backend.master')
@section('content')
	<div class="w3-row">
		<div class="w3-col s3">
			<p>Tên tài khoản:</p>
		</div>
		<div class="w3-col s9">
			<p>{{ $user->username }}</p>
		</div>
		<div class="w3-col s3">
			<p>Email:</p>
		</div>
		<div class="w3-col s9">
			<p>{{ $user->email }}</p>
		</div>
		<div class="w3-col s3">
			<p>Địa chỉ:</p>
		</div>
		<div class="w3-col s9">
			<p>{{ $user->address }}</p>
		</div>
		<div class="w3-col s3">
			<p>Số điện thoại:</p>
		</div>
		<div class="w3-col s9">
			<p>{{ $user->sodienthoai }}</p>
		</div>
		<a class="btn btn-success" href="{{ url('taikhoan/edit', $user->user_id) }}">Sửa</a>
	</div>
@endsection