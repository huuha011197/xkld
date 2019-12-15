@extends('pages.marter')
@section('content')
@if($name)
  <h6>{{$name}}</h6>
@endif
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/tang-thu-nhap-xuat-khau-lao-dong-nhat-ban.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/xuat-khau-lao-dong-nhat-ban.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/tang-thu-nhap-xuat-khau-lao-dong-nhat-ban.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="main">
    <h3>CHÚNG TÔI LÀ AI</h3>
    <p>Sứ mệnh của chúng tôi</p>
    <hr class='hr1'>
    <p>Với đội ngũ nhân viên trẻ, năng động, nhiệt huyết và chuyên nghiệp, Công ty CP Quốc tế T&T Hà Nội tin rằng</p>
    <p>Thành công của khách hàng là thành tựu của chúng tôi”, lấy tín nhiệm làm gốc, phục vụ là hàng đầu, bằng sự nỗ lực của mình, chúng tôi đã đưa thành công hàng ngàn lao động, thực tập sinh, kỹ sư đi làm việc ở nước ngoài, tạo công ăn việc làm, nâng cao trình độ, thu nhập, cải thiện đời sống cho người lao động, góp phần xây dựng và phát triển đất nước. </p>
    <p>Chúng tôi rất hân hạnh thiết lập mối quan hệ hợp tác lâu dài cùng Quý Đối tác và Quý Khách hàng.</p>
    <a name="" id="" class="btn btn-primary" href="#" role="button">Xem tiếp ></a>
  </div>
  <div class="">
  <section class="regular slider">
  <div class="card">
    <img class="card-img-top" src="assets/images/binh-minh-o-nhat.jpg" alt="">
    <div class="card-body">
      <h4 class="card-title">NHỮNG ĐIỀU THÚ VỊ VỀ NHẬT BẢN CÓ THỂ BẠN CHƯA BIẾT</h4>
      <p class="card-text">Ngoài "đất nước mặt trời mọc", "xứ sở hoa anh đào", Nhật Bản còn được gọi là "xứ Phù Tang" mà ít người biết ý nghĩa của những tên này.
    Nhật Bản là điểm đến nổi tiếng trên thế giới với nền văn hóa đậm bản sắc và ẩm thực độc đáo. Đất nước này có tới ba tên gọi khác nhau vẫn được sử dụng rộng rãi, tuy vậy không phải ai cũng biết ý nghĩa của chúng.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/images/binh-minh-o-nhat.jpg" alt="">
    <div class="card-body">
      <h4 class="card-title">NHỮNG ĐIỀU THÚ VỊ VỀ NHẬT BẢN CÓ THỂ BẠN CHƯA BIẾT</h4>
      <p class="card-text">Ngoài "đất nước mặt trời mọc", "xứ sở hoa anh đào", Nhật Bản còn được gọi là "xứ Phù Tang" mà ít người biết ý nghĩa của những tên này.
    Nhật Bản là điểm đến nổi tiếng trên thế giới với nền văn hóa đậm bản sắc và ẩm thực độc đáo. Đất nước này có tới ba tên gọi khác nhau vẫn được sử dụng rộng rãi, tuy vậy không phải ai cũng biết ý nghĩa của chúng.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/images/binh-minh-o-nhat.jpg" alt="">
    <div class="card-body">
      <h4 class="card-title">NHỮNG ĐIỀU THÚ VỊ VỀ NHẬT BẢN CÓ THỂ BẠN CHƯA BIẾT</h4>
      <p class="card-text">Ngoài "đất nước mặt trời mọc", "xứ sở hoa anh đào", Nhật Bản còn được gọi là "xứ Phù Tang" mà ít người biết ý nghĩa của những tên này.
    Nhật Bản là điểm đến nổi tiếng trên thế giới với nền văn hóa đậm bản sắc và ẩm thực độc đáo. Đất nước này có tới ba tên gọi khác nhau vẫn được sử dụng rộng rãi, tuy vậy không phải ai cũng biết ý nghĩa của chúng.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/images/binh-minh-o-nhat.jpg" alt="">
    <div class="card-body">
      <h4 class="card-title">NHỮNG ĐIỀU THÚ VỊ VỀ NHẬT BẢN CÓ THỂ BẠN CHƯA BIẾT</h4>
      <p class="card-text">Ngoài "đất nước mặt trời mọc", "xứ sở hoa anh đào", Nhật Bản còn được gọi là "xứ Phù Tang" mà ít người biết ý nghĩa của những tên này.
    Nhật Bản là điểm đến nổi tiếng trên thế giới với nền văn hóa đậm bản sắc và ẩm thực độc đáo. Đất nước này có tới ba tên gọi khác nhau vẫn được sử dụng rộng rãi, tuy vậy không phải ai cũng biết ý nghĩa của chúng.</p>
    </div>
</div>
<div class="card">
    <img class="card-img-top" src="assets/images/binh-minh-o-nhat.jpg" alt="">
    <div class="card-body">
      <h4 class="card-title">NHỮNG ĐIỀU THÚ VỊ VỀ NHẬT BẢN CÓ THỂ BẠN CHƯA BIẾT</h4>
      <p class="card-text">Ngoài "đất nước mặt trời mọc", "xứ sở hoa anh đào", Nhật Bản còn được gọi là "xứ Phù Tang" mà ít người biết ý nghĩa của những tên này.
    Nhật Bản là điểm đến nổi tiếng trên thế giới với nền văn hóa đậm bản sắc và ẩm thực độc đáo. Đất nước này có tới ba tên gọi khác nhau vẫn được sử dụng rộng rãi, tuy vậy không phải ai cũng biết ý nghĩa của chúng.</p>
    </div>
  </div>
  </section>
  </div>
</div>

@endsection