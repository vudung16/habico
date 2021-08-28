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
                <div class="col-sm-6 see-more">
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
                                <h5>{{$new2->categories['name']}}</h5>
                                <a class="title" href="">{{$new2['title']}}</a><br>
                                <button><a href="">Chi tiết</a></button>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6 content-right-title">
                                <h5>{{$new3->categories['name']}}</h5>
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
                        <h5>{{$new4->categories['name']}}</h5>
                        <a class="title" href="">{{$new4['title']}}</a><br>
                        <button><a href="">Chi tiết</a></button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-image">
                        <img src="{{asset('upload/news')}}/{{$new5['image']}}" alt="">
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 content-right-title">
                        <h5>{{$new5->categories['name']}}</h5>
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
                <div class="nav-product">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <?php $i=0 ?>
                        @foreach($products as $product)

                        <li class="nav-item" role="presentation">
                            <a @if($i==0) class="nav-link tab active" @else class="nav-link tab" @endif
                                id="pills-{{$i}}-tab" aria-controls="pills-{{$i}}" type="button"
                                data-bs-target="#pills-{{$i}}" data-bs-toggle="pill" role="tab" aria-selected="true">
                                <img src="{{asset('upload/product')}}/{{$product->image}}" alt="">
                            </a>
                            <?php $i++; ?>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="pills-tabContent">
                    <?php $i=0; ?>
                    @foreach($products as $product)
                    <div @if($i==0) class="tab-pane fade show active" @else class="tab-pane fade" @endif
                        id="pills-{{$i}}" role="tabpanel" aria-labelledby="pills-{{$i}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 content">
                                    <img src="{{asset('upload/product')}}/{{$product->logo}}" alt="">
                                    <p>{{$product->describe}}</p>
                                    <button><a href="">Xem thêm</a></button>
                                </div>
                                <div class="col-md-6 img">
                                    <img src="{{asset('upload/product')}}/{{$product->image}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @endforeach
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>
</main>
@endsection