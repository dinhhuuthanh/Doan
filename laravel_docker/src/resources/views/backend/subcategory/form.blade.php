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
                            <h5>Products Category</h5>
                            <div class="btn-popup pull-right">
                                <a type="button" class="btn btn-primary" href="{{ route('category.index') }}">Back to
                                    List</a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product
                                                </h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">??</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation">
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <label for="validationCustom01" class="mb-1">Category
                                                                Name :</label>
                                                            <input class="form-control" id="validationCustom01"
                                                                type="text">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="validationCustom02" class="mb-1">Category
                                                                Image :</label>
                                                            <input class="form-control" id="validationCustom02"
                                                                type="file">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button">Save</button>
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="staticCategory" class="col-sm-2 col-form-label">SubCategory Name EN <span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-5">
                                        <input type="text"
                                            value="{{ isset($subcategory) ? $subcategory->subcategory_name_en : '' }}"
                                            name="subcategory_name_en" class="form-control" id="static">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticCategory" class="col-sm-2 col-form-label">SubCategory Name VN <span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-5 ml-2">
                                        <input type="text"
                                            value="{{ isset($subcategory) ? $subcategory->subcategory_name_vn : '' }}"
                                            name="subcategory_name_vn" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group row" style="margin-left: -10px">
                                    <label for="subcategory_name" class="col-sm-2 col-form-label">Category Name<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-5">
                                        <select class="custom-select  form-control" aria-label="Default select example"
                                            name="category_id">
                                            <option selected>Select Category Name</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center pt-5">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
