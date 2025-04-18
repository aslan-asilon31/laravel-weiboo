@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable6.css') . '"/>';
    $title='Faq';
    $subTitle = 'Pages';
    $subTitle2 = 'Faq';
@endphp

@section('content')
     
    <!--faq-area start-->
    <section class="faq-area pt-120 pb-90 pt-md-55 pb-md-30 pt-xs-55 pb-xs-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="faq-que-list mb-30">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How do you prioritize your work?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        How do you prioritize your work?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="faq-que-list mb-30">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        What is your pricing strategy and why?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Do you know anyone that works with our company?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-20">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        How do I get in touch with WooCommerce?
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Happiness Engineer via our Help Desk. We provide support for extensions
                                            developed by
                                            and/or sold on WooCommerce.com, and Jetpack/WordPress.com customers. If you
                                            are
                                            not a customer, we recommend finding help</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--faq-area end-->

@endsection