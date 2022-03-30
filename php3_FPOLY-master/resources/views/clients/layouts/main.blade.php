<?php
$cart = session()->get('cart');
$total = 0;
if (!empty($cart)) {
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from nahartheme.com/tf/sadia-preview/sadia/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:42:33 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>@yield('title', 'Home')</title>

    <!-- Favicons -->




    <!-- ************************* CSS ************************* -->

    @include('clients.layouts.style')


</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- Main Wrapper Start -->

    <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fa fa-close"></i>
            </div>
            <h3>Cart</h3>

            <div class="list-unstyled components">
                @if(!empty($cart))
                @foreach($cart as $key => $item)
                <div class="header-user-item">
                    <div class="hcart-action">
                        <a href="{{route('cart.remove', ['id'=> $key])}}"> <i class="fa fa-close"></i> </a>
                    </div>
                    <div class="hcart-image">
                        <img src="{{asset('storage/'. $item['image'])}}" alt="product">
                    </div>
                    <div class="hcart-content">
                        <h4><a href="single-product.html">{{$item['name']}}</a></h4>
                        <p>{{$item['quantity']}} X &dollar;{{$item['price']}}</p>
                    </div>
                </div>
                @endforeach
                @else
                <center> <img src="{{asset('clients/assets/img/cart.png')}}" alt="">
                </center>
                @endif
                <ul class="header-user-list">
                    <li class="header-user-single">
                        <span class="header-user-single--title">Subtotal</span>
                        <span class="cart-amount">${{$total}}</span>
                    </li>
                </ul>
                <div class="header-user-btn">
                    <a href="{{route('cart.list')}}" class="btn btn-checkout btn-style-3">Cart</a>
                    <a href="checkout.html" class="btn btn-checkout btn-style-3">Checkout</a>
                </div>
            </div>
        </nav>
        <!-- Sidebar End -->

        <!-- Page Content  -->
        <div id="content">

            <!-- Header area Start -->
            <header class="header">
                @include('clients.layouts.header')
            </header>
            <!-- Header area End -->

            @yield('main-content')

            <!-- Footer top area Start -->
            <div class="footer">
                @include('clients.layouts.footer')
                </footer>
                <!-- footer end -->
            </div>
        </div>

        <!-- Main Wrapper End -->

        <!-- Scroll To Top -->
        <a class="scroll-to-top bounce-animate" href="#"><i class="fa fa-angle-double-up"></i></a>

        <div class="overlay menu-overlay"></div>

        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <div class="tab-content product-thumb-large">
                                    <div id="thumb1" class="tab-pane active show fade">
                                        <img src="{{asset('clients/assets/img/fashion/product/1.jpg')}}" alt="product thumb">
                                    </div>
                                    <div id="thumb2" class="tab-pane fade">
                                        <img src="{{asset('clients/assets/img/fashion/product/3.jpg')}}" alt="product thumb">
                                    </div>
                                    <div id="thumb3" class="tab-pane fade">
                                        <img src="{{asset('clients/assets/img/fashion/product/9.jpg')}}" alt="product thumb">
                                    </div>
                                    <div id="thumb4" class="tab-pane fade">
                                        <img src="{{asset('clients/assets/img/fashion/product/5.jpg')}}" alt="product thumb">
                                    </div>
                                </div>
                                <div class="product-thumbnail">
                                    <div class="thumb-menu owl-carousel" id="thumbmenu">
                                        <div class="thumb-menu-item">
                                            <a href="#thumb1" data-toggle="tab" class="nav-link active">
                                                <img src="{{asset('clients/assets/img/fashion/product/1.jpg')}}" alt="product thumb">
                                            </a>
                                        </div>
                                        <div class="thumb-menu-item">
                                            <a href="#thumb2" data-toggle="tab" class="nav-link">
                                                <img src="{{asset('clients/assets/img/fashion/product/3.jpg')}}" alt="product thumb">
                                            </a>
                                        </div>
                                        <div class="thumb-menu-item">
                                            <a href="#thumb3" data-toggle="tab" class="nav-link">
                                                <img src="{{asset('clients/assets/img/fashion/product/9.jpg')}}" alt="product thumb">
                                            </a>
                                        </div>
                                        <div class="thumb-menu-item">
                                            <a href="#thumb4" data-toggle="tab" class="nav-link">
                                                <img src="{{asset('clients/assets/img/fashion/product/5.jpg')}}" alt="product thumb">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <h3 class="product-title">Lorem ipsum solets</h3>
                                <div class="product-price">
                                    <span class="sale-price">&dollar; 15.00</span>
                                </div>
                                <p class="product-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore adipisci eligendi fuga reiciendis possimus et doloribus, quae explicabo! Dolore tenetur voluptate neque mollitia a hic, enim cumque natus repudiandae sequi? Sunt, ipsam! Temporibus facilis nam aperiam voluptatem ducimus, deserunt adipisci corrupti. Soluta ut asperiores est nihil porro. Obcaecati, velit repellendus.</p>
                                <p><b>Availability:</b> In stock</p>
                                <p><b>Condition:</b> New Product</p>
                                <div class="product-varients">
                                    <div class="sadia-product-size pb--20">
                                        <span class="sadia-product-label"><b>Size: </b></span>
                                        <select class="sadia-product-select ml--40">
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-action-wrapper pb--20">
                                    <span><b>Quantity: </b></span>
                                    <div class="quantity ml--10">
                                        <input type="number" class="quantity-input" name="qty" id="qty" value="1">
                                    </div>
                                </div>
                                <a href="#" class="btn">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ************************* JS ************************* -->

        @include('clients.layouts.script')

</body>

<!-- Mirrored from nahartheme.com/tf/sadia-preview/sadia/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:42:55 GMT -->

</html>