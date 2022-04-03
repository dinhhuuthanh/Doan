@extends('backend.layouts.master')
@section('content')
    <div class="page-body mt-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Category
                                <small>Multikart Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Physical</li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Add Product</h5>
                        </div>
                        <div class="card-body">
                            <div class="row product-adding">
                                <div class="col-xl-5">
                                    <div class="add-product">
                                        <div class="row">
                                            <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                <img src="{{ asset('img/blog/1.jpg') }}" alt=""
                                                    class="img-fluid image_zoom_1 blur-up lazyloaded">
                                            </div>
                                            <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div class="box-input-file"><input class="upload"
                                                                type="file"><i class="fa fa-plus"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="box-input-file"><input class="upload"
                                                                type="file"><i class="fa fa-plus"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="box-input-file"><input class="upload"
                                                                type="file"><i class="fa fa-plus"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="box-input-file"><input class="upload"
                                                                type="file"><i class="fa fa-plus"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="box-input-file"><input class="upload"
                                                                type="file"><i class="fa fa-plus"></i></div>
                                                    </li>
                                                    <li>
                                                        <div class="box-input-file"><input class="upload"
                                                                type="file"><i class="fa fa-plus"></i></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="file" name="ádasd" id="">
                                    <br>
                                    <input type="file" name="ádasd" id="">
                                </div>
                                <div class="col-xl-7">
                                    <form class="needs-validation add-product-form" novalidate="">
                                        <div class="form">
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title
                                                    :</label>
                                                <div class="col-xl-8 col-sm-7">
                                                    <input class="form-control" id="validationCustom01" type="text"
                                                        required="">
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price
                                                    :</label>
                                                <div class="col-xl-8 col-sm-7">
                                                    <input class="form-control" id="validationCustom02" type="text"
                                                        required="">
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product
                                                    Code :</label>
                                                <div class="col-xl-8 col-sm-7">
                                                    <input class="form-control" id="validationCustomUsername" type="text"
                                                        required="">
                                                </div>
                                                <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid
                                                    Code.</div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustomUsername"
                                                    class="col-xl-3 col-sm-4 mb-0">Category Name: </label>
                                                <div class="col-xl-8 col-sm-7">
                                                    <select class="custom-select form-control"
                                                        aria-label="Default select example" name="category_id">
                                                        <option selected>Select Category Name</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->category_name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="invalid-feedback offset-sm-4 offset-xl-3"></div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustomUsername"
                                                    class="col-xl-3 col-sm-4 mb-0">SubCategory Name: </label>
                                                <div class="col-xl-8 col-sm-7">
                                                    <select class="custom-select form-control" name="subcategory_id"
                                                        aria-label="Default select example">
                                                        <option value="" selected="" disabled="">Select SubCategory Name
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="invalid-feedback offset-sm-4 offset-xl-3"></div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Tag en
                                                    :</label>
                                                <div class="col-xl-8 col-sm-7 controls">
                                                    <div class="controls">
                                                        <input type="text" name="product_tags_en" class="form-control"
                                                            value="lorem, Ipsum, Amet" data-role="tagsinput">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid
                                                    Code.</div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Tag vn
                                                    :</label>
                                                <div class="col-xl-8 col-sm-7 controls">
                                                    <div class="controls">
                                                        <input type="text" name="product_tags_vn" class="form-control"
                                                            value="lorem, Ipsum, Amet" data-role="tagsinput">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid
                                                    Code.</div>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <div class="form-group row">
                                                <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select
                                                    Size :</label>
                                                <div class="col-xl-8 col-sm-7">
                                                    <select class="form-control digits" id="exampleFormControlSelect1">
                                                        <option>Small</option>
                                                        <option>Medium</option>
                                                        <option>Large</option>
                                                        <option>Extra Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>
                                                <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7">
                                                    <div class="input-group">
                                                        <input class="touchspin" type="text" value="1">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-sm-4">Add Description :</label>
                                                <div class="col-xl-8 col-sm-7 description-sm">
                                                    <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offset-xl-3 offset-sm-4">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-light">Discard</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="category_id"]').on('change', function() {
                    var category_id = $(this).val();
                    if (category_id) {
                        $.ajax({
                            url: "{{ url('/admin/category/subcategory/ajax') }}/" + category_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                var d = $('select[name="subcategory_id"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="subcategory_id"]').append(
                                        '<option value="' + value.id + '">' + value
                                        .subcategory_name_en + '</option>');
                                });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });
                $('select[name="subcategory_id"]').on('change', function() {
                    var subcategory_id = $(this).val();
                    if (subcategory_id) {
                        $.ajax({
                            url: "{{ url('/admin/category/subsubcategory/ajax') }}/" +
                                subcategory_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                var d = $('select[name="sub_subcategory_id"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="sub_subcategory_id"]').append(
                                        '<option value="' + value.id + '">' + value
                                        .subsubcategory_name_en + '</option>');
                                });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });
                $(document).ready(function() {
                    $('#multiImg').on('change', function() { //on file input change
                        if (window.File && window.FileReader && window.FileList && window
                            .Blob) //check File API supported browser
                        {
                            var data = $(this)[0].files; //this file data

                            $.each(data, function(index, file) { //loop though each file
                                if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                                        .type)) { //check supported file type
                                    var fRead = new FileReader(); //new filereader
                                    fRead.onload = (function(
                                        file) { //trigger function on successful read
                                        return function(e) {
                                            var img = $('<img/>').addClass('thumb')
                                                .attr('src', e.target.result).width(
                                                    80)
                                                .height(80); //create image element
                                            $('#preview_img').append(
                                                img
                                            ); //append image to output element
                                        };
                                    })(file);
                                    fRead.readAsDataURL(
                                        file); //URL representing the file's data.
                                }
                            });

                        } else {
                            alert("Your browser doesn't support File API!"); //if File API is absent
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
            function mainThumbnailShow(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </div>
@endsection
