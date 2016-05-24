@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themdanhmuc') }}" class="btn btn-info" role="button">Thêm danh mục</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Danh mục</th>
	        <th>Sửa/Xóa</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($allcates as $cate)
	      <tr>
	        <td>{{ $cate->c_id }}</td>
	        <td>{{ $cate->c_name }}</td>
	        <td class=" ">
              <center>
                <a style="float:left" href="{{ url('suadanhmuc', $cate->c_id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a style="float:left" value="Delete" href="{{ url('xoadanhmuc', $cate->c_id) }}" onclick="return xacnhanxoa('Bạn có muốn xóa không?');" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
  <?php echo $allcates->render(); ?>
        </div>
@endsection