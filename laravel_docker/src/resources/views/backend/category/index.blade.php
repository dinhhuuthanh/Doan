@extends('backend.layouts.master')
@section('content')
    <!-- Page Body Start-->





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
                    @if (session('msg'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                            {{ session('msg') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h5>Products Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="btn-popup pull-right">
                                <a type="button" class="btn btn-primary" href="{{ route('category.create') }}">Add
                                    Category</a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product
                                                </h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">×</span></button>
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Category Image</th>
                                        <th>Category Name EN</th>
                                        <th>Category Name BN</th>
                                        <th><th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($item->category_image) }}" alt=""
                                                    style="width: 70px; height:40px;">
                                            </td>
                                            <td class="sorting_1">{{ $item->category_name_en }}</td>
                                            <td>{{ $item->category_name_vn }}</td>
                                            <td>
                                                <div class="input-group">
                                                    <a href="{{ route('category.edit', $item->id) }}"
                                                        class="btn btn-info" title="Edit Data"><i
                                                            class="fa fa-pencil"></i></a>



                                                    <a href="{{ route('category.destroy', $item->id) }}"
                                                        class="btn btn-danger" title="Delete Data" id="delete"><i
                                                            class="fa fa-trash"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="d-felx float-end m-4">{{ $categories->links() }}
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
