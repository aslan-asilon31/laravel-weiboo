@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable1.css') . '" />';
$header='flase';
$script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')
    <header id="rtsHeader">
        <div class="header-topbar-menu-area2">
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
        <div class="navbar-sticky navbar-sticky1">
            <div class="container">
                <div class="navbar-part navbar-part2">
                    <div class="navbar-inner">
                        <div class="left-side">
                            <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo1.svg') }}" alt="umart-logo"></a>
                            <div class="navbar-input-inner">
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                    <input class="search-input" type="text" placeholder="Search Keyword...">
                                </div>
                            </div>
                        </div>
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
                        <div class="header-action-items header-action-items1">
                            <ul>
                                <li><a href="#">Man</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Kids</a></li>
                            </ul>
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="cart-icon icon"><a href="#0"><i aria-hidden="true"
                                                class="fas fa-shopping-basket"></i></a><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-menubar">
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                                <ul class="dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Main
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link active"
                                                            href="{{ route('indexTwo') }}">Fashion
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('indexNine') }}">Fashion
                                                            Home Two</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('indexThree') }}">Furniture
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('indexFour') }}">Decor
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('indexFive') }}">Electronics
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('indexSix') }}">Grocery
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('indexSeven') }}">Footwear
                                                            Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                        href="{{ route('indexEight') }}">Gaming
                                                        Home</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                        href="{{ route('indexTen') }}">Sunglass
                                                        Home</a>
                                                    </li>
                                                </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Shop <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul mega-dropdown">
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('shop') }}">Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('sidebarLeft') }}">Left Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('sidebarRight') }}">Right Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('fullWidthShop') }}">Full Width Shop</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('productDetails') }}">Single Product Layout One</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('productDetails2') }}">Single Product Layout Two</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('variableProducts') }}">Variable
                                                            Product</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('groupedProducts') }}">Grouped
                                                            Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li last-child">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('cart') }}">Cart</a>
                                                    </li>

                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('checkOut') }}">Checkout</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="{{ route('account') }}">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Pages <i
                                                class="rt-plus"></i></a>
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

                                    <li class="has-dropdown"><a class="menu-item" href="#">Blog <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('news') }}">Blog</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('newsGrid') }}">Blog Grid</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('newsDetails') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
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
                                <span class="product-price">Rp198.00</span>
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
                                <span class="product-price">Rp88.00</span>
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
                                <span class="product-price">Rp289.00</span>
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
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">Rp199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">Rp556</span></span>
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
                            <li class="info email"><a href="email:pixcelsthemes@gmail.com">pixcelsthemes@gmail.com</a></li>
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
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('productDetails2') }}">Single Product Layout
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
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('checkOut') }}">Checkout</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('account') }}">My
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
        <!-- ..::Banner Section Start Here::.. -->
        <div class="banner banner-2 bg-image">
            <div class="container">
                <div class="banner-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="rts-heading">
                                <div class="react-image">
                                    <img src="{{ asset('assets/images/banner/dot.png') }}" alt="">
                                </div>
                                <div class="title-inner">
                                    <div class="sub-content">
                                        <img class="line-1-img" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                        <span class="sub-text">Spring summer 22 women’s collection</span>
                                    </div>
                                    <h2 class="title">
                                        <span class="watermark">
                                            Hot Collection <br> For Women
                                        </span>
                                    </h2>
                                </div>
                                <p class="description">Easy & safe payment with PayPal. sequins & embroidered for all
                                </p>
                                <a href="{{ route('shop') }}" class="section-btn2">View Collections</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item2 element-item2">
                                <a href="{{ route('productDetails') }}" class="product-image2 image-slider-variations">
                                    <div class="swiper productSlide2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image-vari1 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/1-1.webp') }}" alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/2-1.webp') }}" alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/3-1.webp') }}" alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/4-1.webp') }}" alt="product-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 col-12">
                                    <div class="product-item element-item2">
                                        <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                            <div class="hot">HOT</div>
                                            <div class="swiper productSlide">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="image-vari1 image-vari"><img
                                                                src="{{ asset('assets/images/hand-picked/slider-img8.webp') }}"
                                                                alt="product-image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image-vari2 image-vari"><img
                                                                src="{{ asset('assets/images/hand-picked/slider-img8_2.jpg') }}"
                                                                alt="product-image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image-vari2 image-vari"><img
                                                                src="{{ asset('assets/images/hand-picked/slider-img8_3.jpg') }}"
                                                                alt="product-image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-buttons">
                                                <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i>
                                                </div>
                                                <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i>
                                                </div>
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
                                            <a href="{{ route('productDetails') }}" class="product-name">Maidenform Bra</a>
                                            <div class="action-wrap">
                                                <span class="price">Rp31.00</span>
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
        </div>
        <!-- ..::Banner Section End Here::.. -->
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Deal Section Start Here::.. -->
    <div class="rts-deal-section2">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="video-section">
                            <div class="overly-border">
                                <a href="https://www.youtube.com/watch?v=R02ehdTzi3I" class="popup-videos"><i
                                        class="rt-play"></i></a>
                            </div>
                        </div>
                        <div class="img-box-wrapper">
                            <div class="image-box-image"><img src="{{ asset('assets/images/icons/deal-icon.png') }}" alt=""></div>
                            <p class="image-box-content">Limited time offer. The deal will expires <br>
                                on November 12, 2024 HURRY UP!</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="rts-heading">
                            <div class="title-inner">
                                <div class="sub-content">
                                    <img class="line-1-img" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                    <span class="sub-text">Deal Of Week</span>
                                </div>
                                <h2 class="title">
                                    <span class="watermark">
                                        ROLAND GRAND WHITE <br>
                                        SHORT T-SHIRT
                                    </span>
                                </h2>
                            </div>
                            <p class="description">Our intent and our actions have always been informed by progress. We
                                <br>
                                look at an impact report as a way to measure.</p>
                            <a href="{{ route('shop') }}" class="section-btn2">View Collections</a>
                        </div>
                        <div class="section-bottom">
                            <a href="#" class="section-card">
                                <div class="content">
                                    <span class="pretitle">-45% Offer</span>
                                    <h1 class="product-title">Summer Collection</h1>
                                    <div class="view-collections">Don't miss the last opportunity</div>
                                </div>
                                <div class="product-thumb">
                                    <img src="{{ asset('assets/images/products/dress.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Deal Section End Here::.. -->

    <!-- ..::Featured Product Section Start Here::.. -->
    <div class="rts-featured-product-section4">
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
                <p class="select-area">
                    <select class="filters-select">
                        <option value="*">Catagory</option>
                        <option value=".popular">Popular</option>
                        <option value=".best-rate">Best Rate</option>
                        <option value=".on-sale">On sale</option>
                        <option value=".featured">Featured</option>
                    </select>
                </p>
                <div class="fill">
                        <div class="element-item transition popular " data-category="transition">
                            <div class="product-item element-item1">
                                <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img8.webp') }}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img8_1.webp') }}" alt="product-image">
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
                                        <span class="price">Rp31.00</span>
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
                        <div class="element-item on-sale " data-category="metalloid">
                            <div class="product-item element-item1">
                                <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                    <div class="image image"><img src="{{ asset('assets/images/hand-picked/slider-img6.webp') }}"
                                            alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <a href="{{ route('productDetails') }}" class="product-name">Champion Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">Rp31.00</span>
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
                                <div class="hot">HOT</div>
                            </div>
                        </div>
                        <div class="element-item on-sale best-rate " data-category="metalloid">
                            <div class="product-item element-item2">
                                <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                    <div class="swiper productSlide">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image-vari1 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/slider-img11.webp') }}"
                                                        alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/slider-img11_1.webp') }}"
                                                        alt="product-image">
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
                                        <span class="price">Rp31.00</span>
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
                        <div class="element-item on-sale " data-category="metalloid">
                            <div class="product-item element-item1">
                                <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img7.webp') }}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img7_1.webp') }}" alt="product-image">
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
                                        <span class="price">Rp31.00</span>
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
                        <div class="element-item transition popular " data-category="transition">
                            <div class="product-item element-item1">
                                <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img8_2.jpg') }}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img8_3.jpg') }}" alt="product-image">
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
                                        <span class="price">Rp31.00</span>
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
                        <div class="element-item on-sale best-rate" data-category="metalloid">
                            <div class="product-item element-item2">
                                <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                    <div class="swiper productSlide2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image-vari1 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/slider-img12.webp') }}"
                                                        alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/slider-img12-1.webp') }}"
                                                        alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/slider-img12-2.webp') }}"
                                                        alt="product-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-buttons">
                                        <div class="button-prev2 slider-btn"><i class="rt-arrow-left-long"></i></div>
                                        <div class="button-next2 slider-btn"><i class="rt-arrow-right-long"></i></div>
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
                                        <span class="price">Rp31.00</span>
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
                        <div class="element-item on-sale best-rate " data-category="metalloid">
                            <div class="product-item element-item2">
                                <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                    <div class="swiper productSlide3">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image-vari1 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/woman-shirt-338x450.png') }}"
                                                        alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                        src="{{ asset('assets/images/hand-picked/woman-shirt-2.jpg') }}"
                                                        alt="product-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-buttons">
                                        <div class="button-prev3 slider-btn"><i class="rt-arrow-left-long"></i></div>
                                        <div class="button-next3 slider-btn"><i class="rt-arrow-right-long"></i></div>
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
                                        <span class="price">Rp31.00</span>
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
                        <div class="element-item featured" data-category="metalloid">
                            <div class="product-item element-item1">
                                <a href="{{ route('productDetails') }}" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img13-1.webp') }}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{ asset('assets/images/hand-picked/slider-img13.webp') }}" alt="product-image">
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
                                    <a href="{{ route('productDetails') }}" class="product-name">Hanes Women's Pant</a>
                                    <div class="action-wrap">
                                        <span class="price">Rp31.00</span>
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

    <!-- ..::Testimonial Area Start Here::.. -->
    <div class="rts-testimonial-section">
        <div class="container">
            <div class="section-inner">
                <div class="swiper testimonialSlide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-inner">
                                <img class="icon" src="{{ asset('assets/images/slider/icon-testimonial.png') }}" alt="">
                                <div class="content">
                                    <p class="description">“ This is genuinely the first theme I bought for which I did
                                        not have to write one line of code. I would recommend everybody to get it. “</p>
                                </div>
                                <div class="author-box">
                                    <h3 class="author-name">Jennifer Lopez</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-inner">
                                <img class="icon" src="{{ asset('assets/images/slider/icon-testimonial.png') }}" alt="">
                                <div class="content">
                                    <p class="description">“ This is genuinely the first theme I bought for which I did
                                        not have to write one line of code. I would recommend everybody to get it. “</p>
                                </div>
                                <div class="author-box">
                                    <h3 class="author-name">Jennifer Lopez</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-inner">
                                <img class="icon" src="{{ asset('assets/images/slider/icon-testimonial.png') }}" alt="">
                                <div class="content">
                                    <p class="description">“ This is genuinely the first theme I bought for which I did
                                        not have to write one line of code. I would recommend everybody to get it. “</p>
                                </div>
                                <div class="author-box">
                                    <h3 class="author-name">Jennifer Lopez</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-inner">
                                <img class="icon" src="{{ asset('assets/images/slider/icon-testimonial.png') }}" alt="">
                                <div class="content">
                                    <p class="description">“ This is genuinely the first theme I bought for which I did
                                        not have to write one line of code. I would recommend everybody to get it. “</p>
                                </div>
                                <div class="author-box">
                                    <h3 class="author-name">Jennifer Lopez</h3>
                                    <p>Head Of Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Testimonial Area End Here::.. -->

    <!-- ..::Offer Section Start Here::.. -->
    <div class="rts-special_offer-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-md-12 col-12">
                    <div class="special-offers-contents">
                        <div class="special-contents-inner">
                            <div class="title-inner">
                                <div class="sub-content">
                                    <img class="line-1-img" src="{{ asset('assets/images/banner/wvbo-icon.png') }}" alt="">
                                    <span class="sub-text">Weekly Update</span>
                                </div>
                                <h2 class="title">
                                    <span class="watermark">
                                        Get Weekly Update <br> From Us
                                    </span>
                                </h2>
                                <p class="description">Our intent and our actions have always been informed by progress. We look at an impact report as a way to measure. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus pendisse ultrices gravida.</p>
                            </div>
                            <form>
                                <div class="subscribe-input">
                                    <i class="fal fa-envelope"></i>
                                    <input type="email" placeholder="Email address">
                                    <a href="#0" class="subscribe-btn">Subscribe <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                    <div class="special-offers-product">
                        <a href="{{ route('productDetails') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/catagory/img-1-2.jpg') }}" alt="product-thumb"></a>
                        <div class="product-content">
                            <a href="{{ route('productDetails') }}" class="detail">Mans Casual Shirt</a>
                            <div class="product-btn">
                                <p class="product-price">Rp180.00 <span class="old-price">Rp290.00</span></p>
                                <a href="#" class="cart-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="shop-now-box">
                        <a href="{{ route('shop') }}" class="picture"><img src="{{ asset('assets/images/products/shopnow.jpg') }}"
                                alt="shop-now"></a>
                        <div class="contents">
                            <span class="collection-text">Collection AW 2024</span>
                            <h2 class="title">Shoes & Bags</h2>
                            <a href="{{ route('shop') }}" class="shop-now-btn shop-now-btn1">Shop now <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Offer Section End Here::.. -->

    <!-- ..::Brand Section Start Here::.. -->
    <div class="rts-brands-section2 brand-bg3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="brands-section-inner">
                        <div class="slider-div">
                            <div class="swiper rts-brandSlide1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-01.png') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-02.png') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-03.png') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-04.png') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-05.png') }}"
                                                alt="Brand Logo"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="brand-front" href="#"><img src="{{ asset('assets/images/brands/client-06.png') }}"
                                                alt="Brand Logo"></a>
                                    </div>
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
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
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
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
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
                        <span class="product-price"><span class="old-price">Rp9.35</span> $7.25</span>
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