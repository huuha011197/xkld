@extends('admin.home')
@section('content')
<h4> Cập nhật danh mục XKLD</h4>
    <form action="{{route('update_save_category',$category->id)}}" method='post'>
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
        <div class="form-group">
          <label for="">ID</label>
          <input type="text" name="" id="" class="form-control" placeholder="" value='{{$category->id}}' disabled>
        </div>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" value='{{$category->name}}' aria-describedby="helpId" >
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật </button>
    </form>
@endsection