@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="#" class="btn btn-info" role="button">Thêm sản phẩm</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Name</th>
	        <th>Price</th>
	        <th>Age</th>
	        <th>City</th>
	        <th>Country</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($allproducts as $product)
	      <tr>
	        <td>{{ $product->pro_id }}</td>
	        <td>{{ $product->pro_name }}</td>
	        <td>{{ $product->pro_price }}</td>
	        <td>35</td>
	        <td>New York</td>
	        <td class=" ">
              <center>
                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <div class="pull-right">
                       {!! Form::open(array('url' => array('product/destroy', $product->pro_id ))) !!}
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