<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img class="logo-header"
                    src="http://pacom-solution.pacom-dev.com/user_asset/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-border-bottom" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-border-bottom" href="{{url('about-us')}}">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-border-bottom" href="{{url('news')}}">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-border-bottom" href="{{url('products')}}">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-border-bottom" href="Tuyển dụng">Tuyển dụng</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-border-bottom" href="" id="navbarDropdown" role="button"
                            aria-expanded="false">
                            Thông tin cổ đông
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="menu-2">
                                <a class=" dropdown-item" href="">Vũ Dũng</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-danger"><a href="{{url('contact-us')}}">CONTACT US</a></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        if ($('body').scrollTop() > 50 || $(window).scrollTop() > 50) {
            $('nav').addClass('nav-menu');
        } else {
            $('nav').removeClass('nav-menu');
        }
    });
});
</script>