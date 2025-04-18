@extends('layout.layout')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/variables/variable6.css') . '"/>';
    $title='Checkout';
    $subTitle = 'Shop';
    $subTitle2 = 'Checkout';
    $script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')

    <div class="rts-checkout-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8">
                    <div class="coupon-area">
                        <div class="coupon-ask">
                            <span>Have a coupon?</span>
                            <button class="coupon-click">Click here to enter your code</button>
                        </div>
                        <div class="coupon-input-area">
                            <input type="text" placeholder="Enter Coupon Code...">
                            <button type="submit" class="apply-btn">Apply Coupon</button>
                        </div>
                    </div>
                    <form class="checkout-form">
                        <div class="row">
                            <div class="col-xl-6  col-md-6">
                                <div class="input-div"><input type="text" placeholder="First name**"></div>
                            </div>
                            <div class="col-xl-6  col-md-6">
                                <div class="input-div"><input type="text" placeholder="Last name**"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6  col-md-6">
                                <select>
                                    <option value="us">Country/Region</option>
                                    <option value="us">USA</option>
                                    <option value="ast">Australia</option>
                                    <option value="cnd">Canada</option>
                                    <option value="bd">Bangladesh</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="State**"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Town/City**"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Zip Code**"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Street Address**"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text"
                                        placeholder="Appartments, suit, unit, etc (Optional)"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="text" placeholder="Phone Number**"></div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="input-div"><input type="email" placeholder="Email Address**"></div>
                            </div>
                        </div>
                        <div class="check-options">
                            <div class="form-group">
                                <input type="checkbox" id="crat">
                                <label class="check-title" for="crat">Create an account?</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="shadd">
                                <label class="check-title" for="shadd">Ship to a different address?</label>
                            </div>
                        </div>
                        <textarea id="orderNotes" cols="80" rows="4" placeholder="Order notes (optional)"></textarea>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="action-item">
                        <div class="action-top">
                            <span class="action-title">Product</span>
                            <span class="subtotal">Subtotal</span>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Preschool Flex Runner × 1</span>
                                </div>
                                <div class="price">Rp69.00</div>
                            </div>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Hiking Boots × 1
                                    </span>
                                </div>
                                <div class="price">Rp220.00</div>
                            </div>
                        </div>
                        <div class="category-item">
                            <div class="category-item-inner">
                                <div class="category-title-area">
                                    <span class="category-title">Tiktok Tshirt × 1</span>
                                </div>
                                <div class="price">Rp75.00</div>
                            </div>
                        </div>
                        <div class="action-middle">
                            <span class="subtotal">Subtotal</span>
                            <span class="total-price">Rp364.00</span>
                        </div>
                        <div class="shipping-options checkout-options">
                            <span class="shipping">Shipping</span>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="fltrt2">
                                    <label class="check-title" for="fltrt2">Flat rate</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="frsh2">
                                    <label class="check-title" for="frsh2">Free shipping</label>
                                </div>
                            </form>
                        </div>
                        <div class="action-bottom">
                            <span class="total">Total</span>
                            <span class="total-price">Rp364.00</span>
                        </div>
                    </div>
                    <div class="action-item m-0">
                        <div class="payment-options checkout-options">
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="drbank">
                                    <label class="check-title" for="drbank">Direct bank transfer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="freetrans">
                                    <label class="check-title" for="freetrans">Cash on delivery</label>
                                </div>
                                <div class="form-group last-child">
                                    <input type="checkbox" id="paypl">
                                    <label class="check-title" for="paypl">PayPal <a href="{{ route('newsDetails') }}">What is PayPal?</a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="{{ route('thankYou') }}" class="place-order-btn">Place Order</a>
                </div>
            </div>
        </div>
    </div>

@endsection