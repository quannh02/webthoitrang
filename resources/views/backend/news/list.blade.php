@extends('backend.master')
@section('content')
<div class="buttonThem">
	<a href="{{ url('themtintuc') }}" class="btn btn-info" role="button">Thêm tin tức</a></div>
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Tên</th>
	        <th>Hình</th>
	        <th>Nội dung</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($tintucs as $tintuc)
	      <tr>
	        <td>{{ $tintuc->new_id }}</td>
	        <td>{{ $tintuc->new_name }}</td>
	        <td><img style="height: 100px; width: 75px;" class="img img-responsive" src="{{ url('public/frontend/images', $tintuc->new_images )}}"> 
	      	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{ $tintuc->new_id }}">Xem</button>
	      	
	      	</td>
	      	<div class="modal fade" id="myModal{{ $tintuc->new_id }}" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Ảnh</h4>
		        </div>
		        <div class="modal-body">
		          <img class="img img-responsive" src="{{ url('public/frontend/images', $tintuc->new_images )}}">
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		      
		    </div>
		  	</div>
	        <td>{{ $tintuc->new_detail }}</td>
	        <td class=" ">
              <center>
                <a style="float:left" href="{{ url('suatintuc', $tintuc->new_id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a style="float:left" data-id="{{ $tintuc->new_id }}" value="Delete" href="{{ url('deletetintuc', $tintuc->new_id) }}" onclick="return xacnhanxoa('Bạn có muốn xóa không?');" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash-o"></i></a>
              </center>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
  <?php echo $tintucs->render(); ?>
        </div>
@endsection