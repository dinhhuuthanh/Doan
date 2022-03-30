@extends('admin.layouts.main')
@section('title', 'List Products')
@section('main-content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Products</div>
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
                            <a href="{{route('product.add')}}" class="btn btn-primary " aria-haspopup="true" aria-expanded="false">Add product</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product_data as $p)
                        <tr>
                            <td>{{(($product_data->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
                            <td>{{$p->name}}</td>
                            <td>
                                <img src="{{asset('storage/' . $p->image)}}" class="rounded" width="40" alt="...">
                            </td>
                            <td>{{$p->category->name}}</td>
                            <td>{{$p->price}}$</td>
                            <td>{{$p->sale}}$</td>
                            <td>{{$p->quantity}}</td>

                            <td>
                                @if($p->quantity > 0)
                                <span class="text-success">In Stock</span>
                                @else
                                <span class="text-danger">Out of Stock</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="d-flex">
                                    
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{route('product.remove', ['id'=> $p->id])}}" class="dropdown-item"> <i class="fas fa-trash-alt" style="padding-right: 10px;"></i>Delete</a>
                                            <a href="{{route('product.edit', ['id'=> $p->id])}}" class="dropdown-item"> <i class="far fa-edit" style="padding-right: 10px;"></i>Edit</a>
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
                    {{$product_data->links()}}
                </ul>
            </nav>
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Filter Products</h5>
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
                        <div class="input-group mt-3">
                            <select class="form-select" name="cate_id">
                                <option value="0">Category</option>
                                @foreach($cates as $c)
                                <option value="{{$c->id}}">{{$c->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mt-3">
                            <select class="form-select" name="order_by">
                                <option value="0">Sort</option>
                                @foreach(config('common.product_order_by') as $k => $val)
                                <option value="{{$k}}">{{$val}} </option>
                                @endforeach
                            </select>
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
<!-- ./ content -->
<!-- <fieldset>
    <legend>Tìm Kiếm</legend>
    <form action="" method="GET">
        <label for="">Tên Sản Phẩm</label>
        <input type="text" name="keyword" id="">
        <br>
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            <option value="">Tất cả</option>
            @foreach($cates as $c)
            <option value="{{$c->id}}">{{$c->name}} </option>
            @endforeach
        </select>
        <br>
        <label for="">Sắp xếp theo</label>
        <select name="order_by" id="">
            <option value="">Mặc định</option>
            @foreach(config('common.product_order_by') as $k => $val)
            <option value="{{$k}}">{{$val}} </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Tìm Kiếm</button>
    </form>
</fieldset> -->

<!-- <script>
$('#delete').click(function(){
     var url = $(this).attr('data-url');
     if(confirm("Bạn có chắc chắn muốn xóa không?????")){
         $.ajax({
             type: 'delete',
             url: url,
             success: function(response) {
                 window.location.reload()
             }
         })
     }

 })
</script> -->
<!-- <table>
    
    <thead>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh</th>
        <th>Danh mục</th>
        <th>Giá </th>
        <th>Số lượng </th>
        <th>
            <a href="{{route('product.add')}}">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($product_data as $p)
        <tr>
            <td>{{(($product_data->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
            <td>{{$p->name}}</td>
            <td>
                <img src="{{asset('storage/' . $p->image)}}" width="50" height="50" alt="">
            </td>
            <td>{{$p->category->name}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->quantity}}</td>
            <td>
                <a href="{{route('product.remove', ['id'=> $p->id])}}">Xóa</a>
                <a href="{{route('product.edit', ['id'=> $p->id])}}">Sửa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->
@endsection