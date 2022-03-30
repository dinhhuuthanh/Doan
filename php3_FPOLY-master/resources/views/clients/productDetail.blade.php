@extends('clients.layouts.main')
@section('title','Detail')
@section('main-content')
<!-- Breadcumb area Start -->
<div class="breadcumb-area grey-color">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcumb">
                    <li class="sadia-breadcumb"><a class="sadia-breadcumb-link" href="index-2.html">Home</a></li>
                    <li class="sadia-breadcumb"><a class="sadia-breadcumb-link current" href="single-product.html">Single Product</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="single-products-area ptb--80">
        <!-- Single Product Start -->
        <section class="single-product pb--40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Tab Content Start -->
                        <div class="tab-content product-thumb-large" id="myTabContent-3">
                            <div class="tab-pane fade show active" id="product-large-one">
                                <div class="single-product-img">
                                    <img src="{{asset('storage/' . $product->image)}}" alt="product">
                                    <a href="{{asset('clients/assets/img/fashion/product/1.jpg')}}" class="popup-img-sproduct popup-link">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-two">
                                <div class="single-product-img">
                                    <img src="{{asset('clients/assets/img/fashion/product/3.jpg')}}" alt="product">
                                    <a href="{{asset('clients/assets/img/fashion/product/3.jpg')}}" class="popup-img-sproduct popup-link">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-three">
                                <div class="single-product-img">
                                    <img src="{{asset('clients/assets/img/fashion/product/5.jpg')}}" alt="product">
                                    <a href="{{asset('clients/assets/img/fashion/product/5.jpg')}}" class="popup-img-sproduct popup-link">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-four">
                                <div class="single-product-img">
                                    <img src="{{asset('clients/assets/img/fashion/product/7.jpg')}}" alt="product">
                                    <a href="{{asset('clients/assets/img/fashion/product/7.jpg')}}" class="popup-img-sproduct popup-link">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content End -->

                        
                    </div>
                    <div class="col-lg-7">
                        <!-- Single Product Content Start -->
                        <div class="single-product-content">
                            <p>{{$product->category->name}}</p>
                            <h3 class="product-title">{{$product->name}}</h3>
                            <div class="product-price">
                                <span class="sale-price">&dollar; @if($product->sale > 0) {{$product->sale}}</span><del>&dollar;{{$product->price}}</del> @else{{$product->price}} @endif
                            </div>
                            <hr>
                            <div class="mtb--20">
                                <p><b>Availability:</b> @if($product->quantity > 0)
                                    <span class="text-success">In Stock</span>
                                    @else
                                    <span class="text-danger">Out of Stock</span>
                                    @endif
                                </p>
                                <p><b>Condition:</b> New Product</p>
                                <p><b>Brand:</b> {{$product->category->name}}</p>
                                <p><b>Size:</b> M</p>
                            </div>
                            <hr>
                            
                            <form action="{{route('addCart', ['id'=>$product->id])}}" method="post">
                                @csrf
                                <div class="product-action-wrapper">

                                    <span class="sadia-product-label"><b>QTY: </b></span>
                                    <div class="quantity ml--10">
                                        <input type="number" class="quantity-input" name="quantity" value="1">
                                    </div>
                                    @if($product->quantity == 0)
                                    <button type="submit" disabled class="btn btn-style-4 mb--20">Add to cart</button>
                                    @else
                                    <button type="submit" class="btn btn-style-4 mb--20">Add to cart</button>

                                    @endif
                                </div>
                            </form>

                            <div class="social-share">
                                <span>Share:</span>
                                <ul class="social ml--10">
                                    <li class="social-item"><a href="facebook.html" class="sadia-social-link"><i class="fa fa-facebook social-icon-modal"></i></a></li>
                                    <li class="social-item"><a href="twitter.html" class="sadia-social-link"><i class="fa fa-twitter social-icon-modal"></i></a></li>
                                    <li class="social-item"><a href="plus.google.html" class="sadia-social-link"><i class="fa fa-google-plus social-icon-modal"></i></a></li>
                                    <li class="social-item"><a href="pinterest.html" class="sadia-social-link"><i class="fa fa-pinterest social-icon-modal"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Product Content End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Product End -->

        <!-- Single Product Tab Start -->
        <section class="single-product-tab ptb--80 grey-color">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-product-pills nav nav-tab justify-content-center" id="singleProductTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review Details</a>
                        </div>
                        <div class="single-sadia-ptab-content tab-content">
                            <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                {!!$product->description!!}
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                <div class="review-area">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="review-area">
                                                <h2>3 Reviews Found</h2>
                                                <h4>
                                                    Janice Mcreken
                                                    <span class="ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </span>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab aspernatur nulla, consequatur deserunt quisquam, iste! Nisi nobis eveniet recusandae, minima ea in ipsam culpa repellendus quia explicabo voluptas, vel reiciendis</p><br>
                                                <h4>
                                                    Alex Smith
                                                    <span class="ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                    </span>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab aspernatur nulla, consequatur deserunt quisquam, iste! Nisi nobis eveniet recusandae, minima ea in ipsam culpa repellendus quia explicabo voluptas, vel reiciendis</p><br>
                                                <h4>
                                                    John Doe
                                                    <span class="ratings">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </span>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ab aspernatur nulla, consequatur deserunt quisquam, iste! Nisi nobis eveniet recusandae, minima ea in ipsam culpa repellendus quia explicabo voluptas, vel reiciendis</p><br>
                                                <h2>Write your review</h2>
                                                <div class="your-rating">
                                                    <span>Ratings: </span>
                                                    <span class="ratings">
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </span>
                                                </div>
                                                <form class="review-form">
                                                    <div class="review-sadia-form-group">
                                                        <label for="reviewTitle" class="review-form-label">Title <sup>*</sup></label>
                                                        <input id="reviewTitle" type="text" name="reveiw-title" class="review-sadia-input-form">
                                                    </div>
                                                    <div class="review-sadia-form-group">
                                                        <label for="authorName" class="review-form-label">Name <sup>*</sup></label>
                                                        <input id="authorName" type="text" class="review-sadia-input-form">
                                                    </div>
                                                    <div class="review-sadia-form-group">
                                                        <label for="review" class="review-form-label">Your review <sup>*</sup></label>
                                                        <textarea id="review" class="review-sadia-input-form textarea-review"></textarea>
                                                    </div>
                                                    <div class="review-btn-group">
                                                        <button type="submit" class="btn review-form__btn">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Product Tab End -->

        <!-- Related Product Area Start -->
        <section class="related-product pt--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center custom-title">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="related-product-carousel owl-carousel js-related-product">
                            <!-- Product Box Start -->
                            @foreach($cate_pro as $ct)
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product.detail', ['id'=> $ct->id, 'cate_id'=> $ct->cate_id])}}">
                                        <img class="pic-1" alt="pic1" src="{{asset('storage/'. $ct->image)}}">
                                        <!-- <img class="pic-2" alt="pic2" src="{{asset('clients/assets/img/fashion/product/2.jpg')}}"> -->
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-toggle="modal" data-target="#productModal" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="{{route('product.detail', ['id'=> $ct->id, 'cate_id'=> $ct->cate_id])}}" data-tip="Product Details"><i class="fa fa-link"></i></a></li>
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
                                    <h3 class="title"><a href="{{route('product.detail', ['id'=> $ct->id, 'cate_id'=> $ct->cate_id])}}">{{$ct->name}}</a></h3>
                                    <div class="price">&dollar;@if($ct->sale > 0) {{$ct->sale}} <span>&dollar;{{$ct->price}}</span>
                                        @else
                                        {{$ct->price}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Product Box End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related Product Area End -->
    </div>
</div>
<!-- Main Content Wrapper End -->
@endsection