@extends('backend.master')
@section('content')
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Tên sản phẩm</th>
	        <th>Mã sản phẩm</th>
	        <th>Cỡ</th>
	        <th>Số lượng</th>
	        <th>Giá</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($chitiet as $chitiet)
	      <tr>
	        <td>{{ $chitiet->pro_name }}</td>
	        <td>{{ $chitiet->pro_code }}</td>
	        <td>{{ $chitiet->det_size }}</td>
	        <td>{{ $chitiet->det_number }}</td>
	        <td>{{ $chitiet->det_price }}</td>
            </td>
	      </tr>
	      @endforeach
    	</tbody>
  	</table>
  </div>
        </div>
@endsection