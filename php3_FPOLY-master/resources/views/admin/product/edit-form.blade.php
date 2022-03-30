@extends('admin.layouts.main')
@section('title', 'Edit Products')
@section('namePage', 'Edit Product')
@section('main-content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" value="{{old('name', $product->name)}}" class="form-control" id="exampleFormControlInput1">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Price</label>
                <input type="number" name="price" value="{{old('price',$product->price)}}" class="form-control" id="exampleFormControlInput2">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Price sale</label>
                <input type="number" name="sale" value="{{old('sale',$product->sale)}}" class="form-control" id="exampleFormControlInput2">
                @error('price')
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
            <img src="{{asset('storage/' . $product->image)}}" class="rounded" width="60" height="85px" alt="...">
            <button type="submit" style="width:100%;margin-top: 23px;" class="btn btn-primary">Edit</button>

        </div>


        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category</label>

                <select class="js-example-basic-single" name="cate_id">
                    @foreach($cates as $c)
                    <option value="{{$c->id}}" @if($c->id == old('cate_id', $product->cate_id))
                        selected
                        @endif>{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                <label for="exampleFormControlInput3" class="form-label">Quantity</label>
                <input type="number" name="quantity" value="{{old('quantty',$product->quantity)}}" class="form-control" id="exampleFormControlInput3">
                @error('quantity')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" id="editor" class="form-control" cols="30" rows="100">{{old('description', $product->description)}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <script>
                    ClassicEditor.create(document.querySelector('#editor'))
                </script>
            </div>
        </div>
    </div>
</form>

@endsection

@section('pagescript')
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/dist/js/examples/select2.js')}}"></script>
<script src="{{asset('admin/libs/ckeditor5/ckeditor.js')}}"></script>

<!-- Examples -->
<script src="{{asset('admin/dist/js/examples/ckeditor.js')}}"></script>
@endsection

<!-- <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Tên sản phầm</label>
        <input type="text" name="name" value="{{$product->name}}" id="">
    </div>
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            @foreach($cates as $c)
            <option value="{{$c->id}}" @if($product->cate_id == $c->id) selected @endif>{{$c->name}}</option>

            @endforeach
        </select>
    </div>
    <div>
        <label for="">Hình ảnh</label>
        <input type="file" name="file_upload" id="">
    </div>
    <div>
        <label for="">Giá</label>
        <input type="number" name="price" value="{{$product->price}}" id="">
    </div>
    <div>
        <label for="">Số Lượng</label>
        <input type="number" name="quantity" value="{{$product->quantity}}" id="">
    </div>
    <div>
        <button type="submit">Thêm</button>
    </div>
</form> -->