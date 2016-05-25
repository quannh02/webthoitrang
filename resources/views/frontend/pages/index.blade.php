@extends('frontend.layout')
@section('breadcum')
                <h1 class="mainTitle">
                        Quần Áo Nam<label class="subtit">(602 sản phẩm)</label></h1>
                    <div class="sort_gnavi">
                        <div class="dropdown">
                            <a href="" class="head">
                                Mới - Cũ<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Mới - Cũ</a></li>
                                <li><a href="">Giá tăng - giảm</a></li>
                            </ul>
                        </div>
                        <!-- end dropdown -->
                        <p>
                            Sắp xếp theo</p>
                    </div>   
@endsection
@section('content')
                <div class="all-items">
                    @foreach($aosominam as $ao)
                    <div class="productItem" dealid="11547">
                        <a href="{{ url('chitiet', $ao->pro_id )}}" ecimpression=""><span class="product-img">
                            
                            <img  src="{{ url('public/frontend/images', $ao->pro_images) }}" style="display: block;"></span>
                            <span class="productName">
                                {{ $ao->pro_name }} - {{ $ao->pro_code }}
                            </span> <span class="price"><span>
                                    280.000</span>
                                    {{ number_format($ao->pro_price, 0) }}
                                </span>
                            
                            <a href="{{url('chitiet', $ao->pro_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                        </a>
                    </div>
                    @endforeach
                    @foreach($aothunnam as $ao)
                    <div class="productItem" dealid="11547">
                        <a href="{{ url('chitiet', $ao->pro_id )}}" ecimpression=""><span class="product-img">
                            
                            <img src="{{ url('public/frontend/images', $ao->pro_images) }}" style="display: block;"></span>
                            <span class="productName">
                                {{ $ao->pro_name }} - {{ $ao->pro_code }}   
                            </span> <span class="price"><span>
                                    467.000</span>
                                    {{ $ao->pro_price }}
                                </span>
                            
                            <a href="{{ url('chitiet', $ao->pro_id )}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                        </a>
                    </div>
                    @endforeach
                </div>
@endsection