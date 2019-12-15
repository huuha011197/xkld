@extends("pages.marter")
@section('content')
@if($name)
  <h6>{{$name}}</h6>
  <div class="container-fluid">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.225293986018!2d105.77083456549052!3d21.023669586001148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454afa26ec131%3A0xdf38d913fc25d930!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gUXXhu5FjIFThur8gVCZ0IEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1574239371476!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <div class="row" style='margin-top:20px'>
        <div class="col-7">
            <h5>GỬI LIÊN HỆ</h5>
            <P>Để lại thông tin của bạn, chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .</P>
            <form action="{{route('sent_mail')}}" method="Post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                  <input type="text" name="name" id="" class="form-control" placeholder="Tên của bạn" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" id="" class="form-control" placeholder="Số điện thoại" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <input type="text" name="subject" id="" class="form-control" placeholder="Tiêu đề" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" id="" cols="10" placeholder="Nhập nội dung" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
            </form>
        </div>
        <div class="col-5">
            <h5>ĐỊA CHỈ LIÊN HỆ</h5>
            <h4>CÔNG TY CỔ PHẦN QUỐC TẾ T&T HÀ NỘI</h4>
            <p>Đứng đầu về xuất khẩu lao động tại Việt Nam </p>
            <p><i class="fa fa-address" aria-hidden="true"></i> Số nhà 10, ngõ 322/76/40 đường Mỹ Đình, Nam Từ Liêm, Hà Nội</p>
            <p> <i class="fa fa-phone" aria-hidden="true"></i> 024 6253 4802</p>
            <p><i class="fa fa-inbox" aria-hidden="true"></i> @gmail.com</p>
        </div>
    </div>
  </div>
@endif
@endsection