@extends('backend.master')
@section('content')
<h1 class="page-header">
                            <small>Thêm xe</small>
                          </h1>
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
                        <form action="{{ url('themsanpham') }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="col-md-2">Category</div>
                                <select class="form-control col-md-8" name="sltParent">
                                    <option value="">Please Choose Category</option>
                                    @foreach($category as $cate)
                                    <option value="{{ $cate->c_id }}">{{ $cate->c_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                           	<div class="row">
                           		<div class="col-md-2">Tên sản phẩm</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_name" value="{{ old('pro_name') }}" placeholder="Nhập tên sản phẩm">
                           		</div>
                           	</div>

                           	<div class="row">
                           		<div class="col-md-2">Giá sản phẩm</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_price" value="{{ old('pro_price') }}" placeholder="Nhập giá sản phẩm">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Hình</div>
                           		<div class="form-group col-md-8">
                           			<input type="file" name="pro_images" id="pro_images">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Số hiệu sản phẩm</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" value="{{ old('pro_number') }}" name="pro_number" placeholder="Nhập số hiệu sản phẩm">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Màu sản phẩm</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_color" value="{{ old('pro_color') }}" placeholder="Nhập màu sản phẩm">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Cỡ</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="pro_size" value="{{ old('pro_size') }}" placeholder="Nhập cỡ sản phẩm">
                           		</div>
                           	</div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                        <form>
                    </div>
                </div>
@endsection