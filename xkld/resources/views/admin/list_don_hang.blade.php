@extends('admin.home')
@section('content')
<table class="table">
    <h4> Danh đơn hàng XKLD</h4>
    <a name="" id="" class="btn btn-primary" href="{{route('add_category')}}" role="button">Thêm mới</a>
    <thead>
    @if (\Session::has('success'))
                     <h5 class="alert alert-danger">{!! \Session::get('success') !!}</h5>
                @endif
        <tr>
            <th>Danh mục</th>
            <th>Số lượng</th>
            <th>Xem danh sách</th>
            <th>Xóa tất cả</th>
        </tr>
    </thead>
    <tbody>
    @foreach($product as $key => $value)
        @foreach($danh_muc as $dm)
               @if($key==$dm->id)
        <tr>
            <td scope="row">
          
                   {{$dm->name}}
             
            </td>
            <td>{{Count($value)}}</td>
            <td> <a name="" id="" class="" href="{{$dm->id}}" role="button">Xem </a></td>
            <td> <a name="" id="" class="" href="{{$dm->id}}" role="button">Xóa </a></td>
        </tr>
                @endif
            @endforeach
    @endforeach
    </tbody>
</table>
@endsection