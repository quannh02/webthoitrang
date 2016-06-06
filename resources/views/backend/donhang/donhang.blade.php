	@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themsanpham') }}" class="btn btn-info" role="button">Thêm sản phẩm</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Ord_id</th>
	        <th>Customer_id</th>
	        <th>Tên Khách mua</th>
	        <th>Số điện thoại</th>
	        <th>Địa chỉ</th>
	        <th>Tên sản phẩm</th>
	        <th>Hình ảnh</th>
	        <th>Mã</th>
	        <th>Size</th>
	        <th>Số lượng S</th>
	        <th>Giá</th>
	        <th>Tổng giá</th>
	        <th>Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($alldonhang as $donhang)
	      <tr>
	        <td>{{ $donhang->ord_id }}</td>
	        <td>{{ $donhang->customer_id }}</td>
	        <td>{{ $donhang->ord_name }}</td>
	        <td>{{ $donhang->ord_phone }}</td>
	        <td>{{ $donhang->ord_address }}</td>
	        <td>{{ $donhang->pro_name }}</td>
	        <td><img style="height: 100px; width: 75px;" class="img img-responsive" src="{{ url('public/frontend/images', $donhang->pro_images)}}"> 
	      	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{ $product->pro_code }}">Xem</button>
	      	
	      	</td>
	      	<div class="modal fade" id="myModal{{ $product->pro_code }}" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Ảnh</h4>
		        </div>
		        <div class="modal-body">
		          <img class="img img-responsive" src="{{ url('public/frontend/images', $product->pro_images)}}">
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		      
		    </div>
		  	</div>
		  	<td>{{ $donhang->pro_code }}</td>
	        <td>{{ $donhang->det_size }}</td>
	        <td>{{ $product->det_number }}</td>
	        <td>{{ $product->det_price}}</td>
	        <td>{{ $product->pro_sizeM }}</td>
	        <td class=" ">
              <center>
                <a style="float:left" data-id="{{ $product->pro_id }}" value="Delete" href="{{ url('xoasanpham', $product->pro_id) }}" onclick="return xacnhanxoa('Bạn có muốn xóa không?');" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
  <?php echo $alldonhang->render(); ?>
        </div>
@endsection