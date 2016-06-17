@extends('backend.master')
@section('content')
<h1 class="page-header">Sửa sản phẩm</h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-7 col-md-7 col-xs-12" style="padding-bottom:120px">
                          @if(Session::has('flash_message'))
                              <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('flash_message') }}</div>
                          @endif
                          <form action="{{ url('suasanpham', $product->pro_id) }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row form-group">
                                <div class="col-md-2">Danh mục</div>
                                <div class="col-xs-8 col-md-5">
                                  <select class="form-control" name="sltParent">
                                    @foreach($category as $cate)
                                    <option value="{{ $cate->c_id }}">{{ $cate->c_name }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">Tên sản phẩm</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('pro_name'))
                                    <span class="error">{{ $errors->first('pro_name') }}</span>
                                @endif
                                <input type="text" class="form-control" name="pro_name" value="{{ $product->pro_name }}" placeholder="Nhập tên sản phẩm">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">Code sản phẩm</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('pro_code'))
                                    <span class="error">{{ $errors->first('pro_code') }}</span>
                                @endif
                                <input type="text" class="form-control" name="pro_code" value="{{ $product->pro_code }}" placeholder="Nhập code sản phẩm">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">Giá sản phẩm</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('pro_price'))
                                    <span class="error">{{ $errors->first('pro_price') }}</span>
                                @endif
                                <input type="number" class="form-control" name="pro_price" value="{{ $product->pro_price }}" placeholder="Nhập giá sản phẩm">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">Hình</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('pro_images'))
                                    <span class="error">{{ $errors->first('pro_images') }}</span>
                                @endif
                                <input type="file" name="pro_images" id="pro_images">
                              </div>
                            </div>
                      
                            <div class="row">
                              <div class="col-md-2">Màu sản phẩm</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('pro_color'))
                                    <span class="error">{{ $errors->first('pro_color') }}</span>
                                @endif
                                <input type="text" class="form-control" name="pro_color" value="{{ $product->pro_color }}" placeholder="Nhập màu sản phẩm">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Cỡ S</div>
                                <div class="form-group col-md-3">
                                @if ($errors->has('pro_sizeS'))
                                    <span class="error">{{ $errors->first('pro_sizeS') }}</span>
                                @endif
                                   <input type="number" class="form-control" name="pro_sizeS" value="{{ $product->pro_sizeS }}" placeholder="Nhập số lượng">
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-2">Cỡ M</div>
                                <div class="form-group col-md-3">
                                @if ($errors->has('pro_sizeM'))
                                    <span class="error">{{ $errors->first('pro_sizeM') }}</span>
                                @endif
                                   <input type="number" class="form-control" name="pro_sizeM" value="{{ $product->pro_sizeM }}" placeholder="Nhập số lượng">
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-2">Cỡ L</div>
                                <div class="form-group col-md-3">
                                @if ($errors->has('pro_sizeL'))
                                    <span class="error">{{ $errors->first('pro_sizeL') }}</span>
                                @endif
                                   <input type="number" class="form-control" name="pro_sizeL" value="{{ $product->pro_sizeL }}" placeholder="Nhập số lượng">
                                </div>
                               
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 proimages">
                        <img src="{{ url('public/frontend/images', $product->pro_images)}}">
                    </div>
                    </div>
                </div>
@endsection