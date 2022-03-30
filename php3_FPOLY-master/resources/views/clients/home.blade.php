
@extends('clients.layouts.main')
@section('title', 'Home')
@section('main-content')

<!-- Slider area Start -->
<div class="slider-area">
    <div class="slider-wrapper owl-carousel" id="homepage-slider">
        <!-- Single Slider Start -->
        <div class="single-slider" style="background-image: url(http://localhost/PHP3_KHUONGTVPH11115/public/clients/assets/img/fashion/slider/fashion1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 offset-lg-3">
                        <div class="slider-content text-center">
                            <p class="heading-primary sadia-heading-primary" data-animation="fadeInDown" data-delay=".2s" data-duration="2s">New Collections 2019</p>
                            <p class="sadia-slider-text" data-animation="fadeInUp" data-delay=".5s" data-duration="2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel natus, explicabo sit nihil harum soluta at cumque magni</p>
                            <a href="#" class="btn slider-btn" data-animation="fadeInUp" data-delay=".7s" data-duration="2s">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slider End -->

        <!-- Single Slider Start -->
        <div class="single-slider" style="background-image: url(http://localhost/PHP3_KHUONGTVPH11115/public/clients/assets/img/fashion/slider/fashion2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 offset-lg-3">
                        <div class="slider-content text-center">
                            <p class="heading-primary sadia-heading-primary" data-animation="fadeInDown" data-delay=".2s" data-duration="2s">New Collections 2019</p>
                            <p class="sadia-slider-text" data-animation="fadeInUp" data-delay=".5s" data-duration="2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel natus, explicabo sit nihil harum soluta at cumque magni</p>
                            <a href="#" class="btn slider-btn" data-animation="fadeInUp" data-delay=".7s" data-duration="2s">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slider End -->

    </div>
</div>
<!-- Slider area End -->

<!-- Latest product area Start -->
<section class="latest-product pt--80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-tab product-tab--2 content-grey-color">
                    <!-- Latest Product Area Start -->
                    <div class="row">
                        <div class="latest-carousel owl-carousel">

                            <!-- Product Box Start -->
                            @foreach($productlatest as $pl)
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md text-md-left text-center mb-md--35">
                                        <figure>
                                            <img src="{{asset('storage/'. $pl->image)}}"   height="586px" alt="Banner">
                                        </figure>
                                    </div>
                                    <div class="col-md">
                                        <div class="text-block">
                                            <h1>{{$pl->name}}</h1>
                                            <h2><del>{{$pl->price}}$</del> <span>{{$pl->sale}}$</span></h2>
                                            <ul class="rating">
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                            </ul>
                                            <p>{!!$pl->description!!}</p>
                                            <a href="{{route('product.detail', ['id'=> $pl->id, 'cate_id'=> $pl->cate_id])}}" class="btn slider-btn mt--10 text-center">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Product Box End -->
                        </div>
                    </div>
                    <!-- Latest Product Area End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest product area End -->

<!-- Featured Product area Start -->
<section class="featured-product-area pt--0 pb--50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-50">
                    <h2> New Collections <i class="fa fa-shopping-cart"></i></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($productNew as $p)
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
                        <div class="price">&dollar;@if($p->sale > 0) {{$p->sale}}$ <span>&dollar;{{$p->price}}$</span>
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
</section>
<!-- Featured Product area End -->

<!-- deal area Start  -->
<div class="sadia-deal-area parallax-area d-none d-md-block">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="overlay"></div>
                <div class="parallax"></div>
                <div class="text-center content-center">
                    <div class="sadia-box-footer">
                        <div class="deal-desc">
                            <h2>Buy one get one</h2>
                            <p class="deal-title">Deal of the week</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officiis itaque consectetur nam qui laborum illo, reiciendis consequuntur recusandae error</p>
                        </div>
                        <a href="#" class="btn slider-btn">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- deal area End  -->

<!-- Tranding area Start -->
<section class="tranding-product pb--80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-50">
                    <h2> Products Sale <i class="fa fa-shopping-cart"></i></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-tab product-tab--2 content-grey-color">
                    <!-- Product Tab Head Start -->
                    
                    <!-- Product Tab Head End -->
                    <div class="border-top">
                        <!-- Product Tab Content Start -->
                        <div class="tab-content sadia-ptab-content" id="pills-tabContent">
                            <div class="tab-pane sadia-tab-pane show active" id="trand3" role="tabpanel" aria-labelledby="trandarial3">

                                <!-- Women Product Area Start -->
                                <div class="row">
                                    <div class="tranding-carousel owl-carousel">
                                        <!-- Product Box Start -->
                                        @foreach($productSale as $ps)
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="{{route('product.detail', ['id'=> $ps->id, 'cate_id'=> $ps->cate_id])}}">
                                                        <img class="pic-1" alt="pic1" src="{{asset('storage/'. $ps->image)}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{route('product.detail', ['id'=> $ps->id, 'cate_id'=> $ps->cate_id])}}" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="{{route('product.detail', ['id'=> $ps->id, 'cate_id'=> $ps->cate_id])}}">{{$ps->name}}</a></h3>
                                                    <div class="price"> {{$ps->sale}}$
                                                        <span>{{$ps->price}}$</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Product Box End -->
                                    </div>
                                </div>
                                <!-- Women Product Area End -->
                            </div>
                            <div class="tab-pane sadia-tab-pane" id="trand2" role="tabpanel" aria-labelledby="trandarial2">

                                <!-- Man Product Area Start -->
                                <div class="row">
                                    <div class="tranding-carousel owl-carousel">
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/15.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/16.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/3.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/4.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/5.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/6.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/7.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/8.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/9.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/10.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/11.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/12.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                    </div>
                                </div>
                                <!-- Man Product Area End -->

                            </div>
                            <div class="tab-pane sadia-tab-pane" id="trand1" role="tabpanel" aria-labelledby="trandarial1">

                                <!-- Kid Product Area Start -->
                                <div class="row">
                                    <div class="tranding-carousel owl-carousel">
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/13.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/14.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/3.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/4.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/5.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/6.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/7.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/8.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/9.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/10.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                        <!-- Product Box Start -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img class="pic-1" alt="pic1" src="{{asset('clients/assets/img/fashion/product/11.jpg')}}">
                                                        <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/12.jpg')}}">
                                                    </a>
                                                    <ul class="social">
                                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                    <span class="product-new-label">Sale</span>
                                                    <span class="product-discount-label">20%</span>
                                                </div>
                                                <ul class="rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title"><a href="#">Women's fashion Tops</a></h3>
                                                    <div class="price">216.00 USD
                                                        <span>200.00 USD</span>
                                                    </div>
                                                    <a class="add-to-cart" href="#">+ Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Box End -->
                                    </div>
                                </div>
                                <!-- kid Product Area End -->

                            </div>
                        </div>
                        <!-- Product Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tranding area End -->





<!-- Blog area Start -->
<section class="blog-area pb--80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-50">
                    <h2>Latest Blog <i class="fa fa-shopping-cart"></i></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel owl-carousel">
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <a href="#" class="sadia-blog-thumb">
                            <img src="{{asset('clients/assets/img/blog/4.jpg')}}" alt="Blog Thumb">
                        </a>
                        <div class="blog-info text-left">
                            <h2>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h2>
                            <h4>By <span>Admin</span> / 30 August 2019</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam eligendi quam adipisci. Itaque necessitatibus dolorum expedita veritatis quibusdam debitis illum!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <a href="#" class="sadia-blog-thumb">
                            <img src="{{asset('clients/assets/img/blog/5.jpg')}}" alt="Blog Thumb">
                        </a>
                        <div class="blog-info text-left">
                            <h2>Phasellus Pellentesque Viverra Metus, Id Euismod Hendrerit</h2>
                            <h4>By <span>John</span> / 30 May 2019</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam eligendi quam adipisci. Itaque necessitatibus dolorum expedita veritatis quibusdam debitis illum!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <a href="#" class="sadia-blog-thumb">
                            <img src="{{asset('clients/assets/img/blog/6.jpg')}}" alt="Blog Thumb">
                        </a>
                        <div class="blog-info text-left">
                            <h2>Nulla Sit Amet Pellentesque Nisl, Non Ultrices Nisl. Vivamus Quis</h2>
                            <h4>By <span>Alex</span> / 30 Jan 2019</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam eligendi quam adipisci. Itaque necessitatibus dolorum expedita veritatis quibusdam debitis illum!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <a href="#" class="sadia-blog-thumb">
                            <img src="{{asset('clients/assets/img/blog/7.jpg')}}" alt="Blog Thumb">
                        </a>
                        <div class="blog-info text-left">
                            <h2>taque necessitatibus dolorum expedita veritatis</h2>
                            <h4>By <span>Admin</span> / 30 August 2019</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam eligendi quam adipisci. Itaque necessitatibus dolorum expedita veritatis quibusdam debitis illum!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog End -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Blog area End -->

<!-- Policy area Start -->
<section class="policy-area grey-color">
    <div class="container">
        <div class="row pt--50 pb--20 policy-box">
            <!-- Method Box Start -->
            <div class="col-md-3 col-lg-3">
                <div class="method-box">
                    <div class="sadia-method-img">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                    <div class="sadia-method-content">
                        <h4>Free Shipping</h4>
                        <p>Free shipping on all US order</p>
                    </div>
                </div>
            </div>
            <!-- Method Box End -->

            <!-- Method Box Start -->
            <div class="col-md-3 col-lg-3">
                <div class="method-box">
                    <div class="sadia-method-img">
                        <i class="fa fa-headphones text-center"></i>
                    </div>
                    <div class="sadia-method-content">
                        <h4>Have question?</h4>
                        <p>Contact us 24 hours a day</p>
                    </div>
                </div>
            </div>
            <!-- Method Box End -->

            <!-- Method Box Start -->
            <div class="col-md-3 col-lg-3">
                <div class="method-box">
                    <div class="sadia-method-img">
                        <i class="fa fa-credit-card text-center"></i>
                    </div>
                    <div class="sadia-method-content">
                        <h4>Money guarantee</h4>
                        <p>30 Days return guarantee</p>
                    </div>
                </div>
            </div>
            <!-- Method Box End -->

            <!-- Method Box Start -->
            <div class="col-md-3 col-lg-3">
                <div class="method-box">
                    <div class="sadia-method-img">
                        <i class="fa fa-dollar text-center"></i>
                    </div>
                    <div class="sadia-method-content">
                        <h4>Payment Secure</h4>
                        <p>We ensure secure payment</p>
                    </div>
                </div>
            </div>
            <!-- Method Box End -->

        </div>
    </div>
</section>
<!-- Policy area End -->
@endsection