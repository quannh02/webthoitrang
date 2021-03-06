@extends('backend.master')
@section('content')
<h1 class="page-header">Sửa người dùng</h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
                          <form action="{{ url('suanguoidung', $user->user_id) }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row">
                              <div class="col-md-2">Tên người dùng</div>
                              <div class="form-group col-md-8">
                               @if ($errors->has('username'))
                                    <span class="error">{{ $errors->first('username') }}</span>
                                @endif
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="nhập tên người dùng">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">Email người dùng</div>
                              <div class="form-group col-md-8">
                               @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="nhập email người dùng">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">Địa chỉ</div>
                              <div class="form-group col-md-8">
                               @if ($errors->has('address'))
                                    <span class="error">{{ $errors->first('address') }}</span>
                                @endif
                                <input type="text" class="form-control" name="address" value="{{ $user->address}}" placeholder="nhập địa chỉ">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">Role</div>
                              <div class="form-group col-md-8">
                               @if ($errors->has('role'))
                                    <span class="error">{{ $errors->first('role') }}</span>
                                @endif
                                <input type="text" class="form-control" name="role" value="{{ $user->role}}" placeholder="nhập đối tượng">
                              </div>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
                    </div>
                </div>
@endsection 