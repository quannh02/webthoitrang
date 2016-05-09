@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="#" class="btn btn-info" role="button">Thêm user</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Username</th>
	        <th>Email</th>
	        <th>Age</th>
	        <th>City</th>
	        <th>Country</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($allusers as $user)
	      <tr>
	        <td>{{ $user->user_id }}</td>
	        <td>{{ $user->username }}</td>
	        <td>{{ $user->email }}</td>
	        <td>35</td>
	        <td>New York</td>
	        <td class=" ">
              <center>
                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <div class="pull-right">
                       {!! Form::open(array('url' => array('user/destroy', $user->user_id ))) !!}
                       <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                       {!! Form::close() !!}
                </div>
                <a class="btn btn-danger btn-sm" data-confirm="Bạn muốn Xóa bài hát [Thằng Cuội - Ost Tôi Thấy Hoa Vàng Dưới Cỏ Xanh]?" data-method="delete" href="/user_songs/5990" rel="nofollow"><i class="fa fa-trash-o"></i></a>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
      </div>
@endsection