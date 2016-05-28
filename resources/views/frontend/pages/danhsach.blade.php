@extends('frontend.layout')
@section('breadcum')
                <h1 class="mainTitle">
                        Quần Áo Nam<label class="subtit"></label></h1>
                    <div class="sort_gnavi">
                    
                        <!-- end dropdown -->
                    </div>   

@endsection
@section('danhmuc')
    <div class="cate-vertical">
                    <div class="wap" style="position: relative;">
                        <div class="cate-header">
                            <div class="title">
                                <span>Tất cả danh mục</span></div>
                           
                        </div>

                        <div class="cate-content">
                            <ul>
                                <li>
                                    <h2>
                                        Quần Áo</h2>
                                </li>
                                
                                 @foreach($cates as $cate)
                                                
                                    <li class="lisub"><a class="asub" href="{{ url('danhmuc', $cate->c_id)}}">
                                      {{ $cate->c_name }}</a>
                                    </li>
                                                
                                 @endforeach
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>
@endsection
@section('content')
    <div class="all-items">
                    @foreach($products as $product)
                    <div class="productItem" dealid="11547">
                        <a href="{{url('chitiet', $product->pro_id)}}" ecimpression=""><span class="product-img">
                            
                            <img  src="{{ url('public/frontend/images', $product->pro_images) }}" style="display: block;"></span>
                            <span class="productName">
                                {{ $product->pro_name }} - {{ $product->pro_code }}
                            </span> <span class="price"><span>
                                    280.000</span>
                                    {{ number_format($product->pro_price, 0) }}
                                </span>
                            
                            <a href="{{url('chitiet', $product->pro_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                        </a>
                    </div>
                    @endforeach
                   
                </div>
@endsection