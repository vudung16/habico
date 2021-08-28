@extends('users.layout.index')

@section('content')
@include('users.layout.slide')
<main>
    <div class="container">
        <div class="news">
            <div class="row section-header">
                <div class="col-sm-6">
                    <h2>Tiêu Điểm</h2>
                </div>
                <div class="col-sm-6">
                    <h4><a href="{{url('news')}}">Xem thêm <i>---></i></a></h4>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xl-6 content-left">
                        <img src="{{asset('upload/news')}}/{{$new1['image']}}" alt="">
                    </div>
                    <div class="col-xl-6 col-md-12 content-right">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-image">
                                <img src="{{asset('upload/news')}}/{{$new2['image']}}" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>Tin Thương Hiệu</h5>
                                <a class="title" href="">{{$new2['title']}}</a><br>
                                <button><a href="">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>Tin Thương Hiệu</h5>
                                <a class="title" href="">{{$new3['title']}}</a><br>
                                <button><a href="">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-image">
                                <img src="{{asset('upload/news')}}/{{$new3['image']}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('upload/news')}}/{{$new4['image']}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>Tin Thương Hiệu</h5>
                        <a class="title" href="">{{$new4['title']}}</a><br>
                        <button><a href="">Chi tiết</a></button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('upload/news')}}/{{$new5['image']}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>Tin Thương Hiệu</h5>
                        <a class="title" href="">{{$new3['title']}}</a><br>
                        <button><a href="">Chi tiết</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <img class="section-bg" src="{{asset('user_asset/img/section-bg.png')}}" alt="">
            <div class="product-title">
                <h2>SẢN PHẨM</h2>
                <!-- Tabs navs -->
                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                            aria-controls="ex1-tabs-1" aria-selected="true"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                            aria-controls="ex1-tabs-2" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                            aria-controls="ex1-tabs-3" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-4" data-mdb-toggle="tab" href="#ex1-tabs-4" role="tab"
                            aria-controls="ex1-tabs-4" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-5" data-mdb-toggle="tab" href="#ex1-tabs-5" role="tab"
                            aria-controls="ex1-tabs-5" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-6" data-mdb-toggle="tab" href="#ex1-tabs-6" role="tab"
                            aria-controls="ex1-tabs-6" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-7" data-mdb-toggle="tab" href="#ex1-tabs-7" role="tab"
                            aria-controls="ex1-tabs-7" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-8" data-mdb-toggle="tab" href="#ex1-tabs-8" role="tab"
                            aria-controls="ex1-tabs-8" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ex1-tab-9" data-mdb-toggle="tab" href="#ex1-tabs-9" role="tab"
                            aria-controls="ex1-tabs-9" aria-selected="false"><img
                                src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex1-content">
                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 content">
                                    <img src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                                    <p>Là dòng sản phẩm cao cấp được ra đời nhằm chào mừng đại lễ 1000 năm Thăng Long -
                                        Hà
                                        nội. Ra đời với độ cồn 5.1% đánh dấu sự trở lại của nhãn hiệu Bia Trúc Bạch nổi
                                        tiếng bao năm qua.</p>
                                    <button><a href="">Xem thêm</a></button>
                                </div>
                                <div class="col-md-6 img">
                                    <img src="{{asset('user_asset/img/trucbach.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 content">
                                    <img src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                                    <p>Là dòng sản phẩm cao cấp được ra đời nhằm chào mừng đại lễ 1000 năm Thăng Long -
                                        Hà
                                        nội. Ra đời với độ cồn 5.1% đánh dấu sự trở lại của nhãn hiệu Bia Trúc Bạch nổi
                                        tiếng bao năm qua.</p>
                                    <button><a href="">Xem thêm</a></button>
                                </div>
                                <div class="col-md-6 img">
                                    <img src="{{asset('user_asset/img/trucbach.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 content">
                                    <img src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                                    <p>Là dòng sản phẩm cao cấp được ra đời nhằm chào mừng đại lễ 1000 năm Thăng Long -
                                        Hà
                                        nội. Ra đời với độ cồn 5.1% đánh dấu sự trở lại của nhãn hiệu Bia Trúc Bạch nổi
                                        tiếng bao năm qua.</p>
                                    <button><a href="">Xem thêm</a></button>
                                </div>
                                <div class="col-md-6 img">
                                    <img src="{{asset('user_asset/img/trucbach.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                        Tab 1 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
                        Tab 2 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-6" role="tabpanel" aria-labelledby="ex1-tab-6">
                        Tab 3 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-7" role="tabpanel" aria-labelledby="ex1-tab-7">
                        Tab 1 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-8" role="tabpanel" aria-labelledby="ex1-tab-8">
                        Tab 2 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-9" role="tabpanel" aria-labelledby="ex1-tab-9">
                        Tab 3 content
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>
</main>
@endsection