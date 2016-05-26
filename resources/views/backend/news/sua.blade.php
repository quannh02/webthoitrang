@extends('backend.master')
@section('content')
<h1 class="page-header">Thêm sản phẩm</h1>
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
                        <form action="{{ url('suatintuc', $tintuc->new_id) }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                  
                            <div class="row">
                              <div class="col-md-2">Title</div>
                              <div class="form-group col-md-8">
                                <textarea type="text" class="form-control" name="new_name" placeholder="Nhập title">{{ $tintuc->new_name }}</textarea>
                              </div>
                            </div>

                  
                            <div class="row">
                              <div class="col-md-2"></div>
                              <div class="form-group col-md-8"><a href=""><img src="{{ url('public/frontend/images', $tintuc->new_images)}}" alt=""></a></div>
                            </div>
                            
              
                            <div class="row">
                              <div class="col-md-2">Hình</div>
                              <div class="form-group col-md-8">
                                <input type="file" name="new_images" id="new_images">
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Nội dung</div>
                                <div class="form-group col-md-10">
                                   <textarea type="number" class="form-control" name="new_detail" placeholder="Nhập nội dung">{{ $tintuc->new_detail }}</textarea>
                                </div>
                               
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
                </div>
@endsection