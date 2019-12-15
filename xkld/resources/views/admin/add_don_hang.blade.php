@extends('admin.home')
@section('content')
    <form action="{{route('add_save_don_hang')}}" method='post'>
                @if (\Session::has('success'))
                     <h5 class="alert alert-danger">{!! \Session::get('success') !!}</h5>
                @endif
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
        <div class="row"style='margin-top:20px' >
            <div class="col-6">
            <h5 class='alert alert-success'>Thông tin đơn hàng</h5>
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" value='auto' disabled>
                </div>
                <div class="form-group">
                    <label for="">Tên đơn hàng</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                  <label for="">Thuộc danh mục</label>
                  <select class="form-control" name="danhmuc_id" id="">
                @foreach($danh_muc as $dm)
                    <option value='{{$dm->id}}'>{{$dm->name}}</option>
                @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="so_luong" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                    <label for="">Công việc</label>
                    <input type="text" name="cong_viec" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                    <label for="">Thời gian HD</label>
                    <input type="date" name="thoi_gian_hd" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                    <label for="">Địa điểm làm việc</label>
                    <input type="text" name="dia_diem_lv" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                    <label for="">Mức lương</label>
                    <input type="number" name="muc_luong" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <div class="form-group">
                  <label for="">Quyền lợi</label>
                  <textarea class="form-control" name="quyen_loi" id="" rows="3"></textarea>
                </div>
            </div>
            <div class="col-6">
            <h5 class='alert alert-success'> Dk-tham gia</h5>
                <div class="form-group">
                    <label for="">Giới tính</label>
                    <select class="form-control"  name="gioi_tinh" id="">
                        <option value='0'>Nam</option>
                        <option value='1'>Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Độ tuổi</label>
                    <div class="row">
                        <div class="col-5">
                             <input type="number" name="tu" id="" min='1' max='100' class="form-control" placeholder="" aria-describedby="helpId" >
                        </div>
                        Đến
                        <div class="col-5">
                            <input type="number" name="den" id="" max='100' min='1' class="form-control" placeholder="" aria-describedby="helpId" >
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                    <label for="">Yêu cầu học vấn</label>
                    <select class="form-control"  name="trinh_do_hv" id="">
                        <option value='Tốt nghiệp cấp THCS trở lên'>Tốt nghiệp cấp THCS trở lên</option>
                        <option value='Tốt nghiệp cấp 3 trở lên'>Tốt nghiệp cấp 3 trở lên</option>
                        <option value='Tốt nghiệp cao đẳng, đại học trở lên'>Tốt nghiệp cao đẳng, đại học trở lên</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Yêu cầu kinh nghiệm</label>
                    <select class="form-control"  name="yc_kn" id="">
                        <option value='Không yêu cầu'>Không yêu cầu</option>
                        <option value='Dưới 1 năm'>Dưới 1 năm</option>
                        <option value='Từ 1 đến 3 năm'>Từ 1 đến 3 năm</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">Yêu cầu khác</label>
                  <textarea class="form-control" name="yc_khac" id="" rows="3"></textarea>
                </div>
                <h5 class='alert alert-success'> Lịch thi tuyển</h5>
                <div class="form-group">
                  <label for="">Ngày thi tuyển</label>
                  <input type="date" name="ngay_thi" id="" class="form-control" placeholder="" >
                </div>
                <div class="form-group">
                  <label for="">Lịch bay</label>
                  <div class="row">
                        <div class="col-5">
                             <input type="number" name="tu2" id="" min='1' max='12' class="form-control" placeholder="" aria-describedby="helpId" >
                        </div>
                        Năm
                        <div class="col-5">
                            <input type="number" name="den2" id="" max='3000' min='2000' class="form-control" placeholder="" aria-describedby="helpId" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm </button>
    </form>
@endsection