<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/PHP3_KHUONGTVPH11115/resources/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Hello, world!</title>
</head>

<body style="overflow-x:hidden;">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <header class="header">
                    <a class="logo">Lumino</a> <span>Admin</span>
                </header>
            </div>
        </div>
        <div class="container-fluid pr-0 pl-0">
            <div class="row">
                <div class="col-md-2 p-0">
                    <div class="navbar" style="width:100%">
                        <div class="user d-flex justify-content-between">
                            <div class="avatar" style="margin-right: 10px;">
                                <img src="https://png.pngtree.com/png-clipart/20200225/original/pngtree-beautiful-admin-roles-glyph-vector-icon-png-image_5267597.jpg" width="50px" height="50px" alt="">
                            </div>
                            <div class="name" style="margin: 10px 0px">
                                <h5>KhuongChuc</h5>
                            </div>
                        </div>
                        <div class="seach mt-5">
                            <input type="text" class="form-control" style="height: 46px;" placeholder="Search">
                        </div>
                        <div class="menu mt-3" style="width: 100%">
                            <ul class="mndung">
                                <li><a href="#"><i class="fas fa-home"></i>Trang Chủ</a></li>
                                <li><a href="{{route('products')}}"><i class="fas fa-align-justify"></i>Products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 p-0">
                    <div class="content">
                        <div class="title">
                            <div class="row">
                                <h1>Thêm Sản Phẩm</h1>
                            </div>
                        </div>
                        <div class="container">
                            <form id="add-product" action="{{route('save-add')}}" class="pt-3" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}   
                            <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tên danh mục</label>
                                            <select id="" class="form-control" name="cate_id">
                                                @foreach($cate as $c)
                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Hình Ảnh</label>
                                            <input type="text" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Giá</label>
                                            <input type="number" name="price" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số lượng</label>
                                            <input type="number" name="quantity" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Trang Thái</label>
                                            <select name="status" class="form-control" id="">
                                                <option value="1">Còn Hàng</option>
                                                <option value="2">Hết hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container pt-5" style="padding-bottom: 180px">
                                        <button type="submit" class="btn btn-outline-success form-control" style="width: 25%;">Thêm Mới</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>