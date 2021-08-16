@extends('users.layout.index')
@section('title','Product')
@section('content')

<div class="banner-product">
    <img src="{{asset('user_asset/img/bold-banner.png')}}" alt="">
</div>

<div class="container">
    <div class="product-detail">
        <div class="logo">
            <img src="{{asset('user_asset/img/trucbach-logo.png')}}" alt="">
            <p>Là dòng sản phẩm cao cấp được ra đời nhằm chào mừng đại lễ 1000 năm Thăng Long - Hà nội. Ra đời với độ
                cồn
                5.1% đánh dấu sự trở lại của nhãn hiệu Bia Trúc Bạch nổi tiếng bao năm qua.</p>
        </div>
        <div class="content">
            <img class="content-banner" src="{{asset('user_asset/img/section-bg.png')}}" alt="">
            <div class="row content-detail">
                <div class="col-md-6 img">
                    <img src="{{asset('user_asset/img/trucbach.png')}}" alt="">
                </div>
                <div class="col-md-6 detail">
                    <h3>BIA LON TRÚC BẠCH</h3>
                    <div class="row info-beer">
                        <div class="col-md-4">
                            <img src="{{asset('user_asset/img/detail-icon.png')}}" alt="">
                            <p>Dung tích</p>
                            <span>330ml</span>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('user_asset/img/detail-icon.png')}}" alt="">
                            <p>Thùng giấy</p>
                            <span>24 lon</span>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('user_asset/img/detail-icon.png')}}" alt="">
                            <p>Nồng độ cồn</p>
                            <span>5.1%</span>
                        </div>
                    </div>
                    <div class="content-detail-beer">
                        <p>Được đặt theo tên hồ Trúc Bạch – một địa danh gắn liền với mảnh đất nghìn năm văn hiến Thăng
                            Long
                            – Hà Nội, Trúc Bạch là loại bia nội đầu tiên của Việt Nam khi sản phẩm này ra đời vào năm
                            1958.
                        </p>
                        <p>Dòng bia cao cấp được kết tinh từ những nguyên liệu nhập khẩu tốt nhất như hoa bia Saaz – một
                            trong bốn loại hoa bia quý tộc của thế giới được trồng duy nhất tại thung lũng Zatec, Cộng
                            hòa
                            Séc; và lúa mạch vụ xuân thu hoạch từ những vùng nguyên liệu nổi tiếng của Pháp và Cộng hòa
                            Séc.
                        </p>
                        <p>Với người uống, Bia Trúc Bạch được ví như một tác phẩm nghệ thuật. Dòng bia màu vàng óng và
                            trong
                            suốt như mật ong. Khi rót, bọt bia trắng, dày, xốp, và tai nghe tiếng bọt từ từ tan ra “êm”
                            và
                            “mịn”. Đặc biệt, khi uống, bia có vị đắng nhẹ, vị đắng này từ từ chuyển sang vị ngọt dịu của
                            mạch nha thượng hạng. Vị bia độc đáo này là kết quả của quá trình lên men tự nhiên dài ngày,
                            lâu
                            gấp 2 – 3 lần so với các loại bia thông thường.</p>
                        <p>Nhằm đáp ứng tốt hơn nhu cầu của người tiêu dùng, cuối năm 2014, bên cạnh sản phẩm Bia chai
                            Trúc
                            Bạch 330ml, HABECO đã đưa thêm ra thị trường sản phẩm Bia lon Trúc Bạch 330ml.</p>
                        <p>HABECO tin tưởng rằng với vị thế là một kiệt tác bia, Trúc Bạch xứng đáng trở thành một biểu
                            tượng và niềm tự hào của ngành đồ uống Việt Nam. Với nồng độ cồn 5.1%, Trúc Bạch hiện đứng
                            đầu
                            dòng bia dành cho phân khúc cao cấp của HABECO.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection