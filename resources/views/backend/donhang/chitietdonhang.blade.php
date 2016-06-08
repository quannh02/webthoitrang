@extends('backend.master')
@section('content')
<div class="table-responsive">          
  		<table class="table">
    	<thead>
	      <tr>
	        <th>Detailorder_id</th>
	        <th>Order_id</th>
	        <th>Pro_id</th>
	        <th>Cỡ</th>
	        <th>Số lượng</th>
	        <th>Giá</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($chitiet as $chitiet)
	      <tr>
	        <td>{{ $chitiet->det_id }}</td>
	        <td>{{ $chitiet->order_id }}</td>
	        <td>{{ $chitiet->pro_id }}</td>
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