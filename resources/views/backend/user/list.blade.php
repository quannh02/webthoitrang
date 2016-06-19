@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themnguoidung') }}" class="btn btn-info" role="button">Thêm người dùng</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Tên</th>
	        <th>Email</th>
	        <th>Địa chỉ</th>
	        <th>Role</th>
	        <th>Sửa/Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($allusers as $user)
	      <tr>
	        <td>{{ $user->username }}</td>
	        <td>{{ $user->email }}</td>
	        <td>{{ $user->address }}</td>
	        <td>{{ $user->role }}</td>
	        <td class=" ">
              	<center>
                	<a style="float:left" href="{{ url('suanguoidung', $user->user_id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                	<a style="float:left" value="Delete" href="{{ url('deletenguoidung', $user->user_id) }}" onclick="return xacnhanxoa('Bạn có muốn xóa không?');" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
            	</center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
      </div>
@endsection