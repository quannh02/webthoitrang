@extends('backend.master')
@section('content')
<h1 class="page-header">Thêm người dùng</h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">

                        <form action="{{ url('themnguoidung') }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="row">
                              <div class="col-md-2">Tên người dùng</div>
                              <div class="form-group col-md-8">
                                @if ($errors->has('username'))
                                    <span class="error">{{ $errors->first('username') }}</span>
                                @endif
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nhập tên người dùng">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">Email</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Nhập email người dùng">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">Địa chỉ</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('address'))
                                    <span class="error">{{ $errors->first('address') }}</span>
                                @endif
                                <input type="text " class="form-control" name="address" value="{{ old('address') }}" placeholder="Nhập địa chỉ">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">Role</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('role'))
                                    <span class="error">{{ $errors->first('role') }}</span>
                                @endif
                                <input type="text" class="form-control" name="role" value="{{ old('role') }}" placeholder="đối tượng người dùng">
                              </div>
                              <br><br><br>

                            <button type="submit" class="btn btn-default">Thêm</button>
                        <form>
                    </div>
                </div>
@endsection