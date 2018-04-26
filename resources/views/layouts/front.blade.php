<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
    <title> kSpage </title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- top-header-->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">
                    <p class="top-text">Flexible Delivery, Fast Delivery.</p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul>
                        <li>+180-123-4567</li>
                        <li>info@demo.com</li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.top-header-->
        </div>
    </div>
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                    <!-- <div class="logo"> -->
                        <a href="{{url('/')}}"><img src="{{asset('images/ks_logo_footer.png')}}" alt="logo" width="250"> </a>
                    <!-- </div> -->
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-bg">
                        <input type="text" class="form-control" placeholder="Search Here">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="account-section">
                        <ul>
                            <li><a href="{{url('login')}}" class="title hidden-xs">Login</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="{{url('register')}}" class="title hidden-xs">Register</a></li>
                            <li><a href="#" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity">1</sup></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.account -->
                </div>
                <!-- search -->
            </div>
        </div>
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- navigations-->
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li class="has-sub"><a href="#">listing</a>
                                    <ul>
                                        <li><a href="product-list.html">Mobile List</a></li>
                                        <li><a href="product-single.html">Mobile Single </a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="about.html">shopping</a></li>
                                <li><a href="{{url('company-category')}}">company</a></li>
                                <li><a href="#">corpdiscount</a>
                                 <!--    <ul>
                                        <li><a href="checkout.html">Checkout Form</a></li>
                                        <li><a href="cart.html">Cart</a> </li>
                                        <li><a href="login-form.html">Login</a> </li>
                                        <li><a href="signup-form.html">Signup</a> </li>
                                        <li><a href="404-page.html">404-page</a> </li>
                                        <li><a href="styleguide.html">styleguide</a> </li>
                                    </ul> -->
                                </li>
                                <li class="has-sub"><a href="#">education</a>
                                    <ul>
                                        <li><a href="{{url('school-list')}}">School Listing</a></li>
                                        <li><a href="{{url('scholarship')}}">School Program</a></li>
                                        <li><a href="{{url('scholarship')}}">Scholarship</a></li>
                                    </ul>
                                </li>
                                <li><a href="template-feature.html">babyzone</a>
                                </li>
                                                                 <li><a href="about.html">career</a>
                                  <li><a href="about.html">review</a>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    
    @yield('content')
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-company-links -->
                <!-- footer-contact links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Download Mobile App</h3>
                        <img src="{{asset('images/app.jpg')}}" width="170">
                    </div>
                </div>
                <!-- /.footer-useful-links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="arrow">
                            <li><a href="{{url('/')}}">Home </a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="#">Mobiles</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-useful-links -->
                <!-- footer-policy-list-links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Policy Info</h3>
                        <ul class="arrow">
                            <li><a href="{{url('shop-owner/login')}}">Shop Owner Login</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Cancellation &amp; Returns</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">T &amp; C</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-policy-list-links -->
                <!-- footer-social links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Connect With Us</h3>
                        <div class="ft-social">
                            <span><a href="#" class="btn-social btn-facebook" ><i class="fa fa-facebook"></i></a></span>
                            <span><a href="#" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="#" class="btn-social btn-googleplus"><i class="fa fa-google-plus"></i></a></span>
                            <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span>
                            <span><a href="#" class=" btn-social btn-pinterest"><i class="fa fa-pinterest-p"></i></a></span>
                            <span><a href="#" class=" btn-social btn-instagram"><i class="fa fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
                <!-- /.footer-social links -->
            </div>
        </div>
        <!-- tiny-footer -->
        <div class="tiny-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="payment-method alignleft">
                            <ul>
                                <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard  fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                            </ul>
                        </div>
                        <p class="alignright">Copyright © All Rights Reserved 2018 Template Design by
                            <a href="http://vdoo.biz/" target="_blank" class="copyrightlink">Vdoo Solutions</a></p>
                    </div>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
    <!-- /.footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/menumaker.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sticky-header.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/multiple-carousel.js')}}"></script>
    <script src="{{asset('js/jquery.desoslide.js')}}" type="text/javascript" ></script>
     <!-- /.product-list -->
     <script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('#cssmenu ul ul li:odd').addClass('odd');
            $('#cssmenu ul ul li:even').addClass('even');
            $('#cssmenu > ul > li > a').click(function() {
                $('#cssmenu li').removeClass('active');
                $(this).closest('li').addClass('active');
                var checkElement = $(this).next();
                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('active');
                    checkElement.slideUp('normal');
                }
                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                }
                if ($(this).closest('li').find('ul').children().length == 0) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    })(jQuery);
    </script>
     <script type="text/javascript">
    $('#slideshow').desoSlide({
        thumbs: $('ul.slideshow_thumbs li > a'),
        effect: {
            provider: 'animate',
            name: 'fade'
        }

    });
    </script>

    <script type="text/javascript">
        $(function () {
 
        $("#rateYo").rateYo({
            rating: 3.6,
            starWidth: "16px"
        });
        
        });
    </script>

<script>
    function initMap() {
        var uluru = {
            lat: 23.094197,
            lng: 72.558148
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map_pin.png'

        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&callback=initMap">
    </script>
</body>

</html>