@extends('layouts.front')
@section('content')
<!-- sign-up form -->
<div class="content">
        <div class="container">
            <div class="box sing-form">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <!-- form -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Create Your Account</h3>
                                    <p>Please fill all Resgister form Fields Below. </p>
                                </div>
                                <form>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name">

                                            </label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter Your Name"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="phone"></label>
                                            <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <input id="email" name="emaol" type="text" class="form-control" placeholder="Enter your email id"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label  sr-only" for="password"></label>
                                            <input id="password" name="password" type="password" class="form-control" placeholder="create your password"  required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <button class="btn btn-primary btn-block mb10">Register</button>
                                        <div>
                                            <p>Have an Acount? <a href="#">Login</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.form -->
                        </div>
                    </div>
                    <!-- features -->
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="./images/feature_icon_2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>What you want to post?</h4>
                                    <aside>
                                        <input type="checkbox" id="subscribeNews" name="subscribe" value="Product">
                                        <label>Product</label>
                                    </aside>
                                    <aside>
                                        <input type="checkbox" id="education" name="education" value="Education">
                                        <label>Education</label>
                                    </aside>
                                    <aside>
                                        <input type="checkbox" id="event" name="event" value="Event">
                                        <label>Event</label>
                                    </aside>
                                    <aside>
                                        <input type="checkbox" id="company" name="company" value="Company">
                                        <label>Company</label>
                                    </aside>
                                    <aside>
                                        <input type="checkbox" id="review" name="review" value="Review">
                                        <label>Review</label>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.sign-up form -->
    @endsection