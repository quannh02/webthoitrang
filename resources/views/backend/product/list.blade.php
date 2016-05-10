@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themsanpham') }}" class="btn btn-info" role="button">Thêm sản phẩm</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Tên</th>
	        <th>Giá</th>
	        <th>Màu</th>
	        <th>Số lượng</th>
	        <th>Sửa/Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($allproducts as $product)
	      <tr>
	        <td>{{ $product->pro_id }}</td>
	        <td>{{ $product->pro_name }}</td>
	        <td>{{ $product->pro_price }}</td>
	        <td>{{ $product->pro_color }}</td>
	        <td>{{ $product->pro_number }}</td>
	        <td class=" ">
              <center>
                <a style="float:left" href="{{ url('suasanpham', $product->pro_id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a style="float:left" data-id="{{ $product->pro_id }}" value="Delete" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
      </div>
@endsection