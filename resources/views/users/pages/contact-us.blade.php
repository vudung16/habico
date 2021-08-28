@extends('users.layout.index')
@section('title','contact')
@section('content')
<main>
    <div class="banner-product">
        <img src="{{asset('user_asset/img/banner.jpg')}}" alt="">
    </div>

    <div class="container p-4">
       <h1 class="text-center">LIÊN HỆ</h1>
       <div class = "row">
            <div class = "col-xl-6 col-md-12 content-right">
                <p>Với bí quyết công nghệ - truyền thống trăm năm, cùng hệ thống thiết bị hiện đại, đội ngũ cán bộ công nhân viên lành nghề, có trình độ, tâm huyết, các sản phẩm của HABECO đã nhận được sự mến mộ của hàng triệu người tiêu dùng trong nước cũng như quốc tế. Thương hiệu BIA HÀ NỘI ngày hôm nay được xây dựng, kết tinh từ nhiều thế hệ, là niềm tin của người tiêu dùng, niềm tự hào của thương hiệu Việt.</p>
                <div>
                    <i class="fa fa-map-marker"></i>
                    <span>183 Hoàng Hoa Thám, Ba Đình, Hà Nội</span>
                </div>
                <div>
                    <i class="fa fa-map-marker"></i>
                    <span>Hà Nội, Việt Nam</span>
                </div>
                <div>
                    <i class="fa fa-phone-square"></i>
                    <span>024.38453843</span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span> tuyendung@habeco.com.vn</span>
                </div>
                <div id="map-container-google-11" class="" style="height: 400">
                    <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <div class = "col-xl-6 col-md-12 content-left">
                <p><strong>Vui lòng điền email của bạn thật chính xác để chúng tôi tiện liên lạc với bạn.</strong></p>
                <p><div>Họ & Tên <span class="text-danger">*</span></div>
                <input type="text"></p>
                <p><div>Địa Chỉ Email<span class="text-danger">*</span></div>
                <input type="text"></p>
                <p><div>Điện Thoại</div>
                <input type="text"></p>
                <p><div>Nội dung yêu cầu hoặc ý kiến<span class="text-danger">*</span></div>
                <textarea class="form-control" rows="3"></textarea></p>

                <p>
                    <button type="button" class="btn btn-success">Gửi</button>
                    <button type="button" class="btn btn-light">Bỏ qua</button>
                </p>
            </div>
       </div>
 </div>
</main>
@endsection