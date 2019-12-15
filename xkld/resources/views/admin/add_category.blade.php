@extends('admin.home')
@section('content')
    <form action="{{route('add_save_category')}}" method='post'>
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
          <input type="text" name="" id="" class="form-control" placeholder="" value='auto' disabled>
        </div>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" >
        </div>
        <button type="submit" class="btn btn-primary">Thêm </button>
    </form>
@endsection