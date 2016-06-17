@extends('backend.master')
@section('content')
<h1 class="page-header">Thêm tin tức</h1>
                        <form action="{{ url('themtintuc') }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                  
                            <div class="row">
                              <div class="col-md-2">Title</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('new_name'))
                                    <span class="error">{{ $errors->first('new_name') }}</span>
                                @endif
                                <textarea type="text" class="form-control" name="new_name" placeholder="Nhập title">{{ old('new_name') }}</textarea>
                              </div>
                            </div>

                  

              
                            <div class="row">
                              <div class="col-md-2">Hình</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('new_images'))
                                    <span class="error">{{ $errors->first('new_images') }}</span>
                                @endif
                                <input type="file" name="new_images" id="new_images">
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Nội dung</div>
                                <div class="form-group col-md-10">
                                @if ($errors->has('new_detail'))
                                    <span class="error">{{ $errors->first('new_detail') }}</span>
                                @endif
                                   <textarea class="form-control" name="new_detail" placeholder="Nhập nội dung">{{ old('new_detail') }}</textarea>
                                </div>
                               
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
                        <form>
                    </div>
                </div>
@endsection