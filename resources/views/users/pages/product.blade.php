@extends('users.layout.index')
@section('title','Product')
@section('content')

<div class="banner-product">
    <img src="{{asset('user_asset/img/banner.jpg')}}" alt="">
</div>

<div class="main-product">
    <div class="container">
        <div class="title">
            <h2>SẢN PHẨM</h2>
        </div>
        <div class="product-content">
            <div class="pd-intro">
                <img class="pd-intro-banner" src="{{asset('user_asset/img/caocap-bg.png')}}" alt="">
                <div class="row pd-intro-item">
                    <div class="col-5 col-md-7 col-lg-9 col-xl-12">
                        <img class="logo" src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                        <a href=""><img src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                        <p>Bia trúc bạch</p>
                    </div>
                </div>
            </div>
            <div class="pd-intro">
                <img class="pd-intro-banner" src="{{asset('user_asset/img/caocap-bg.png')}}" alt="">
                <div class="row pd-intro-item">
                    <div class="col-5 col-md-7 col-lg-9 col-xl-12">
                        <img class="logo" src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                        <a href=""><img src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                        <p>Bia trúc bạch</p>
                    </div>
                </div>
            </div>
            <div class="pd-intro">
                <img class="pd-intro-banner" src="{{asset('user_asset/img/caocap-bg.png')}}" alt="">
                <div class="row pd-intro-item">
                    <div class="col-5 col-md-7 col-lg-9 col-xl-12">
                        <img class="logo" src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                        <a href=""><img src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                        <p>Bia trúc bạch</p>
                    </div>
                </div>
            </div>
            <div class="pd-intro">
                <img class="pd-intro-banner" src="{{asset('user_asset/img/caocap-bg.png')}}" alt="">
                <div class="row pd-intro-item">
                    <div class="col-5 col-md-7 col-lg-9 col-xl-12">
                        <img class="logo" src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
                        <a href=""><img src="{{asset('user_asset/img/trucbach.png')}}" alt=""></a>
                        <p>Bia trúc bạch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection