@extends('admin.layouts.main')
@section('title', 'List Categories')
@section('namePage', 'All Categories')
@section('main-content')
<div class="content ">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Categories</div>
                        <div class="d-md-flex gap-4 align-items-center">
                            <form class="mb-3 mb-md-0">
                                <div class="row g-3">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="{{route('category.add')}}" class="btn btn-primary " aria-haspopup="true" aria-expanded="false">Add Category</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Name</th>
                            <th>The number of products</th>
                            <th>Show Menu</th>

                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cates as $c)
                        <tr>
                            <td>{{(($cates->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{count($c->products)}}</td>
                            <td>
                            @if($c->show_menu == 1)
                                <span class="text-success">Yes</span>
                                @else
                                <span class="text-danger">No</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{route('category.remove', ['id' => $c->id])}}" class="dropdown-item"> <i class="fas fa-trash-alt" style="padding-right: 10px;"></i>Delete</a>
                                            <a href="{{route('category.edit', ['id' => $c->id])}}" class="dropdown-item"> <i class="far fa-edit" style="padding-right: 10px;"></i>Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <nav class="mt-4" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{$cates->links()}}
                </ul>
            </nav>
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Filter Categories</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">
                        <div>Filter</div>
                        <div class="bi bi-chevron-down"></div>
                    </div>
                    <form class="collapse show mt-4" method="GET" id="keywordsCollapseExample">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Seach...">
                        </div>
                        <div class="mt-3 t-right" style="float: right">
                            <button type="submit" class="btn btn-outline-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- <fieldset>
    <legend>Tìm Kiếm</legend>
    <form action="" method="GET">
        <label for="">Tên Sản Phẩm</label>
        <input type="text" name="keyword" id="">
        <br>
        <button type="submit">Tìm Kiếm</button>
    </form>
</fieldset>
<table>
    <thead>
        <th>Tên</th>
        <th>Số lượng sản phẩm</th>
        <th>Hành động</th>
    </thead>
    <tbody>
        @foreach($cates as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td>{{count($c->products)}}</td>
            <td>
                <a href="">Sửa</a>
                <a href="{{route('category.remove', ['id' => $c->id])}}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->
@endsection