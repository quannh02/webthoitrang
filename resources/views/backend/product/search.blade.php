@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themsanpham') }}" class="btn btn-info" role="button">Thêm sản phẩm</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Danh mục</th>
	        <th>Tên</th>
	        <th>Code</th>
	        <th>Hình</th>
	        <th>Giá</th>
	        <th>Màu</th>
	        <th>Size S</th>
	        <th>Size M</th>
	        <th>Size L</th>
	        <th>Sửa/Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($products as $product)
	      <tr>
	        <td>{{ $product->pro_id }}</td>
	        <td>{{ $product->c_id }}</td>
	        <td>{{ $product->pro_name }}</td>
	        <td>{{ $product->pro_code }}</td>
	        <td><img style="height: 100px; width: 75px;" class="img img-responsive" src="{{ url('public/frontend/images', $product->pro_images)}}"> 
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
	        <td>{{ $product->pro_price }}</td>
	        <td>{{ $product->pro_color }}</td>
	        <td>{{ $product->pro_sizeS }}</td>
	        <td>{{ $product->pro_sizeM }}</td>
	        <td>{{ $product->pro_sizeL }}</td>
	        <td class=" ">
              <center>
                <a style="float:left" href="{{ url('suasanpham', $product->pro_id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a style="float:left" data-id="{{ $product->pro_id }}" value="Delete" href="{{ url('xoasanpham', $product->pro_id) }}" onclick="return xacnhanxoa('Bạn có muốn xóa không?');" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
  <?php echo $products->render(); ?>
        </div>
@endsection