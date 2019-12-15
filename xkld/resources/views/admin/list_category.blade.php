@extends('admin.home')
@section('content')
<table class="table">
    <h4> Danh mục XKLD</h4>
    <a name="" id="" class="btn btn-primary" href="{{route('add_category')}}" role="button">Thêm mới</a>
    <thead>
    @if (\Session::has('success'))
                     <h5 class="alert alert-danger">{!! \Session::get('success') !!}</h5>
                @endif
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
    @foreach($danh_muc as $dm)
        <tr>
            <td scope="row">{{$dm->id}}</td>
            <td>{{$dm->name}}</td>
            <td><a name="" id="" class="" href="{{route('cagetory_update',$dm->id)}}" role="button">Sửa </a></td>
            <td><a name="" id="" class="" href="{{route('cagetory_delete',$dm->id)}}" role="button">Xóa </a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection