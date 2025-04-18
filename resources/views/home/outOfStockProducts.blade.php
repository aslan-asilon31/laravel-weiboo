@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable6.css') . '"/>';
    $script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';

    $title='Out Of Stock';
    $subTitle = 'Home';
    $subTitle2 = 'Out Of Stock';
@endphp

@section('content')

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="rts-product-details-section rts-product-details-section2 section-gap">
        <div class="container">
            <div class="row product-row">
                <div class="col-xl-12">
                    <div class="product-area details-product-area mb--70 justify-content-center">
                        <div class="product-thumb-area">
                            <div class="cursor"></div>
                            <div class="thumb-wrapper one filterd-items figure">
                                <div class="product-thumb zoom" onmousemove="zoom(event)"
                                    style="background-image: url('{{ asset('assets/images/products/product-filt1.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb">
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
                            <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock1">Out Of Stock</span></h2>
                            <span class="product-price"><span class="old-price">Rp9.35</span> $7.25</span>
                            <p>
                                Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                                completely modern design and you feel comfortable to put on this hijab.
                                Buy it at the best price.
                            </p>
                            <div class="product-bottom-action3">
                                <div class="cart-edit2">
                                    <div class="quantity-edit action-item">
                                        <button class="button"><i class="fal fa-minus minus"></i></button>
                                        <input type="text" class="input" value="1" />
                                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                    </div>
                                    <span><i class="fal fa-times-circle"></i> Sold Out</span>
                                </div>
                                <button class="form-btn form-btn4">
                                    Out Of Stock
                                </button>
                            </div>
                            <div class="product-uniques">
                                <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                                <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops,
                                    Mens</span>
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
            <div class="product-full-details-area product-full-details-area2">
                <div class="details-filter-bar">
                    <button class="details-filter filter-btn active" data-show=".dls-one">Description</button>
                    <button class="details-filter filter-btn" data-show=".dls-two">Additional information</button>
                    <button class="details-filter filter-btn" data-show=".dls-three">Reviews (0)</button>
                    <button class="details-filter filter-btn" data-show=".dls-four">Size Chart</button>
                </div>
                <div class="full-details dls-one filterd-items">
                    <div class="full-details-inner">
                        <p class="mb--30">In marketing a product is an object or system made available for consumer use
                            it is anything that can be offered to a market to satisfy the desire or need of a customer.
                            In retailing, products are
                            merchandise, and in manufacturing, products are bought as raw materials and then sold as
                            finished goods. A service is also regarded to as a type of product. Commodities are usually
                            raw material
                            and agricultural products, but a commodity can also be anything widely available in the open
                            market. In project management, products are the formal definition of the project
                            deliverables that
                            to delivering the objectives of the project.</p>
                        <p>A product can be classified as tangible or intangible. A tangible product is a physical
                            object that can be perceived by touch such as a building, vehicle, gadget, or clothing. An
                            intangible product is
                            can only be perceived indirectly such as an insurance policy. Services can be broadly
                            classified under intangible products which can be durable or non durable. A product line is
                            "a group of
                            closely related, either because they function in a similar manner, are sold to the same
                            customer groups, are marketed through the same types of outlets, or fall within given price
                            ranges."Many
                            range of product lines which may be unique to a single organisation or may be common across
                            the business's industry. In 2002 the US Census compiled revenue figures for the finance and
                            various product lines such as "accident, health and medical insurance premiums" and "income
                            from secured consumer loans.</p>
                    </div>
                </div>
                <div class="full-details dls-two filterd-items hide">
                    <div class="full-details-inner">
                        <p class="mb--30">In marketing a product is an object or system made available for consumer use
                            it is anything that can be offered to a market to satisfy the desire or need of a customer.
                            In retailing, products are
                            merchandise, and in manufacturing, products are bought as raw materials and then sold as
                            finished goods. A service is also regarded to as a type of product. Commodities are usually
                            raw material
                            and agricultural products, but a commodity can also be anything widely available in the open
                            market. In project management, products are the formal definition of the project
                            deliverables that
                            to delivering the objectives of the project.</p>
                        <p>A product can be classified as tangible or intangible. A tangible product is a physical
                            object that can be perceived by touch such as a building, vehicle, gadget, or clothing. An
                            intangible product is
                            can only be perceived indirectly such as an insurance policy. Services can be broadly
                            classified under intangible products which can be durable or non durable. A product line is
                            "a group of
                            closely related, either because they function in a similar manner.</p>
                    </div>
                </div>
                <div class="full-details dls-three filterd-items hide">
                    <div class="full-details-inner">
                        <p>There are no reveiws yet.</p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mr-10">
                                <div class="reveiw-form">
                                    <h2 class="section-title">
                                        Be the first to reveiw <strong> <a href="{{ route('productDetails') }}">"Wide Cotton
                                                Tunic Dress"</a></strong></h2>
                                    <h4 class="sect-title">Your email address will not be published. Required fields are
                                        marked* </h4>
                                    <div class="reveiw-form-main mb-10">
                                        <div class="contact-form">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="input-box text-input mb-20">
                                                        <textarea name="Message" id="validationDefault01" cols="30"
                                                            rows="10" placeholder="Your Review*" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="col-lg-12">
                                                        <div class="input-box mb-20">
                                                            <input type="text" id="validationDefault02"
                                                                placeholder="Name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-box mail-input mb-20">
                                                            <input type="text" id="validationDefault03"
                                                                placeholder="E-mail*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="rating">
                                                            <p>Your Rating :</p>
                                                            <div class="rating-icon">
                                                                <span class="one"><a href="#"> <i
                                                                            class="fal fa-star"></i></a></span>
                                                                <span class="two"><a href="#"> <i
                                                                            class="fal fa-star"></i></a></span>
                                                                <span class="three"><a href="#"> <i
                                                                            class="fal fa-star"></i></a></span>
                                                                <span class="four"><a href="#"> <i
                                                                            class="fal fa-star"></i></a></span>
                                                                <span class="five"><a href="#"> <i
                                                                            class="fal fa-star"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-15">
                                                        <button class="form-btn form-btn4">
                                                            Submit <i class="fal fa-long-arrow-right"></i>
                                                        </button>
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
                <div class="full-details dls-four filterd-items hide">
                    <div class="full-details-inner">
                        <p class="mb--30">In marketing a product is an object or system made available for consumer use
                            it is anything that can be offered to a market to satisfy the desire or need of a customer.
                            In retailing, products are
                            merchandise in project management, products are the formal definition of the project
                            deliverables that
                            to delivering the objectives of the project.</p>
                        <p>A product can be classified as tangible or intangible. A tangible product is a physical
                            object that can be perceived by touch such as a building, vehicle, gadget, or clothing. An
                            intangible product is
                            can only be perceived indirectly such as an insurance policy. Services can be broadly
                            classified under intangible products which can be durable or non durable. A product line is
                            "a group of
                            closely related, either because they function in a similar manner, are sold to the same
                            customer groups, are marketed through the same types of outlets, or fall within given price
                            ranges."Many
                            range of product lines which may be unique to a single organisation or may be common across
                            the business's industry. In 2002 the US Census compiled revenue figures for the finance and
                            various product lines such as "accident, health and medical insurance premiums" and "income
                            from secured consumer loans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

@endsection
