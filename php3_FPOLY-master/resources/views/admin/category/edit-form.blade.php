@extends('admin.layouts.main')
@section('title', 'Edit Category')
@section('namePage', 'Edit Category')
@section('main-content')
<form action="" method="POST">
    @csrf
    <div class="row container" style="width: 708px;
    margin-left: auto;
    margin-right: auto;">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name',$cate->name)}}" class="form-control" id="exampleFormControlInput1">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <div class="form-check form-switch mb-3 ml-2">
                <input class="form-check-input"  name="show_menu" type="checkbox" id="flexSwitchCheckDefault" @if($cate->show_menu == 1) checked @endif>
                <label  class="form-check-label" for="flexSwitchCheckDefault">Show Menu</label>
            </div>
        </div>
        <div>
            <button type="submit" style="width:100%;margin-top: 23px;" class="btn btn-primary">Add</button>
        </div>

    </div>
</form>


@endsection