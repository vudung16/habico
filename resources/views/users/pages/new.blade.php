@extends('users.layout.index')
@section('title','News')
@section('content')
@include('users.layout.slide')
<main>
    <div class="container">
        <div class="news">
            <div class="section-header">
                <h2>Tiêu điểm</h2>
                <a href="">Xem thêm <i>icon</i></a>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xl-6 content-left">
                        <img src="{{asset('user_asset/img/new1.png')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-md-12 content-right">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-image">
                                <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>Tin Thương Hiệu</h5>
                                <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG
                                    ĐỢT 1
                                    CHƯƠNG TRÌNH
                                    KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                                <button><a href="{{url('newDetail')}}">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>Tin Thương Hiệu</h5>
                                <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG
                                    ĐỢT 1
                                    CHƯƠNG TRÌNH
                                    KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                                <button><a href="">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-image">
                                <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>Tin Thương Hiệu</h5>
                        <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG ĐỢT 1
                            CHƯƠNG TRÌNH
                            KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                        <button><a href="">Chi tiết</a></button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>Tin Thương Hiệu</h5>
                        <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG ĐỢT 1
                            CHƯƠNG TRÌNH
                            KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                        <button><a href="">Chi tiết</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="section-header">
                <h2>Tiêu điểm</h2>
                <a href="">Xem thêm <i>icon</i></a>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xl-6 content-left">
                        <img src="{{asset('user_asset/img/new1.png')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-md-12 content-right">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-image">
                                <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>Tin Thương Hiệu</h5>
                                <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG
                                    ĐỢT 1
                                    CHƯƠNG TRÌNH
                                    KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                                <button><a href="{{url('newDetail')}}">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>Tin Thương Hiệu</h5>
                                <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG
                                    ĐỢT 1
                                    CHƯƠNG TRÌNH
                                    KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                                <button><a href="{{url('newDetail')}}">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-image">
                                <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>Tin Thương Hiệu</h5>
                        <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG ĐỢT 1
                            CHƯƠNG TRÌNH
                            KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                        <button><a href="{{url('newDetail')}}">Chi tiết</a></button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('user_asset/img/new2.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>Tin Thương Hiệu</h5>
                        <a class="title" href="">BIA HÀ NỘI CÔNG BỐ DANH SÁCH KHÁCH HÀNG MAY MẮN TRÚNG THƯỞNG ĐỢT 1
                            CHƯƠNG TRÌNH
                            KHUYẾN MẠI “BỪNG SẮC HÈ CÙNG BIA HÀ NỘI”</a><br>
                        <button><a href="{{url('newDetail')}}">Chi tiết</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection