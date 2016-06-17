	@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themsanpham') }}" class="btn btn-info" role="button">Thêm sản phẩm</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	      	<th>Code</th>
	        <th>Danh mục</th>
	        <th>Tên</th>
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
	      @foreach($allproducts as $product)
	      <tr>
	      	<td>{{ $product->pro_code }}</td>
	        <td>{{ $product->c_name }}</td>
	        <td>{{ $product->pro_name }}</td>
	        
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
	        <!--<td>{{$product->pro_sizeS>0 ? $product->pro_sizeS.' Cái' : '' }}
	        </td>-->
	        <td>
	        @if($product->pro_sizeS >0)
	        	{{$product->pro_sizeS }} Cái
	        @else
	        Hết hàng
	        @endif
	        </td>
	        <td>
	        @if($product->pro_sizeM >0)
	        	{{$product->pro_sizeM }} Cái
	        @else
	        Hết hàng
	        @endif	
	         </td>
	         <td>
	         @if($product->pro_sizeL >0)
	        	{{$product->pro_sizeL }} Cái
	        @else
	        Hết hàng
	        @endif
	         </td>
	        
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
  <?php echo $allproducts->render(); ?>
        </div>
@endsection