<?php
if(session()->get('cart') != null){
    $cart = session()->get('cart');
}
else{
    $cart = [];
}

?>
<div class="header-top d-none d-md-block">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <p><i class="fa fa-headphones"></i> 123456789 / 653134567</p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Header Top Nav Start -->
                                <div class="language-currancy d-flex justify-content-md-end justify-content-center">
                                    <div class="top-hdrop">
                                        <div class="dropdown sadia-top-dropdown">
                                            <a class="dropdown-toggle" id="sadia-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Account<i class="fa fa-angle-down"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="sadia-user">
                                                <a class="dropdown-item" href="#">Checkout</a>
                                                <a class="dropdown-item" href="{{route('order.list')}}">Order</a>
                                                <a class="dropdown-item" href="{{route('category.index')}}">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-hdrop">
                                        <div class="dropdown sadia-top-dropdown">
                                            <select class="country_select">
                                                <option value="">Language</option>
                                                <option value="English">English</option>
                                                <option value="French">French</option>
                                                <option value="German">German</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="top-hdrop">
                                        <div class="dropdown sadia-top-dropdown">
                                            <select class="country_select">
                                                <option value="">Currency</option>
                                                <option value="Dollar">&dollar; - Dollar</option>
                                                <option value="Pound">&pound; - Pound</option>
                                                <option value="Euro">&euro; - Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header Top Nav End -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle fixed-header">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-2 col-md-3 col-sm-6 col-6 text-left">
                                <a class="logo-box" href="{{route('home')}}">
                                    <img src="{{asset('clients/assets/img/logo.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-6 col-6 d-none d-md-block">
                                <div class="header-middle-right justify-content-md-end">
                                    <nav class="main-navigation">
                                        <!-- Mainmenu Start -->
                                        <ul class="mainmenu sadia-main-menu">
                                            <li class="sadia-mainmenu-itm menu-item-has-children">
                                                <a href="{{route('home')}}" class="sadia-mainmenu-link">Home</a>
                                            </li>
                                            <li class="sadia-mainmenu-itm menu-item-has-children">
                                                <a href="" class="sadia-mainmenu-link">Categories</a>
                                                <ul class="sub-menu">
                                                    @foreach($cates as $c)
                                                    <li class="menu-item-has-children">
                                                        <a href="{{route('cate.list', ['id' => $c->id])}}">{{$c->name}}</a>
                                                    </li>
                                                    @endforeach       
                                                </ul>
                                            </li>
                                           
                                            <li class="sadia-mainmenu-itm menu-item-has-children">
                                                <a href="{{route('shop')}}" class="sadia-mainmenu-link">Shop</a>
                                            </li>
                                            <li class="sadia-mainmenu-itm menu-item-has-children">
                                                <a href="#" class="sadia-mainmenu-link">Pages</a>
                                            </li>
                                            <li class="sadia-mainmenu-itm menu-item-has-children">
                                                <a href="#" class="sadia-mainmenu-link">Blog</a>
                                            </li>
                                             <li class="sadia-mainmenu-itm">
                                                <a href="#" class="sadia-mainmenu-link">About Us</a>
                                            </li>
                                        </ul>
                                        <!-- Mainmenu End -->
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="header-middle-right justify-content-md-end">
                                    <!-- Header search Start -->
                                    <div class="header-user header-area-user">
                                        <a class="sadia-user-toggle" data-vw-action="open-search-popup">
                                            <i class="fa fa-search header-heart-icon"></i>
                                        </a>
                                    </div>
                                    <div class="vw-search-popup">
                                        <div class="vw-search-popup-wrapper">
                                            <div class="inner">
                                                <form class="clearfix">
                                                    <input type="search" name="search" class="search-field" placeholder="Type Something...">
                                                    <button type="submit" class="search-submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <a href="#" class="vw-search-popup-close" data-vw-action="close-search-popup">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <!-- Header search End -->

                                    <a id="sidebarCollapse">
                                        <i class="fa fa-shopping-cart"></i>
                                        <sup class="cart-badge">{{count($cart)}}</sup>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-menu mobile__menu"></div>
                            </div>
                        </div>
                    </div>
                </div>