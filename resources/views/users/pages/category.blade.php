@extends('users.layout.index')
@section('title','Category')
@section('content')
@include('users.layout.slide')
<main>
    <div class="container">
        <div class="news">
            <div class="row section-header">
                <div class="col-sm-6">
                    <h2>$new1->category['name']</h2>
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
    </div>
</main>

<span>{{ $categories->links() }}</span>
@endsection