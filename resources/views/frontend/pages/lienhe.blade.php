@extends('frontend.layout')
@section('content')
<div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang chủ</a>
        </li>
        <li class="active">Liên hệ</li>
      </ul>  
      <!-- Contact Us-->
      <div class="row">
      	<div class="col-md-6 col-xs-12">
        <div class="span9">
          <form class="form-horizontal" method="post" action="{!! url('lien-he') !!}">
          	 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <fieldset>
              <div class="control-group">
                <label for="name" class="control-label">Tên <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" class="required" id="name" value="" name="name">
                </div>
              </div>
              <div class="control-group">
                <label for="email" class="control-label">Email <span class="required">*</span></label>
                <div class="controls">
                  <input type="email" class="required email" id="email" value="" name="email">
                </div>
              </div>
              <div class="control-group">
                <label for="message" class="control-label">Thông tin</label>
                <div class="controls">
                  <textarea class="required" rows="6" cols="40" id="message" name="message"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <input class="btn btn-success" type="submit" value="Gửi">
              </div>
            </fieldset>
          </form>
        </div>
        </div>
        <!-- Sidebar Start-->
        <div class="col-md-6 col-xs-12">
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span>Thông tin liên hệ</span></h2>
                <br>
                Phone:<br>
                Fax: <br>
                Email: buinguyenba@gmail.com<br>
                Web: webthoitrang.com<br>
              </p>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
        </div>
      </div>
    </div>
@endsection