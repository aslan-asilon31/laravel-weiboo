@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable1.css') . '" />';
$header='flase';
$script='<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';   
@endphp

@section('content')

<header id="rtsHeader">
    <div class="header-topbar header-topbar1">
        <div class="container">
            <div class="header-top-area">
                <div class="slider-div">
                    <div class="swiper rts-topSlide1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover
                                        Now</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Enjoy free shipping on orders 100$ up<a href="#">Discover
                                        Now</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover
                                        Now</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text"> Enjoy free shipping on orders 100$ up<a href="#">Discover
                                        Now</a></h3>
                            </div>
                        </div>
                        <div class="slider-navigation2">
                            <div class="swiper-button-prev slider-btn prev"><i class="rt rt-arrow-left-long"></i></div>
                            <div class="swiper-button-next slider-btn next"><i class="rt rt-arrow-right-long"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-topbar-menu-area">
        <div class="container">
            <div class="menu-area1">
                <div class="menu-item">
                    <nav class="nav navbar">
                        <div class="navbar-menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Whishlist</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-area-right-side">
                    <div class="contact"><i aria-hidden="true" class="fas fa-phone"></i>Need help? <strong>Call us:
                            <a href="call:0020500">+ 0020 500</a></strong></div>
                    <div class="topbar-select-area">
                        <select class="topbar-select custom-select">
                            <option value="eng">English</option>
                            <option value="esp">Español</option>
                            <option value="ban">Bangla</option>
                        </select>
                        <select class="topbar-select custom-select2">
                            <option value="usd">USD</option>
                            <option value="eur">Euro</option>
                            <option value="tk">Taka</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-sticky">
        <div class="container">
            <div class="navbar-part navbar-part1">
                <div class="navbar-inner">
                    <div class="left-side">
                        <div class="hamburger-1">
                            <a href="#" class="nav-menu-link">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                                <span class="dot5"></span>
                                <span class="dot6"></span>
                                <span class="dot7"></span>
                                <span class="dot8"></span>
                                <span class="dot9"></span>
                            </a>
                        </div>
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo1.svg') }}" alt="weiboo-logo"></a>
                    </div>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link active" href="{{ route('index') }}">Main
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexTwo') }}">Fashion
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexNine') }}">Fashion
                                                Home Two</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexThree') }}">Furniture
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexFour') }}">Decor
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexFive') }}">Electronics
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexSix') }}">Grocery
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexSeven') }}">Footwear
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexEight') }}">Gaming
                                                Home</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('indexTen') }}">Sunglass
                                                Home</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="#">Shop <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('shop') }}">Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('sidebarLeft') }}">Left Sidebar Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('sidebarRight') }}">Right Sidebar Shop</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('fullWidthShop') }}">Full Width Shop</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('productDetails') }}">Single Product Layout One</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('productDetails2') }}">Single Product Layout Two</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('variableProducts') }}">Variable
                                                        Product</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('groupedProducts') }}">Grouped
                                                        Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown-li last-child">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('cart') }}">Cart</a>
                                                </li>

                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('checkOut') }}">Checkout</a>
                                                </li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="{{ route('account') }}">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="#">Pages <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('faq') }}">FAQ's</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('errorPage') }}">Error
                                                404</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-dropdown"><a class="menu-item" href="#">Blog <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul">
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('news') }}">Blog</a>
                                        </li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('newsGrid') }}">Blog Grid</a></li>
                                        <li class="dropdown-li"><a class="dropdown-link" href="{{ route('newsDetails') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="responsive-hamburger">
                        <div class="hamburger-1">
                            <a href="#" class="nav-menu-link">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                                <span class="dot5"></span>
                                <span class="dot6"></span>
                                <span class="dot7"></span>
                                <span class="dot8"></span>
                                <span class="dot9"></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="input-div">
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon"><a href="#0"><i aria-hidden="true" class="fas fa-shopping-basket"></i></a><span class="wishlist-dot icon-dot">3</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Parachute Jacket</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image2.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Narrow Trouser</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image5.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Bellyless Hoodie</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="{{ route('checkOut') }}" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="{{ route('cart') }}" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <a class="hamburger-1 mobile-hamburger-1 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
        </div>
        <!-- offset-sidebar start -->
        <div class="offset-sidebar-main">
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <img src="{{ asset('assets/images/logo1.svg') }}" alt="">
                    <p class="mb-30">
                        We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                    </p>
                </div>
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Get In Touch </h4>
                    <ul>
                        <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a></li>
                        <li class="info email"><a href="email:info@webmail.com">info@webmail.com</a></li>
                        <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                        <li class="info location">13/A, New Pro State, NYC</li>
                    </ul>
                    <div class="offset-social-link">
                        <h4 class="offset-title mb-20">Follow Us </h4>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu side-mobile-menu1">
            <ul id="mobile-menu-active">
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="{{ route('index') }}">Home <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('index') }}">Main Home</a></li>
                        <li><a href="{{ route('indexTwo') }}">Fashion Home</a></li>
                        <li><a href="{{ route('indexNine') }}">Fashion Home Two</a></li>
                        <li><a href="{{ route('indexThree') }}">Furniture Home</a></li>
                        <li><a href="{{ route('indexFour') }}">Decor Home</a></li>
                        <li><a href="{{ route('indexFive') }}">Electronics Home</a></li>
                        <li><a href="{{ route('indexSix') }}">Grocery Home</a></li>
                        <li><a href="{{ route('indexSeven') }}">Footwear Home</a></li>
                        <li><a href="{{ route('indexEight') }}">Gaming Home</a></li>
                        <li><a href="{{ route('indexTen') }}">Sunglass Home</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="{{ route('shop') }}">Shop <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('shop') }}">Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarLeft') }}">Left Sidebar
                                        Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarRight') }}">Right Sidebar
                                        Shop</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('fullWidthShop') }}">Full
                                        Width Shop</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails') }}">Single Product
                                        Layout
                                        One</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails2') }}">Single Product Layout
                                        Two</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('variableProducts') }}">Variable Product</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('groupedProducts') }}">Grouped Product</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('cart') }}">Cart
                                    </a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('checkOut') }}">Checkout</a>
                                </li>
                                <li class="dropdown-li"><a class="dropdown-link" href="{{ route('account') }}">My
                                        Account</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="{{ route('index') }}">Pages <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('faq') }}">FAQ's</a></li>
                        <li><a href="{{ route('errorPage') }}">Error 404</a></li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="{{ route('news') }}">Blog <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('news') }}">Blog</a></li>
                        <li><a href="{{ route('newsGrid') }}">Blog Grid</a></li>
                        <li><a href="{{ route('newsDetails') }}">Blog Details</a></li>
                    </ul>
                </li>
                <li><a class="mm-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div class="header-action-items header-action-items1 header-action-items-side">
            <div class="search-part">
                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                <div class="search-input-area">
                    <div class="container">
                        <div class="search-input-inner">
                            <select id="custom-select">
                                <option value="hide">All Catagory</option>
                                <option value="all">All</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="shoes">Shoes</option>
                                <option value="shoes">Glasses</option>
                                <option value="shoes">Bags</option>
                                <option value="shoes">Assesories</option>
                            </select>
                            <div class="input-div">
                                <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                <input class="search-input" type="text" placeholder="Search by keyword or #">
                            </div>
                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart action-item">
                <div class="cart-nav">
                    <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                    </div>
                </div>
            </div>
            <div class="wishlist action-item">
                <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                </div>
            </div>
            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
        </div>
        <!-- side-mobile-menu end -->
    </aside>
    <!--================= Banner Section Start Here =================-->
    <div class="banner banner-1 bg-image">
        <div class="container">
            <div class="banner-inner">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-12 gutter-1">
                        <div class="catagory-sidebar">
                            <div class="widget-bg">
                                <h2 class="widget-title">All Categories <i class="rt-angle-down"></i></h2>
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('shop') }}">Activewear <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Bikinis <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Dresses <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Jumpsuits <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Smart Dress <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Sneakers <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Sweetshirts <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Trousers <i class="rt rt-arrow-right-long"></i></a></li>
                                        <li><a href="{{ route('shop') }}">Furniture <i class="rt rt-arrow-right-long"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-md-8 col-sm-12 gutter-2">
                        <div class="swiper bannerSlide2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-1">
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <p class="slider-subtitle"><img src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt=""> Spring
                                                        summer 22 women’s collection </p>
                                                    <h2 class="slider-title"> HOT COLLECTION <br> FOR WOMEN</h2>
                                                    <div class="slider-description">
                                                        <p>Easy & safe payment with PayPal. sequines & embroidered
                                                            for all</p>
                                                    </div>
                                                    <a href="{{ route('shop') }}" class="slider-btn2">View Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-3">
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <p class="slider-subtitle"><img src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt=""> Spring
                                                        summer 22 women’s collection </p>
                                                    <h2 class="slider-title"> NEW COLLECTION <br> FOR WOMEN</h2>
                                                    <div class="slider-description">
                                                        <p>Easy & safe payment with PayPal. sequines & embroidered
                                                            for all</p>
                                                    </div>
                                                    <a href="{{ route('shop') }}" class="slider-btn2">View Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-4">
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <p class="slider-subtitle"><img src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt=""> Spring
                                                        summer 22 women’s collection </p>
                                                    <h2 class="slider-title"> WINTER DRESS <br> FOR WOMEN</h2>
                                                    <div class="slider-description">
                                                        <p>Easy & safe payment with PayPal. sequines & embroidered
                                                            for all</p>
                                                    </div>
                                                    <a href="{{ route('shop') }}" class="slider-btn2">View Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-navigation">
                                <div class="swiper-button-prev slider-btn prev"><i class="rt rt-arrow-left-long"></i></div>
                                <div class="swiper-button-next slider-btn next"><i class="rt rt-arrow-right-long"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
</header>

<!-- ..::Offer Section Start Here::.. -->
<div class="rts-offer-section">
    <div class="container">
        <div class="rts-offer-inner">
            <p class="description">Super discount for your 100$ purchase. Use this code <a href="{{ route('shop') }}">OFFER100</a>
            </p>
        </div>
    </div>
</div>
<!-- ..::Offer Section End Here::.. -->

<!-- ..::New Collection Section Start Here::.. -->
<div class="rts-new-collection-section section-gap">
    <div class="container">
        <div class="recent-products-header section-header">
        </div>
        <div class="swiper rts-cmmnSlider-over" data-swiper="pagination">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="collection-item">
                        <a href="{{ route('category') }}"><img src="{{ asset('assets/images/catagory/item-1.png') }}" alt="collection-image">
                        </a>
                        <p class="item-quantity">20 <span>items</span></p>
                        <a href="{{ route('category') }}" class="item-catagory-box">
                            <h3 class="title">FOR WOMEN'S</h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="collection-item">
                        <a href="{{ route('category') }}"><img src="{{ asset('assets/images/catagory/item-2.png') }}" alt="collection-image">
                        </a>
                        <p class="item-quantity">33 <span>items</span></p>
                        <a href="{{ route('category') }}" class="item-catagory-box">
                            <h3 class="title">FOR MAN'S</h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="collection-item">
                        <a href="{{ route('category') }}"><img src="{{ asset('assets/images/catagory/item-3.png') }}" alt="collection-image">
                        </a>
                        <p class="item-quantity">25 <span>items</span></p>
                        <a href="{{ route('category') }}" class="item-catagory-box">
                            <h3 class="title">FOR KIDS</h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="collection-item">
                        <a href="{{ route('category') }}"><img src="{{ asset('assets/images/catagory/item-4.png') }}" alt="collection-image">
                        </a>
                        <p class="item-quantity">33 <span>items</span></p>
                        <a href="{{ route('category') }}" class="item-catagory-box">
                            <h3 class="title">ACCESORIES</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::New Collection Section End Here::.. -->

<!-- ..::Hand Picked Section Start Here::.. -->
<div class="rts-hand-picked-products-section">
    <div class="container">
        <div class="section-header section-header3 text-center">
            <div class="wrapper">
                <div class="sub-content">
                    <img class="line-1" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                    <span class="sub-text">Featured</span>
                    <img class="line-2" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                </div>
                <h2 class="title">HAND-PICKED PRODUCT</h2>
            </div>
        </div>
        <div class="slider-div">
            <div class="swiper rts-sixSlide-over">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img8.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img8_1.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Underarm Smoothing Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img11.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img11_1.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Bali Underwire Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img1.jpg') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img1-1.jpg') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Bali Underwire Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img13.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img13-1.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Bali Underwire Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img7.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img7_1.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Maidenform Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="discount-tag product-tag">-38%</div>
                                <div class="new-tag product-tag">HOT</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img9.webp') }}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img9_1.webp') }}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Champion Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Hand Picked Section End Here::.. -->

<!-- ..::Deal Section Start Here::.. -->
<div class="rts-deal-section1">
    <div class="container">
        <div class="section-inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="single-inner">
                        <div class="content-box">
                            <div class="sub-content">
                                <img class="line-1" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                <span class="sub-text">Deal Of The Week</span>
                            </div>
                            <h2 class="slider-title">Roland Grand White <br> short T-shirt </h2>
                            <div class="slider-description">
                                <p>Our intent and our actions have always been informed by progress. We
                                    look at an impact report as a way to measure.</p>
                            </div>
                            <div class="countdown" id="countdown">
                                <ul>
                                    <li><span id="days"></span>D</li>
                                    <li><span id="hours"></span>H</li>
                                    <li><span id="minutes"></span>M</li>
                                    <li><span id="seconds"></span>S</li>
                                </ul>
                            </div>
                            <div class="content-bottom">
                                <div class="img-box"><img src="{{ asset('assets/images/hand-picked/deal-icon.png') }}" alt="">
                                </div>
                                <p class="content">Limited time offer. The deal will expires <br>
                                    on November 12, 2024 HURRY UP!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Deal Section End Here::.. -->

<!-- ..::Featured Product Section Start Here::.. -->
<div class="rts-featured-product-section1">
    <div class="container">
        <div class="rts-featured-product-section-inner">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                        <span class="sub-text">Featured</span>
                        <img class="line-2" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                    </div>
                    <h2 class="title">FEATURED PRODUCT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="product-item element-item1">
                        <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                            <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img13-1.webp') }}" alt="product-image">
                            </div>
                            <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img13.webp') }}" alt="product-image">
                            </div>
                        </a>
                        <div class="bottom-content">
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="{{ route('productDetails') }}" class="product-name">Girl's Sport Bra</a>
                            <div class="action-wrap">
                                <span class="price">$31.00</span>
                            </div>
                        </div>
                        <div class="quick-action-button">
                            <div class="cta-single cta-plus">
                                <a href="#"><i class="rt-plus"></i></a>
                            </div>
                            <div class="cta-single cta-quickview">
                                <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="cta-single cta-wishlist">
                                <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="cta-single cta-addtocart">
                                <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="product-item element-item1">
                        <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                            <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img14.webp') }}" alt="product-image">
                            </div>
                            <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img14-1.webp') }}" alt="product-image">
                            </div>
                        </a>
                        <div class="bottom-content">
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="{{ route('productDetails') }}" class="product-name">Girl's Sport Bra</a>
                            <div class="action-wrap">
                                <span class="price">$31.00</span>
                            </div>
                        </div>
                        <div class="quick-action-button">
                            <div class="cta-single cta-plus">
                                <a href="#"><i class="rt-plus"></i></a>
                            </div>
                            <div class="cta-single cta-quickview">
                                <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="cta-single cta-wishlist">
                                <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="cta-single cta-addtocart">
                                <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="product-item element-item2">
                        <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                            <div class="swiper productSlide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img12-1.webp') }}" alt="product-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img11_1.webp') }}" alt="product-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-buttons">
                                <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i></div>
                                <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i></div>
                            </div>
                        </a>
                        <div class="bottom-content">
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="{{ route('productDetails') }}" class="product-name">Maidenform Bra</a>
                            <div class="action-wrap">
                                <span class="price">$31.00</span>
                            </div>
                        </div>
                        <div class="quick-action-button">
                            <div class="cta-single cta-plus">
                                <a href="#"><i class="rt-plus"></i></a>
                            </div>
                            <div class="cta-single cta-quickview">
                                <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="cta-single cta-wishlist">
                                <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="cta-single cta-addtocart">
                                <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="product-item element-item1">
                        <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                            <div class="image-vari1 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img12.webp') }}" alt="product-image">
                            </div>
                            <div class="image-vari2 image-vari"><img src="{{ asset('assets/images/hand-picked/slider-img12-3.webp') }}" alt="product-image">
                            </div>
                        </a>
                        <div class="bottom-content">
                            <div class="star-rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <a href="{{ route('productDetails') }}" class="product-name">Hanes Women's Bra</a>
                            <div class="action-wrap">
                                <span class="price">$31.00</span>
                            </div>
                        </div>
                        <div class="quick-action-button">
                            <div class="cta-single cta-plus">
                                <a href="#"><i class="rt-plus"></i></a>
                            </div>
                            <div class="cta-single cta-quickview">
                                <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="cta-single cta-wishlist">
                                <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="cta-single cta-addtocart">
                                <a href="{{ route('cart') }}"><i class="rt-basket-shopping"></i></a>
                            </div>
                        </div>
                        <div class="product-features">
                            <div class="discount-tag product-tag">-38%</div>
                            <div class="new-tag product-tag">HOT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Featured Product Section End Here::.. -->

<!-- ..::Posters Section Start Here::.. -->
<div class="rts-posters-section1">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium5">
                    <div class="contents">
                        <span class="pretitle">50% Offer</span>
                        <h1 class="product-title">Last call for up <br> to 30% off</h1>
                        <div class="view-collections go-btn">VIEW COLLECTIONS <i class="rt-arrow-right-long"></i>
                        </div>
                    </div>
                    <div class="product-thumb"><img src="{{ asset('assets/images/featured/pot.png') }}" alt="product-thumb">
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-12 col-sm-12 col-12 last-child">
                <a href="{{ route('productDetails') }}" class="product-box product-box-medium mid">
                    <div class="contents">
                        <span class="pretitle">-45% Offer</span>
                        <h1 class="product-title">SUMMER COLLECTION</h1>
                        <p>Don't miss the last opportunity</p>
                    </div>
                    <div class="product-thumb product-thumb1"><img src="{{ asset('assets/images/products/dress.png') }}" alt="product-thumb"></div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium3">
                    <div class="contents">
                        <span class="pretitle">SUMMER DRESS</span>
                        <h1 class="product-title">BEST COLLECTION</h1>
                        <div class="view-collections go-btn">Shop Now <i class="rt-arrow-right-long"></i></div>
                    </div>
                    <div class="product-thumb"><img src="{{ asset('assets/images/featured/3rd-image.png') }}" alt="product-thumb"></div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ..::Posters Section End Here::.. -->

<!-- ..::Brand Section Start Here::.. -->
<div class="rts-brands-section1 brand-bg3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="slider-div">
                    <div class="swiper rts-brandSlide1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-01.png') }}" alt="Brand Logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-02.png') }}" alt="Brand Logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-03.png') }}" alt="Brand Logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-04.png') }}" alt="Brand Logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-05.png') }}" alt="Brand Logo"></a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-06.png') }}" alt="Brand Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Brand Section End Here::.. -->

<!-- ..::Featured Product Section Start Here::.. -->
<div class="rts-featured-product-section3">
    <div class="container">
        <div class="rts-featured-product-section-inner">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                        <span class="sub-text">Featured</span>
                        <img class="line-2" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                    </div>
                    <h2 class="title">FEATURED PRODUCT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="full-wrapper wrapper-1">
                        <div class="image-part">
                            <a href="#" class="image"><img src="{{ asset('assets/images/featured/img-1.jpg') }}" alt="Featured Image"></a>
                        </div>
                        <div class="blog-content">
                            <span class="date-full">
                                <span class="day">25</span>
                                <br>
                                <span class="month">Jul</span>
                            </span>
                            <ul class="blog-meta">
                                <li><a href="#">WINTER DRESS</a></li>
                            </ul>
                            <div class="title">
                                <a href="#">Once that’s determined with a good, you need to come up with a name</a>
                            </div>
                            <div class="author-info d-flex align-items-center">
                                <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image"></div>
                                <div class="info">
                                    <p class="author-name">PixcelsThemes</p>
                                    <p class="author-dsg">Author</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="full-wrapper wrapper-2">
                        <div class="image-part">
                            <a href="#" class="image"><img src="{{ asset('assets/images/featured/img-2.jpg') }}" alt="Featured Image"></a>
                        </div>
                        <div class="blog-content">
                            <span class="date-full">
                                <span class="day">25</span>
                                <br>
                                <span class="month">Jul</span>
                            </span>
                            <ul class="blog-meta">
                                <li><a href="#">WINTER DRESS</a></li>
                            </ul>
                            <div class="title">
                                <a href="#">Once determined, you need to come up with a name a legal structure</a>
                            </div>
                            <div class="author-info d-flex align-items-center">
                                <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image"></div>
                                <div class="info">
                                    <p class="author-name">PixcelsThemes</p>
                                    <p class="author-dsg">Author</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="full-wrapper wrapper-3">
                        <div class="image-part">
                            <a href="#" class="image"><img src="{{ asset('assets/images/featured/img-3.jpg') }}" alt="Featured Image"></a>
                        </div>
                        <div class="blog-content">
                            <span class="date-full">
                                <span class="day">25</span>
                                <br>
                                <span class="month">Jul</span>
                            </span>
                            <ul class="blog-meta">
                                <li><a href="#">WINTER DRESS</a></li>
                            </ul>
                            <div class="title">
                                <a href="#">At the limit, statically generated, edge delivered a food</a>
                            </div>
                            <div class="author-info d-flex align-items-center">
                                <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image"></div>
                                <div class="info">
                                    <p class="author-name">PixcelsThemes</p>
                                    <p class="author-dsg">Author</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Featured Product Section End Here::.. -->

<!-- ..::Newsletter Popup Start Here::.. -->
<div class="rts-newsletter-popup">
    <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
    <div class="newsletter-inner">
        <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
        <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
            PS23. It is a completely modern design</p>
        <form>
            <div class="input-area">
                <div class="input-div"><input type="text" placeholder="Your name">
                    <div class="input-icon"><i class="far fa-user"></i></div>
                </div>
                <div class="input-div"><input type="email" placeholder="Email address" required>
                    <div class="input-icon"><i class="far fa-envelope"></i></div>
                </div>
            </div>
            <button type="submit" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right ml--5"></i></button>
        </form>
    </div>
</div>
<!-- ..::Newsletter Popup End Here::.. -->

<!-- ..::Product-details Section Start Here::.. -->
<div class="product-details-popup-wrapper">
    <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
        <div class="product-details-popup">
            <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
            <div class="details-product-area">
                <div class="product-thumb-area">
                    <div class="cursor"></div>
                    <div class="thumb-wrapper one filterd-items figure">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                        </div>
                    </div>
                    <div class="thumb-wrapper two filterd-items hide">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')"><img src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                        </div>
                    </div>
                    <div class="thumb-wrapper three filterd-items hide">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')"><img src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                        </div>
                    </div>
                    <div class="product-thumb-filter-group">
                        <div class="thumb-filter filter-btn active" data-show=".one"><img src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                        <div class="thumb-filter filter-btn" data-show=".two"><img src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                        <div class="thumb-filter filter-btn" data-show=".three"><img src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
                    </div>
                </div>
                <div class="contents">
                    <div class="product-status">
                        <span class="product-catagory">Dress</span>
                        <div class="rating-stars-group">
                            <div class="rating-star"><i class="fas fa-star"></i></div>
                            <div class="rating-star"><i class="fas fa-star"></i></div>
                            <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                            <span>10 Reviews</span>
                        </div>
                    </div>
                    <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                    <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                    <p>
                        Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                        completely modern design and you feel comfortable to put on this hijab.
                        Buy it at the best price.
                    </p>
                    <div class="product-bottom-action">
                        <div class="cart-edit">
                            <div class="quantity-edit action-item">
                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                <input type="text" class="input" value="01" />
                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                            </div>
                        </div>
                        <a href="{{ route('cart') }}" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                            Add To
                            Cart</a>
                        <a href="{{ route('wishlist') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                    </div>
                    <div class="product-uniques">
                        <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                        <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                        <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                    </div>
                    <div class="share-social">
                        <span>Share:</span>
                        <a class="platform" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="platform" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="platform" href="http://behance.com" target="_blank"><i class="fab fa-behance"></i></a>
                        <a class="platform" href="http://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="platform" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Product-details Section End Here::.. -->

@endsection