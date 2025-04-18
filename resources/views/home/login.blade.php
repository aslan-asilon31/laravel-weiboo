@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable6.css') . '" />';
$title = 'Log In';
$subTitle='Home';
$subTitle2='Log In';
$script = '<script src="' . asset('assets/js/vendors/zoom.js') . '"></script>';
@endphp

@section('content')

    <!--login-area start-->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mr-10">
                    <div class="login-form">
                        <div class="section-title">
                            <h2>Login</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form">
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Username or email address*" required />
                                    </div>
                                    <div class="form">

                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Password*" required />
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <input type="checkbox" class="form-check-input" id="remember" />
                                        <label for="remember" class="form-label">Remember Me</label>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Login</button>
                                    </div>
                                    <a class="forgot-password" href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ml-10">
                    <div class="register-form">
                        <div class="section-title">
                            <h2>Registration</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form">
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Username or email address*" required />
                                    </div>
                                    <div class="form">

                                        <input type="email" class="form-control" id="username"
                                            placeholder="Email address*" required />
                                    </div>
                                    <div class="form">
                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Password*" required />
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login-area end-->

@endsection