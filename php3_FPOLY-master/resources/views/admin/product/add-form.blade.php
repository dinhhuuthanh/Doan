@extends('admin.layouts.main')
@section('title', 'Add Products')
@section('namePage', 'Add Product')
@section('main-content')
<form action="" class="mb-5" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="exampleFormControlInput1">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="file_upload" type="file" id="formFile">
                @error('file_upload')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category</label>

                <select class="js-example-basic-single" name="cate_id">
                    @foreach($cates as $c)
                    <option value="{{$c->id}}" @if($c->id == old('cate_id')) selected @endif>{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" value="{{old('price')}}" id="exampleFormControlInput2">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Price sale</label>
                <input type="number" name="sale" class="form-control" value="0" id="exampleFormControlInput2">
                
            </div>
        </div>


        <div class="col-md-6">

            <div class="mb-5">
                <label for="exampleFormControlInput3" class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}" id="exampleFormControlInput3">
                @error('quantity')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!-- <div id="editor">
                <p>Here goes the initial content of the editor.</p>
            </div> -->
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" id="editor" class="form-control" cols="30" rows="100">{{old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <script>
                    ClassicEditor.create(document.querySelector('#editor'))
                </script>
            </div>
        </div>
        <div class="row">
            <center> <button type="submit" style="width:50%;margin-top: 23px;" class="btn btn-primary">Add</button>
            </center>
        </div>
    </div>
</form>

<!-- <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Tên sản phầm</label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            @foreach($cates as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>

            @endforeach
        </select>
    </div>
    <div>
        <label for="">Hình ảnh</label>
        <input type="file" name="file_upload" id="">
    </div>
    <div>
        <label for="">Giá</label>
        <input type="number" name="price" id="">
    </div>
    <div>
        <label for="">Số Lượng</label>
        <input type="number" name="quantity" id="">
    </div>
    <div>
        <button type="submit">Thêm</button>
    </div>
</form> -->
@endsection

@section('pagescript')
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/dist/js/examples/select2.js')}}"></script>
<!-- CKEditor -->
<script src="{{asset('admin/libs/ckeditor5/ckeditor.js')}}"></script>

<!-- Examples -->
<script src="{{asset('admin/dist/js/examples/ckeditor.js')}}"></script>
@endsection