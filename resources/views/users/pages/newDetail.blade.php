@extends('users.layout.index')
@section('title','New')
@section('content')
<main>
    <div class="banner-product">
        <img src="{{asset('user_asset/img/habeco-nangtamvithe.jpg')}}" alt="">
    </div>

    <div class="container">
        <div class="">
            <h3>{{$news->title}}</h3>
        </div>

        <div class="">
            {!! $news->desc !!}
        </div>
        <div class="img">
            <img src="{{asset('upload/news/'.$news->image)}}" alt="">
        </div>
        <div class="post md-30">
            {!! $news->details !!}
        </div>
        @include('users.layout.newsDifferent')
    </div>
</main>
@endsection