@extends('layouts.front')
@section('content')
<div class="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Shop Owner Login</h3>
                                </div>
                                <!-- form -->
                                <form>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <div class="login-input">
                                                <input id="username" name="username" type="text" class="form-control" placeholder="Enter your username"  required>
                                                <div class="login-icon"><i class="fa fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input name="password" type="password" class="form-control" placeholder="Password"  required>
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                        <button class="btn btn-warning btn-block mb10">Sign In</button>
                                        <div>
                                            <p>Have an Acount? <a href="{{url('shop-owner/register')}}">Register Account</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                       <!-- features -->
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="./images/feature_icon_1.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Loyalty Points</h4>
                                    <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit manert.</p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="./images/feature_icon_2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Instant Checkout</h4>
                                    <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit manert.</p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="./images/feature_icon_3.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Exculsive Offers</h4>
                                    <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit manert.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
<!-- /.login-form -->
@endsection