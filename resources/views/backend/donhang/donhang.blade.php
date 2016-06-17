	@extends('backend.master')
@section('content')
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Tên khách mua</th>
	        <th>SDT người mua</th>
	        <th>Tên Khách nhận</th>
	        <th>SDT người nhận</th>
	        <th>Địa chỉ</th>
	        <th>Chi tiết</th>
	        <th>Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($alldonhang as $donhang)
	      <tr>
	        <td>{{ $donhang->name }}</td>
	        <td>{{ $donhang->sodienthoai }}</td>
	        <td>{{ $donhang->ord_name }}</td>
	        <td>{{ $donhang->ord_phone }}</td>
	        <td>{{ $donhang->ord_address }}</td>
			<td><a href="{{ url('chitietdonhang',$donhang->ord_id) }}" >Chi tiết</a></td>
	        <td class=" ">
              <center>
                <a style="float:left" href="{{ url('xoadonhang', [$donhang->ord_id, $donhang->customer_id]) }}" onclick="return xacnhanxoa('Bạn có muốn xóa không?');" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
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