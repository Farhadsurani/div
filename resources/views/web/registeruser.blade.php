<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="index.html"/>
    <!-- OG -->
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="Web Design, Education, Institute, Study"/>
    <meta name="author" content="ThemeTrades"/>
    <meta name="description"
          content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute."/>

    <meta property="og:url" content="index.html"/>
    <meta property="og:site_name" content="Diversity"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_us"/>
    <meta property="og:title" content="Diversity"/>
    <meta property="og:description"
          content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training center or other educational institute."/>
    <meta property="og:image" content="preview.png"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="index.html">
    <meta name="twitter:creator" content="@themetrades">
    <meta name="twitter:title" content="Diversity">
    <meta name="twitter:description"
          content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute.">

    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{asset('public/images/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/favicon.png')}}"/>

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Diversity </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/assets.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/shortcodes/shortcodes.css')}}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('public/css/color/color-1.css')}}">

</head>
<body>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <div class="account-form">
        <div class="account-head" style="background-image:url({{asset('public/images/background/bg2.jpg')}});">
            <a href="{{route('home')}}"><img src="{{asset('public/images/dap_logo.jpg')}}" alt=""></a>
        </div>
        <div class="account-form-inner">
            <div class="account-container">
                <div class="heading-bx left">
                    <h2 class="title-head">Sign Up <span>Now</span></h2>
                    <p>Login Your Account <a href="{{url('/loginuser')}}">Click here</a></p>
                </div>
                <form class="contact-bx" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row placeani">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Your Name</label>
                                    <input name="name" type="text" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Your Email Address</label>
                                    <input name="email" type="email" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Your Password</label>
                                    <input name="password" type="password" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="{{$type}}">
                        <input type="hidden" name="var" value="{{$var}}">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control"
                                           required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 m-b30">
                            <button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
                        </div>
                        <div class="col-lg-12">
                            <h6>Sign Up with Social media</h6>
                            <div class="d-flex">
                                <a class="btn flex-fill m-r5 facebook" href="#"><i
                                            class="fa fa-facebook"></i>Facebook</a>
                                <a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google
                                    Plus</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- External JavaScripts -->
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('public/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('public/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('public/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{asset('public/vendors/counter/counterup.min.js')}}"></script>
<script src="{{asset('public/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{asset('public/vendors/masonry/masonry.js')}}"></script>
<script src="{{asset('public/vendors/masonry/filter.js')}}"></script>
<script src="{{asset('public/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('public/js/functions.js')}}"></script>
<script src="{{asset('public/js/contact.js')}}"></script>
<script src="{{asset('public/vendors/switcher/switcher.js')}}"></script>
</body>
</html>