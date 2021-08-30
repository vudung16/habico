<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{url('/')}}"><img class="logo-footer" src="{{asset('upload/settings/'.$setting->logo)}}"
                        alt=""></a>
            </div>
            <div class="col-md-6 name-info">
                {{$setting->name}}
            </div>
            <div class="col-md-2 copyright">
                <p>Copyright 2020 © Habeco</p>
            </div>
            <div class="col-md-2 icon">
                <a href="{{$setting->facebook}}" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>