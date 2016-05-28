@extends('frontend.layout')

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
                    @foreach($aosominam as $ao)
                    <div class="productItem" dealid="11547">
                        <a href="{{ url('chitiet', $ao->pro_id )}}" ecimpression=""><span class="product-img">
                            
                            <img  src="{{ url('public/frontend/images', $ao->pro_images) }}" style="display: block;"></span>
                            <span class="productName">
                                {{ $ao->pro_name }} - {{ $ao->pro_code }}
                            </span> <span class="price"><span>
                                    </span>
                                    {{ number_format($ao->pro_price, 0) }}
                                </span>
                            
                            <a href="{{url('chitiet', $ao->pro_id)}}" class="btn btn-default add-to-cart">Chi tiết</a>
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
                                    </span>
                                    {{ $ao->pro_price }}
                                </span>
                            
                            <a href="{{ url('chitiet', $ao->pro_id )}}" class="btn btn-default add-to-cart">Chi tiết</a>
                        </a>
                    </div>
                    @endforeach
                </div>
@endsection