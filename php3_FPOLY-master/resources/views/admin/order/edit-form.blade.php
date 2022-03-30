@extends('admin.layouts.main')
@section('title', 'Edit Invoice')
@section('namePage', 'Edit Invoice')
@section('main-content')
<form action="" method="POST">
    @csrf
    <div class="row container" style="width: 1508px;
    margin-left: auto;
    margin-right: auto;">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name',$invoice->name)}}" class="form-control" id="exampleFormControlInput1">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone',$invoice->phone)}}" class="form-control" id="exampleFormControlInput1">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <select class="form-select" name="status" id="">
                        <option value="1">Waiting</option>
                        <option value="2">Transport</option>
                        <option value="3">Successful</option>
                        <option value="4">Cancel</option>
                    </select>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" name="email" value="{{ old('email',$invoice->email)}}" class="form-control" id="exampleFormControlInput1">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" name="address" value="{{ old('address',$invoice->address)}}" class="form-control" id="exampleFormControlInput1">
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" style="width:100%;margin-top: 23px;" class="btn btn-primary">Add</button>
                </div>

            </div>
        </div>

        <div>
            <div class="form-check form-switch mb-3 ml-2">

            </div>
        </div>

    </div>
</form>


@endsection