@extends('clients.layouts.main')
@section('title','Shop')
@section('main-content')
<!-- Breadcumb area Start -->
<div class="breadcumb-area grey-color">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcumb">
                    <li class="sadia-breadcumb"><a class="sadia-breadcumb-link" href="index-2.html">Home</a></li>
                    <li class="sadia-breadcumb"><a class="sadia-breadcumb-link current" href="shop.html">Shop</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main content wrapper Start -->
<div class="main-content-wrapper">
    <div class="shop-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-toolbar d-flex flex-md-row flex-column justify-content-between align-items-md-center">
                        <div class="sadia-shop-grid-list">

                        </div>
                        <div class="sadia-short">
                            <label>Short By:</label>
                            <select class="short-select">
                                <option value="1">Position</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                    <!-- Shop Layout Start -->
                    <div class="main-shop-wrapper">
                        <div class="tab-content" id="myTabContent-2">
                            <div class="tab-pane show active" id="grid">
                                <div class="product-grid-view">
                                    <div class="row">
                                        @foreach($products as $p)
                                        <div class="col-md-6 col-lg-3">
                                            <!-- Product Box Start -->
                                            <div class="product-grid mb--30">
                                                <div class="product-image">
                                                    <a href="{{route('product.detail', ['id'=> $p->id, 'cate_id'=> $p->cate_id])}}">
                                                        <img class="pic-1" alt="pic1" style=" width: 247px;height: 356px;object-fit: cover;object-fit: contain;" src="{{asset('storage/' . $p->image)}}">
                                                        <!-- <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/2.jpg')}}"> -->
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{route('product.detail', ['id'=> $p->id, 'cate_id'=> $p->cate_id])}}" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>

                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="{{route('product.detail', ['id'=> $p->id, 'cate_id'=> $p->cate_id])}}">{{$p->name}}</a></h3>
                                                    <div class="price">&dollar;@if($p->sale > 0) {{$p->sale}} <span>&dollar;{{$p->price}}</span>
                                                        @else
                                                        {{$p->price}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Box End -->
                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="list">
                                <div class="product-list-view">
                                    <div class="product-box product-box--list">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="sadia-box-image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/3.jpg')}}" alt="product image" class="primary_image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/4.jpg')}}" alt="product image" class="secondary_image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="sadia-box-desc">
                                                    <a href="single-product.html" class="sadia-box-title">Blue Shirt</a>
                                                    <p class="sadia-box-price">
                                                        <span class="sale-price">&dollar;15.00</span>
                                                        <span class="regular-price">&dollar;23.00</span>
                                                    </p>
                                                    <p class="sadia-box-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis distinctio, recusandae sed, dolore perspiciatis, eaque ex ad itaque esse odio ab magni! Impedit molestias dicta aliquid ipsum accusantium repellendus aut!</p>
                                                    <a href="cart.html" class="btn add-to-cart btn-style-2"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box product-box--list">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="sadia-box-image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/5.jpg')}}" alt="product image" class="primary_image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/6.jpg')}}" alt="product image" class="secondary_image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="sadia-box-desc">
                                                    <a href="single-product.html" class="sadia-box-title">Blue Shirt</a>
                                                    <p class="sadia-box-price">
                                                        <span class="sale-price">&dollar;15.00</span>
                                                        <span class="regular-price">&dollar;23.00</span>
                                                    </p>
                                                    <p class="sadia-box-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis distinctio, recusandae sed, dolore perspiciatis, eaque ex ad itaque esse odio ab magni! Impedit molestias dicta aliquid ipsum accusantium repellendus aut!</p>
                                                    <a href="cart.html" class="btn add-to-cart btn-style-2"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box product-box--list">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="sadia-box-image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/7.jpg')}}" alt="product image" class="primary_image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/8.jpg')}}" alt="product image" class="secondary_image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="sadia-box-desc">
                                                    <a href="single-product.html" class="sadia-box-title">Blue Shirt</a>
                                                    <p class="sadia-box-price">
                                                        <span class="sale-price">&dollar;15.00</span>
                                                        <span class="regular-price">&dollar;23.00</span>
                                                    </p>
                                                    <p class="sadia-box-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis distinctio, recusandae sed, dolore perspiciatis, eaque ex ad itaque esse odio ab magni! Impedit molestias dicta aliquid ipsum accusantium repellendus aut!</p>
                                                    <a href="cart.html" class="btn add-to-cart btn-style-2"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box product-box--list">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="sadia-box-image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/9.jpg')}}" alt="product image" class="primary_image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/10.jpg')}}" alt="product image" class="secondary_image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="sadia-box-desc">
                                                    <a href="single-product.html" class="sadia-box-title">Blue Shirt</a>
                                                    <p class="sadia-box-price">
                                                        <span class="sale-price">&dollar;15.00</span>
                                                        <span class="regular-price">&dollar;23.00</span>
                                                    </p>
                                                    <p class="sadia-box-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis distinctio, recusandae sed, dolore perspiciatis, eaque ex ad itaque esse odio ab magni! Impedit molestias dicta aliquid ipsum accusantium repellendus aut!</p>
                                                    <a href="cart.html" class="btn add-to-cart btn-style-2"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box product-box--list">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="sadia-box-image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/11.jpg')}}" alt="product image" class="primary_image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/12.jpg')}}" alt="product image" class="secondary_image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="sadia-box-desc">
                                                    <a href="single-product.html" class="sadia-box-title">Blue Shirt</a>
                                                    <p class="sadia-box-price">
                                                        <span class="sale-price">&dollar;15.00</span>
                                                        <span class="regular-price">&dollar;23.00</span>
                                                    </p>
                                                    <p class="sadia-box-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis distinctio, recusandae sed, dolore perspiciatis, eaque ex ad itaque esse odio ab magni! Impedit molestias dicta aliquid ipsum accusantium repellendus aut!</p>
                                                    <a href="cart.html" class="btn add-to-cart btn-style-2"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box product-box--list">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="sadia-box-image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/13.jpg')}}" alt="product image" class="primary_image">
                                                    <img src="{{asset('clients/assets/img/fashion/product/14.jpg')}}" alt="product image" class="secondary_image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="sadia-box-desc">
                                                    <a href="single-product.html" class="sadia-box-title">Blue Shirt</a>
                                                    <p class="sadia-box-price">
                                                        <span class="sale-price">&dollar;15.00</span>
                                                        <span class="regular-price">&dollar;23.00</span>
                                                    </p>
                                                    <p class="sadia-box-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veritatis distinctio, recusandae sed, dolore perspiciatis, eaque ex ad itaque esse odio ab magni! Impedit molestias dicta aliquid ipsum accusantium repellendus aut!</p>
                                                    <a href="cart.html" class="btn add-to-cart btn-style-2"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-md--30">
                            <div class="col-12 text-center">
                                <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Layout End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main content wrapper End -->
@endsection