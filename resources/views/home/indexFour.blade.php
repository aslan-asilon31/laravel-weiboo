@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable3.css') . '" />';
$header='flase';
$footer='flase';
@endphp

@section('content')

    <header id="rtsHeader">
        <div class="header-topbar header-topbar2 header-topbar3">
            <div class="container">
                <div class="header-top-inner">
                    <h3 class="welcome-text"><i class="rt-truck"></i> Free shipping for all orders of <span
                            class="value">150Rp</span></h3>
                    <div class="topbar-action">
                        <a href="#" class="action-item mr--40"><i class="rt-store"></i> Store Location<span
                                class="separator"></span></a>
                        <a href="#" class="action-item"><i class="rt-location-dot"></i> Track Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-part navbar-part navbar-part3">
                <div class="container">
                    <div class="navbar-inner navbar-inner2">
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo7.svg') }}" alt="umart-logo"></a>
                        <div class="navbar-search-area">
                            <div class="search-input-inner">
                                <select class="custom-select">
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
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i>Search</div>
                                    <input class="search-input input4" type="text" placeholder="Keyword here...">
                                </div>
                            </div>
                        </div>
                        <div class="navbar-select-area">
                            <select class="topbar-select custom-select">
                                <option value="eng">Eng</option>
                                <option value="esp">esp</option>
                                <option value="ban">Ban</option>
                            </select>
                            <select class="topbar-select custom-select last-child">
                                <option value="usd">USD</option>
                                <option value="eur">Euro</option>
                                <option value="tk">Taka</option>
                            </select>
                        </div>
                        <div class="header-action-items header-action-items1">
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner inner-2">
                                            <div class="input-div">
                                                <input class="search-input input4" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="cart-icon icon"><i class="rt-cart"></i><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                            <div class="wishlist action-item">
                                <div class="favourite-icon icon"><a href="{{ route('wishlist') }}"><i class="rt-heart"></i></a>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        </div>
                        <div class="hamburger"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-sticky lower-navbar-sticky">
            <div class="navbar-part navbar-part2 lower-navbar">
                <div class="container">
                    <div class="navbar-inner">
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo3.svg') }}" alt="umart-logo"></a>
                        <div class="catagory-select-area">
                            <select class="custom-select">
                                <option value="hide">All Catagory</option>
                                <option value="all">All</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="shoes">Shoes</option>
                                <option value="shoes">Glasses</option>
                                <option value="shoes">Bags</option>
                                <option value="shoes">Assesories</option>
                            </select>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                        class="rt-plus"></i></i></a>
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
                                            <li class="dropdown-li"><a class="dropdown-link active"
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
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('shop') }}">Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('sidebarLeft') }}">Left Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('sidebarRight') }}">Right Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('fullWidthShop') }}">Full Width Shop</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('productDetails') }}">Single Product Layout
                                                            One</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('productDetails2') }}">Single Product Layout
                                                            Two</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('variableProducts') }}">Variable Product</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('groupedProducts') }}">Grouped Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li last-child">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('cart') }}">Cart</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('checkOut') }}">Checkout</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
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
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('faq') }}">FAQ's</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('errorPage') }}">Error 404</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="#">Blog <i
                                        class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('news') }}">Blog</a></li>
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
                        <div class="quick-contact">
                            <a href="tel:123456789" class="phone contact-item"><i class="rt-phone-flip"></i> 568. 685. 350. 56 <span
                                    class="separator"></span></a>
                            <a href="mailto:info@webexample.com" class="email contact-item"><i class="rt-envelope"></i> info@webexample.com</a>
                        </div>
                        <div class="hamburger"><span></span></div>
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
                        <img src="{{ asset('assets/images/logo7.svg') }}" alt="">
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
        <div class="banner banner-3">
            <div class="swiper bannerSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-single bg-image bg-image-3">
                            <div class="container">
                                <div class="single-inner">
                                    <div class="contents">
                                        <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                        <h1 class="banner-heading mb--30">Elegance <br>
                                            Hand Craft</h1>
                                        <div class="banner-action">
                                            <a class="banner-btn banner-btn2" href="{{ route('productDetails') }}"><i
                                                    class="rt-cart-shopping"></i>Shop
                                                Now</a>
                                            <div class="banner-review">
                                                <div class="review">
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fal fa-star"></i></div>
                                                </div>
                                                <span class="review-text"><span class="value">100+</span> Review</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-product-thumb"><img
                                            src="{{ asset('assets/images/products/banner-product.jpg') }}" alt="banner-product"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-single bg-image bg-image-3">
                            <div class="container">
                                <div class="single-inner">
                                    <div class="contents">
                                        <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                        <h1 class="banner-heading mb--30">Modern <br>
                                            Hand Craft</h1>
                                        <div class="banner-action">
                                            <a class="banner-btn banner-btn2" href="#0"><i
                                                    class="rt-cart-shopping"></i>Shop
                                                Now</a>
                                            <div class="banner-review">
                                                <div class="review">
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fal fa-star"></i></div>
                                                </div>
                                                <span class="review-text"><span class="value">100+</span> Review</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-product-thumb"><img
                                            src="{{ asset('assets/images/products/banner-product2.png') }}" alt="banner-product"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-up"></i></div>
                    <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..::Banner Section End Here::.. -->
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Box Catagory Section Start Here::.. -->
    <div class="rts-box-catagory-section">
        <div class="box-catagory-inner">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box1">
                        <a href="{{ route('category') }}" class="picture"><img src="{{ asset('assets/images/post/cata1.png') }}"
                                alt="box-picture"></a>
                        <a href="{{ route('category') }}" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="{{ asset('assets/images/icons/bell.png') }}" alt=""></div>
                            <h2 class="box-heading">Stationary &
                                Gift Card</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box2">
                        <a href="{{ route('category') }}" class="picture"><img src="{{ asset('assets/images/post/cata2.png') }}"
                                alt="box-picture"></a>
                        <a href="{{ route('category') }}" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="{{ asset('assets/images/icons//pins.png') }}" alt=""></div>
                            <h2 class="box-heading">Handmade
                                Teapots & Mugs</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box3">
                        <a href="{{ route('category') }}" class="picture"><img src="{{ asset('assets/images/post/cata3.png') }}"
                                alt="box-picture"></a>
                        <a href="{{ route('category') }}" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="{{ asset('assets/images/icons//tape.png') }}" alt=""></div>
                            <h2 class="box-heading">Furniture Decor
                                Objects</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box4 last-child">
                        <a href="{{ route('category') }}" class="picture"><img src="{{ asset('assets/images/post/cata4.png') }}"
                                alt="box-picture"></a>
                        <a href="{{ route('category') }}" class="view-collection-btn">View Collection</a>
                        <div class="contents">
                            <div class="icon"><img src="{{ asset('assets/images/icons/tub.png') }}" alt=""></div>
                            <h2 class="box-heading">Vases & <br>
                                Plant Pots</h2>
                        </div>
                        <span class="item-update">100 New Added</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Box Catagory Section End Here::.. -->

    <!-- ..::Recent Products Section Start Here::.. -->
    <div class="rts-recent_products-section section-gap">
        <div class="container">
            <div class="recent-products-header section-header section-header3">
                <span class="section-pretitle section-pretitle2 mb--15">Featured</span>
                <span class="section-title-2 mb--5
                ">Wood Crafted Products</span>
                <div class="section-line mb-0"><img src="{{ asset('assets/images/items/curlyline.png') }}" alt="line"></div>
            </div>
            <div class="products-area products-area3">
                <div class="row justify-content-center">
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item3">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/1.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item2">
                            <a href="{{ route('productDetails') }}"
                                class="product-image image-slider-variations image-slider-variations3">
                                <div class="swiper productSlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home3/2.jpg') }}" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{ asset('assets/images/products/home3/7.jpg') }}" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-buttons">
                                    <div class="button-prev slider-btn"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="button-next slider-btn"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Wooden Handicraft</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00 <span class="old-price">Rp43.00</span></span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item3 popular">
                            <a href="{{ route('productDetails') }}"
                                class="product-image image-gallery-variations image-gallery-variations3">
                                <div class="swiper productGallerySlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home3/3.jpg') }}" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{ asset('assets/images/products/home3/9.jpg') }}" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="thumbs-area">
                                <div class="swiper productGallerySlideThumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{ asset('assets/images/products/home3/3.jpg') }}" alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{ asset('assets/images/products/home3/9.jpg') }}" alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/4.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Modern Handicraft</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/5.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Modern Glasses Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="hot-tag product-tag">HOT</div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/6.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Adapt Camo Seamless Shorts</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/7.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/8.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <a href="{{ route('productDetails') }}" class="product-name">Adapt Camo Seamless Shorts</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00 <span class="old-price">Rp43.00</span></span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="hot-tag product-tag">HOT</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/9.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6">
                        <div class="product-item product-item2 element-item1">
                            <a href="{{ route('productDetails') }}" class="product-image">
                                <img src="{{ asset('assets/images/products/home3/10.jpg') }}" alt="product-image">
                            </a>
                            <div class="bottom-content">
                                <span class="product-catagory">Hand Craft</span>
                                <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                <div class="action-wrap">
                                    <span class="product-price">Rp31.00</span>
                                    <a href="{{ route('cart') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                        Cart</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a href="{{ route('wishlist') }}" class="product-action"><i class="fal fa-heart"></i></a>
                                <button class="product-action product-details-popup-btn"><i
                                        class="fal fa-eye"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('shop') }}" class="all-products-link">All products <i
                        class="fal fa-long-arrow-right ml--10"></i></a>
            </div>
        </div>
    </div>
    <!-- ..::Recent Products Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="newsletter-banner newsletter-banner3 section-space mb-0">
        <div class="container">
            <div class="newsletter-contents">
                <span class="section-title-2 mb--5">Join Our Newsletter</span>
                <div class="section-line mb--20"><img src="{{ asset('assets/images/items/woodline.png') }}" alt="line"></div>

                <div class="newsletter-input">
                    <div class="icon"><i class="fal fa-envelope"></i></div>
                    <input type="email" placeholder="Enter email address">
                    <button type="submit" class="subscribe-btn">
                        Newsletter <i class="fal fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::New Collection Section Start Here::.. -->
    <div class="rts-wood-products-section section-space">
        <div class="container">
            <div class="section-header section-header3 text-start">
                <div class="wrapper d-flex flex-column">
                    <span class="section-pretitle mb--15">Hand-Picked</span>
                    <span class="section-title-2 mb--5
                ">Wood Crafted Products</span>
                    <div class="section-line mb-0"><img src="{{ asset('assets/images/items/woodline.png') }}" alt="line"></div>
                </div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev slider-btn prev"><i class="fal fa-angle-left"></i>Prev</div>
                    <div class="swiper-button-next slider-btn next">Next<i class="fal fa-angle-right"></i></div>
                </div>
            </div>
            <div class="slider-div">
                <div class="swiper rts-sixSlide-over">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="{{ route('productDetails') }}"><img
                                        src="{{ asset('assets/images/products/home3/1.jpg') }}" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="{{ route('productDetails') }}" class="product-name">Painting Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">Rp31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="{{ route('productDetails') }}"><img
                                        src="{{ asset('assets/images/products/home3/2.jpg') }}" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="{{ route('productDetails') }}" class="product-name">Wooden Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">Rp31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="{{ route('productDetails') }}"><img
                                        src="{{ asset('assets/images/products/home3/3.jpg') }}" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="{{ route('productDetails') }}" class="product-name">Balli Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">Rp31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="{{ route('productDetails') }}"><img
                                        src="{{ asset('assets/images/products/home3/4.jpg') }}" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                    <div class="action-wrap">
                                        <span class="product-price">Rp31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="{{ route('productDetails') }}"><img
                                        src="{{ asset('assets/images/products/home3/5.jpg') }}" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="{{ route('productDetails') }}" class="product-name">Minimalist Beard Mug</a>
                                    <div class="action-wrap">
                                        <span class="product-price">Rp31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collection-item"><a class="collection-image" href="{{ route('productDetails') }}"><img
                                        src="{{ asset('assets/images/products/home3/6.jpg') }}" alt="collection-image"></a>
                                <div class="bottom-content">
                                    <a href="{{ route('productDetails') }}" class="product-name">Classic Handicraft</a>
                                    <div class="action-wrap">
                                        <span class="product-price">Rp31.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Heading Section Start Here::.. -->

    <!-- ..::brands Section Start Here::.. -->
    <div class="rts-brands-section">
        <div class="container">
            <div class="recent-products-header section-header section-header2">
                <span class="section-pretitle mb--10">Sponsors</span>
                <span class="section-title-2">100+ Happy Users</span>
                <div class="section-line mb-0"><img src="{{ asset('assets/images/items/curlyline.png') }}" alt="line"></div>
            </div>
            <div class="brands-section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/1.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/2.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/3.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/4.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/5.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/6.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/7.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/8.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/9.png') }}" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::brands Section End Here::.. -->

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
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
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
    <div class="footer footer-2 footer-3">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col">
                        <div class="footer-widget footer-box-widget">
                            <div class="footer-logo"><img src="{{ asset('assets/images/logo7.svg') }}" alt="footer-logo"></div>
                            <p>Solid is the information & experience
                                directed at an end-user</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/24clock.png') }}" alt="chat-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="tel:0020500" class="service-time info">0020 500 - CALL - 000</a>
                                        <span class="title">Mon - Fri: 9:00-20:00</span>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/mail.png') }}" alt="phone-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="mailto:pixcelsthemes@gmail.com"
                                            class="email-address info">pixcelsthemes@gmail.com</a>
                                        <span class="title">Get Support</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-links-footer2">
                                <li><a class="platform fb" target="_blank" href="http://facebook.com"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li><a class="platform yt" target="_blank" href="http://youtube.com"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                                <li><a class="platform ttr" target="_blank" href="http://twitter.com"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a class="platform lkd" target="_blank" href="http://linkedin.com"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">About Us</h3>
                            <p class="widget-text">Elegant pink origami design three type
                                of dimensional view and decoration co
                                Great for adding a decorative touch to
                                any room’s decor.</p>
                            <a href="#0" class="getin-touch">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                                <li class="widget-list-item"><a href="#0">FAQs</a></li>
                                <li class="widget-list-item"><a href="#0">Ordering Tracking</a></li>
                                <li class="widget-list-item"><a href="#0">Contacts</a></li>
                                <li class="widget-list-item"><a href="#0">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Delivery Infomation</a></li>
                            <li class="widget-list-item"><a href="#0">Privacy Policy</a></li>
                            <li class="widget-list-item"><a href="#0">Discount</a></li>
                            <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                            <li class="widget-list-item"><a href="#0">Terms & Condition</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-25 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Get Newsletter</h3>
                        <div class="footer-widget newsletter-widget">
                            <span class="widget-text">Get 10% off your first order! Hurry up</span>
                            <div class="input-div">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <a href="#0" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottombar">
                    <div class="app-download">
                        <span class="download-text">Order faster with our App!</span>
                        <a href="http://appstore.com" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/appstore.jpg') }}" alt=""></a>
                        <a href="https://play.google.com/store/apps" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/playstore.jpg') }}" alt=""></a>
                    </div>
                    <div class="payment-methods"><img src="{{ asset('assets/images/footer/payment2.svg') }}" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright & Design By <a href="http://PixcelsThemes.com" class="brand"
                            target="_blank">PixcelsThemes</a> -2024</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Footer End Here::.. -->

    @endsection