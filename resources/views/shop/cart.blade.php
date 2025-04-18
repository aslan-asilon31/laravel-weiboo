@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable6.css') . '"/>';
    $title='Cart';
    $subTitle = 'Shop';
    $subTitle2 = 'Cart';
    $script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')

    <!-- ..::Cart Section Start Here::.. -->
    <div class="rts-cart-section">
        <div class="container">
            <h4 class="section-title">Product List</h4>
            <div class="row justify-content-between">
                <div class="col-xl-7">
                    <div class="cart-table-area">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/1.jpg') }}" alt="product-thumb"></div></td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">Shimmer Sheer Tights</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">Rp69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                                <tr>
                                    <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/2.jpg') }}" alt="product-thumb"></div></td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">Shimmer Sheer Tights</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">Rp69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                                <tr>
                                    <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/3.jpg') }}" alt="product-thumb"></div></td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">Shimmer Sheer Tights</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">Rp69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                                <tr>
                                    <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/4.jpg') }}" alt="product-thumb"></div></td>
                                    <td>
                                        <div class="product-title-area">
                                            <span class="pretitle">Nighty</span>
                                            <h4 class="product-title">Shimmer Sheer Tights</h4>
                                        </div>
                                    </td>
                                    <td><span class="product-price">Rp69.00</span></td>
                                    <td>
                                        <div class="cart-edit">
                                            <div class="quantity-edit">
                                                <button class="button"><i class="fal fa-minus minus"></i></button>
                                                <input type="text" class="input" value="3" />
                                                <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="last-td"><button class="remove-btn">Remove</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="coupon-apply">
                            <span class="coupon-text">Coupon Code:</span>
                            <div class="apply-input">
                                <input type="text" placeholder="Apply coupon here">
                                <button type="submit" class="apply-btn">Apply </i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="checkout-box">
                        <div class="checkout-box-inner">
                            <div class="subtotal-area">
                                <span class="title">Subtotal</span>
                                <span class="subtotal-price">Rp364.00</span>
                            </div>
                            <div class="shipping-check">
                                <span class="title">Shipping</span>
                                <div class="check-options">
                                    <form>
                                          <div class="form-group">
                                            <input type="checkbox" id="fltrt">
                                            <label class="check-title" for="fltrt">Flat rate</label>
                                          </div>
                                          <div class="form-group">
                                            <input type="checkbox" id="frsh">
                                            <label class="check-title" for="frsh">Free shipping</label>
                                          </div>
                                    </form>
                                </div>
                            </div>
                            <div class="shipping-location">
                                <span class="shipping-to">Shipping to <span>NY.</span></span>
                                <span class="change-address"><i class="fal fa-map-marker-alt mr--5"></i>Change address</span>
                            </div>
                            <div class="total-area">
                                <span class="title">Total</span>
                                <span class="total-price">Rp364.00</span>
                            </div>
                        </div>
                        <a href="{{ route('checkOut') }}" class="procced-btn">Procced To Checkout</a>
                        <a href="{{ route('shop') }}" class="continue-shopping"><i class="fal fa-long-arrow-left"></i> Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Cart Section End Here::.. -->

@endsection
