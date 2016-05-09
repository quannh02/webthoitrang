@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themsanpham') }}" class="btn btn-info" role="button">Thêm sản phẩm</a></div>
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
                <a style="float:left" href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <div style="float:left">
                       {!! Form::open(array('url' => array('product/destroy', $product->pro_id ))) !!}
                       <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                       {!! Form::close() !!}
                </div>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
      </div>
@endsection