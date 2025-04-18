@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable10.css') . '"/>';
    $header='flase';
    $footer='flase';
    $script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')  

    <!-- ..::Header Section Start Here::.. -->
    <header id="rtsHeader">
        <div class="header-topbar header-topbar1 header-topbar7 header-topbar10">
            <div class="container">
                <div class="header-top-area">
                    <div class="header-top-left">
                        <a href="newsletter" class="newsletter-link"><i class="rt rt-location-dot"></i> Store Locator</a>
                        <h3 class="welcome-text"><i class="far fa-envelope"></i>pixcelsthemes@gmail.com</h3>
                    </div>
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
                                <div class="swiper-button-prev slider-btn prev"><i
                                        class="rt rt-arrow-left-long"></i></div>
                                <div class="swiper-button-next slider-btn next"><i
                                        class="rt rt-arrow-right-long"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topbar-select-area">
                        <select class="topbar-select custom-select">
                            <option value="eng">English</option>
                            <option value="esp">español</option>
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
        <div class="navbar-sticky navbar-sticky7">
            <div class="container">
                <div class="navbar-part navbar-part1 navbar-part5">
                    <div class="navbar-inner">
                        <div class="left-side">
                            <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo10.png') }}" alt="weiboo-logo"></a>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Main
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
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
                                            <li class="dropdown-li"><a class="dropdown-link active"
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
                        <div class="header-action-items header-action-items1">
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
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
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
                <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
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
            <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
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
        <div class="banner banner-2 banner-7 banner-10 bg-image">
            <div class="container-fluid">
                <div class="banner-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 p-0">
                            <div class="product-item2 element-item2">
                                <a href="{{ route('productDetails') }}" class="product-image2 image-slider-variations">
                                    <img src="{{ asset('assets/images/products/home10/banner-img.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 first-child">
                            <div class="rts-heading">
                                <div class="title-inner">
                                    <div class="sub-title">
                                        <h2>2024</h2>
                                    </div>
                                    <h2 class="title">
                                        <span class="watermark">
                                            New Arrivals
                                        </span>
                                    </h2>
                                </div>
                                <p class="description">Sale up to 30% off
                                </p>
                                <div class="section-btn">
                                    <div class="rts-btn">
                                        <a href="#">Veiw Collections</a>
                                    </div>
                                    <div class="rts-video">
                                        <a href="https://www.youtube.com/watch?v=S05bHj0LBE4" class="popup-videos">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 last-child">
                            <div class="row">
                                <div class="col-xl-9 col-lg-12 col-12">
                                    <div class="product-item element-item2">
                                        <a href="{{ route('productDetails') }}" class="product-image image-slider-variations">
                                            <div class="hot">NEW</div>
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home10/product1.png') }}"
                                                    alt="product-image">
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
                                            <a href="{{ route('productDetails') }}" class="product-name">Apex Men's Shoe</a>
                                            <div class="action-wrap">
                                                <span class="price">Rp44.00 - $233.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..::Banner Section End Here::.. -->
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Posters Section Start Here::.. -->
    <div class="rts-posters-section1 section-9 section-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium5">
                        <div class="product-image product-image1">
                            <img src="{{ asset('assets/images/products/home10/women.png') }}" alt="">
                        </div>
                        <div class="contents">
                            <span class="pretitle">-45% Offer</span>
                            <h1 class="product-title">SUMMER DEAL 2024</h1>
                            <div class="view-collections go-btn">SHOP NOW <i class="far fa-arrow-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <h1 class="product-title">SUMMER DEAL</h1>
                            <div class="view-collections go-btn">SHOP NOW <i class="far fa-arrow-right"></i></div>
                        </div>
                        <div class="product-image">
                            <img src="{{ asset('assets/images/products/home10/product2.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <h1 class="product-title">SUMMER DEAL</h1>
                            <div class="view-collections go-btn">SHOP NOW <i class="far fa-arrow-right"></i></div>
                        </div>
                        <div class="product-image">
                            <img src="{{ asset('assets/images/products/home10/product3.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <h1 class="product-title">SUMMER DEAL</h1>
                            <div class="view-collections go-btn">SHOP NOW <i class="far fa-arrow-right"></i></div>
                        </div>
                        <div class="product-image">
                            <img src="{{ asset('assets/images/products/home10/product4.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <h1 class="product-title">SUMMER DEAL</h1>
                            <div class="view-collections go-btn">SHOP NOW <i class="far fa-arrow-right"></i></div>
                        </div>
                        <div class="product-image">
                            <img src="{{ asset('assets/images/products/home10/product5.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium4">
                        <div class="product-image product-image2">
                            <img src="{{ asset('assets/images/products/home10/man.png') }}" alt="">
                        </div>
                        <div class="contents">
                            <span class="pretitle">-45% Offer</span>
                            <h1 class="product-title">SUMMER DEAL 2024</h1>
                            <div class="view-collections go-btn">SHOP NOW <i class="far fa-arrow-right"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Posters Section End Here::.. -->
    
    <!-- ..::New Collection Section Start Here::.. -->
    <div class="rts-new-collection-section section9 section-10">
        <div class="container">
            <div class="section-inner">
                <div class="section-header section-header3 section-header9 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                            <span class="sub-text">Collections</span>
                            <img class="line-2" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                        </div>
                        <h2 class="title">Product of the Week</h2>
                    </div>
                </div>
                <div class="swiper rts-cmmnSlider-over" data-swiper="pagination">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="collection-item">
                                <div class="image">
                                    <a href="{{ route('category') }}"><img src="{{ asset('assets/images/products/home10/product6.png') }}" alt="collection-image"></a>
                                    <div class="hot">NEW</div>
                                </div>
                                <div class="bottom-content">
                                    <h4 class="product-name">Cartier Aviator Sunglass</h4>
                                    <p class="price">Rp35.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item">
                                <div class="image">
                                    <a href="{{ route('category') }}"><img src="{{ asset('assets/images/products/home10/product7.png') }}" alt="collection-image"></a>
                                    <div class="hot">NEW</div>
                                </div>
                                <div class="bottom-content">
                                    <h4 class="product-name">Stylish Men's Sunglass</h4>
                                    <p class="price">Rp35.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item">
                                <div class="image">
                                    <a href="{{ route('category') }}"><img src="{{ asset('assets/images/products/home10/product8.png') }}" alt="collection-image"></a>
                                    <div class="hot">NEW</div>
                                </div>
                                <div class="bottom-content">
                                    <h4 class="product-name">Ray-Ban Sunglass</h4>
                                    <p class="price">Rp35.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item">
                                <div class="image">
                                    <a href="{{ route('category') }}"><img src="{{ asset('assets/images/products/home10/product9.png') }}" alt="collection-image"></a>
                                    <div class="hot">NEW</div>
                                </div>
                                <div class="bottom-content">
                                    <h4 class="product-name">Black Polycarbonate Sunglass</h4>
                                    <p class="price">Rp35.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pag">
                </div>
            </div>
        </div>
    </div>
    <!-- ..::New Collection Section End Here::.. -->
    
    <!-- ..::Top Listed Section Start Here::.. -->
    <div class="rts-cta-banner">
        <div class="container">
            <div class="section-inner">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                        <span class="sub-text">Collections</span>
                        <img class="line-2" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                    </div>
                </div>
                <div class="content">
                    <h3 class="content-title">NEW ARRIVALS 2024</h3>
                    <p class="description">Donec pretium mauris vitae leo ultrices aliquam, auctor litora fermentum vel lacinia <br> cursus placerat cras diam vestibulum montes nullam Cum inceptos et rutrum lectus <br> duis diam morbi fermentum class augue egestas libero.</p>
                    <a href="#" class="discover-btn">DISCOVER MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::New Collection Section End Here::.. -->

    <!-- ..::Top Listed Section Start Here::.. -->
    <div class="rts-top-listed-items section-10">
        <div class="container">
            <div class="section-inner">
                <div class="section-header section-header3 section-header9 text-start">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                            <span class="sub-text">Collections</span>
                            <img class="line-2" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                        </div>
                        <h2 class="title">Product of the Week</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 pr">
                        <div class="product-area-left-side">
                            <div class="row justify-content-lg-center">
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 border-bottom p-0">
                                    <div class="wraper">
                                        <div class="image-section">
                                            <a href="{{ route('productDetails') }}"><img src="{{ asset('assets/images/products/home10/product17.png') }}" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="star-rating">
                                                <ul>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(10)</span>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-title">Ray-Ban Sunglass</a>
                                            <p class="product-price">Rp21.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 border-bottom p-0">
                                    <div class="wraper border-0">
                                        <div class="image-section">
                                            <a href="{{ route('productDetails') }}"><img src="{{ asset('assets/images/products/home10/product16.png') }}" alt=""></a>
                                        </div>
                                        <div class="content last">
                                            <div class="star-rating">
                                                <ul>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(10)</span>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-title">The Fatigue Sunglass</a>
                                            <p class="product-price">Rp21.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 border-bottom p-0">
                                    <div class="wraper">
                                        <div class="image-section">
                                            <a href="{{ route('productDetails') }}"><img src="{{ asset('assets/images/products/home10/product6.png') }}" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="star-rating">
                                                <ul>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(10)</span>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-title"> Aviator Sunglass</a>
                                            <p class="product-price">Rp21.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 border-bottom p-0">
                                    <div class="wraper border-0">
                                        <div class="image-section">
                                            <a href="{{ route('productDetails') }}"><img src="{{ asset('assets/images/products/home10/product7.png') }}" alt=""></a>
                                        </div>
                                        <div class="content last">
                                            <div class="star-rating">
                                                <ul>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(10)</span>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-title">Stylish Men's Sunglass</a>
                                            <p class="product-price">Rp21.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                    <div class="wraper">
                                        <div class="image-section">
                                            <a href="{{ route('productDetails') }}"><img src="{{ asset('assets/images/products/home10/product8.png') }}" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="star-rating">
                                                <ul>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(10)</span>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-title">Cartier Sunglass</a>
                                            <p class="product-price">Rp21.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 p-0">
                                    <div class="wraper border-0">
                                        <div class="image-section">
                                            <a href="{{ route('productDetails') }}"><img src="{{ asset('assets/images/products/home10/product9.png') }}" alt=""></a>
                                        </div>
                                        <div class="content last">
                                            <div class="star-rating">
                                                <ul>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#" class="fill"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(10)</span>
                                            </div>
                                            <a href="{{ route('productDetails') }}" class="product-title">Polycarbonate Sunglass</a>
                                            <p class="product-price">Rp21.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0">
                        <div class="right-side-banner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="collection-item">
                                            <div class="image">
                                                <a href="{{ route('category') }}"><img src="{{ asset('assets/images/products/home10/product16.png') }}" alt="collection-image"></a>
                                                <div class="hot">NEW</div>
                                            </div>
                                            <div class="bottom-content text-center">
                                                <h4 class="product-name"> Barbari Stylish Sunglass</h4>
                                                <p class="price">Rp35.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="collection-item">
                                            <div class="image">
                                                <a href="{{ route('category') }}"><img src="{{ asset('assets/images/products/home10/product17.png') }}" alt="collection-image"></a>
                                                <div class="hot">NEW</div>
                                            </div>
                                            <div class="bottom-content text-center">
                                                <h4 class="product-name"> Dark Stylish Sunglass</h4>
                                                <p class="price">Rp35.00</p>
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
    </div>
    <!-- ..::Top Listed Section End Here::.. -->

    <!-- ..::Brand Section Start Here::.. -->
    <div class="rts-brands-section1 section9 brand-bg3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
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
    <!-- ..::Brand Section End Here::.. -->

    <!-- ..::Featured Product Section Start Here::.. -->
    <div class="rts-featured-product-section3 section9 section-10">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                            <span class="sub-text">News</span>
                            <img class="line-2" src="{{ asset('assets/images/icons/icon-title.png') }}" alt="">
                        </div>
                        <h2 class="title">BLOG & INSIGHTS</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/products/home9/blog1.png') }}"
                                        alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">FASHION</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once that’s determined with a good, you need to come up with a name</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image">
                                    </div>
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
                                <a href="#" class="image"><img src="{{ asset('assets/images/products/home9/blog2.png') }}"
                                        alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">TRENDING</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once determined, you need to come up with a name a legal structure</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image">
                                    </div>
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
                                <a href="#" class="image"><img src="{{ asset('assets/images/products/home9/blog3.png') }}"
                                        alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">DESIGN</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">At the limit, statically generated, edge delivered a food</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image">
                                    </div>
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
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

    <!-- ..::Footer Start Here::.. -->
    <div class="footer footer-2 footer-7">
        <div class="container">
            <div class="footer-features">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/box.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Free shipping</h3>
                                <p>Free shipping on orders over $65.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/delivery-van.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Free Returns</h3>
                                <p>30-days free return policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/credit-card.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Secured Payments</h3>
                                <p>We accept all major credit cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item last-child">
                            <div class="icon"><img src="{{ asset('assets/images/icons/24hours.svg') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Customer Service</h3>
                                <p>Top notch customer setvice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="{{ asset('assets/images/logo10-1.png') }}" alt="footer-logo"></div>
                            <p class="widget-text">“ This is genuinely the first theme i bought for
                                which i did not had to write one line of code. I
                                would recommand everybody to get it. “</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/bubble-chat2.svg') }}" alt="icon">
                                    </div>
                                    <div class="contact-info">
                                        <span class="title">Get Support</span>
                                        <a href="mailto:pixcelsthemes@gmail.com"
                                            class="email-address info info2">pixcelsthemes@gmail.com</a>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/telephone-call2.svg') }}" alt="icon">
                                    </div>
                                    <div class="contact-info"><span class="title">Call Us</span>
                                        <a href="tel:75565236595" class="phone-number info info2">755. 652. 365. 95</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                                <li class="widget-list-item"><a href="#0">FAQs</a></li>
                                <li class="widget-list-item"><a href="#0">Ordering</a></li>
                                <li class="widget-list-item"><a href="#0">Tracking</a></li>
                                <li class="widget-list-item"><a href="#0">Contacts</a></li>
                                <li class="widget-list-item"><a href="#0">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Delivery Infomation</a></li>
                            <li class="widget-list-item"><a href="#0">Privacy Policy</a></li>
                            <li class="widget-list-item"><a href="#0">Discount</a></li>
                            <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                            <li class="widget-list-item"><a href="#0">Terms & Condition</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Social Network</h3>
                        <ul class="footer-widget social-links-footer">
                            <li><a class="platform" href="http://facebook.com" target="_blank"><i
                                        class="fab fa-facebook"></i>
                                    Facebook</a></li>
                            <li><a class="platform" href="http://linkedin.com" target="_blank"><i
                                        class="fab fa-linkedin"></i>
                                    Linkedin</a></li>
                            <li><a class="platform" href="http://twitter.com" target="_blank"><i
                                        class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li><a class="platform" href="http://behance.com" target="_blank"><i
                                        class="fab fa-behance"></i> Behance</a>
                            </li>
                            <li><a class="platform" href="http://youtube.com" target="_blank"><i
                                        class="fab fa-youtube"></i> YouTube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Instagram Feeds</h3>
                            <div class="ig-feed">
                                <div class="row">
                                    <div class="col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0" class="feed-item"><img
                                                src="{{ asset('assets/images/footer/feed.jpg') }}" alt="ig-feed"><i
                                                class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-1.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-2.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-3.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-4.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-xl-4 col-xl-4 col-md-4 col-sm-4 col-6"><a href="#0"
                                            class="feed-item"><img src="{{ asset('assets/images/footer/feed-5.jpg') }}"
                                                alt="ig-feed"><i class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright 2024 <span class="site">©Weiboo</span>. All rights reserved.
                        Powered by <a href="http://PixcelsThemes.com" class="brand" target="_blank">PixcelsThemes.</a></span>
                    <div class="payment-methods"><img src="{{ asset('assets/images/footer/payment2.svg') }}" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Footer End Here::.. -->

    @endsection