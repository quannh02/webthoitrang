@extends('backend.master')
@section('content')
<h1 class="page-header">Sửa sản phẩm</h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
                          @if(count($errors) > 0)
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach($errors->all() as $error)
                                          <li>{!! $error !!}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                          @if(Session::has('flash_message'))
                              <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('flash_message') }}</div>
                          @endif
                        <form action="{{ url('suasanpham', $product->pro_id) }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                           	<div class="row">
                           		<div class="col-md-2">Tên sản phẩm</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_name" value="{{ $product->pro_name }}" placeholder="">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Giá sản phẩm</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_price" value="{{ $product->pro_price }}" placeholder="">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Hình xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="file" name="pro_images" id="pro_images">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Số lượng</div>
                           		<div class="form-group col-md-8">
                           			<input type="number" class="form-control" value="{{ $product->pro_number }}" name="pro_number" placeholder="">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Màu xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_color" value="{{ $product->pro_color }}" placeholder="">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Size</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_size" value="{{ $product->pro_size }}" placeholder="">
                           		</div>
                           	</div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-reset btn-default">Reset</button>
                        <form>
                    </div>
                </div>
@endsection