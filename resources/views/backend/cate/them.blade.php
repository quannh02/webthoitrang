@extends('backend.master')
@section('content')
<h1 class="page-header">Thêm danh mục</h1>
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
              
                          <form action="{{ url('themdanhmuc') }}" method="POST" >
                            {!! csrf_field() !!}
                          
                            <div class="row">
                              <div class="col-md-2">Danh mục</div>
                              <div class="form-group col-md-8">
                                <input type="text" class="form-control" name="catename" value="{{ old('catename') }}">
                              </div>
                            </div>

            
                            <button type="submit" class="btn btn-default btn-success">Thêm</button>
                        <form>
                    </div>
                    </div>
                </div>
@endsection