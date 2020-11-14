<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 19:58:23 GMT -->
<head>

    <!-- META ============================================= -->
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

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/vendors/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/vendors/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/vendors/revolution/css/navigation.css')}}">
    <!-- REVOLUTION SLIDER END -->
</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="{{ route('faq') }}"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                            <li><a href="{{ route('contact') }}"><i class="fa fa-envelope-o"></i>diversityaware@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul>
                            <!--<li>-->
                            <!--    <select class="header-lang-bx">-->
                            <!--        <option data-icon="flag flag-uk">English UK</option>-->
                            <!--        <option data-icon="flag flag-us">English US</option>-->
                            <!--    </select>-->
                            <!--</li>-->
                            <!--@if(\Illuminate\Support\Facades\Auth::user())-->
                            <!--    <li>-->
                            <!--        <a href="{{route('profile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>-->
                            <!--    </li>-->
                            <!--@else-->
                            <!--    <li><a href="{{route('loginuser')}}">Login</a></li>-->
                            <!--    {{--<li><a href="{{route('registeruser')}}">Register</a></li>--}}-->
                            <!--@endif()-->
                            
                              @if(\Illuminate\Support\Facades\Auth::user())
                                <li>
                                    <a href="{{route('profile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}">Logout</a>
                                </li>
                            @else
                                <li><a href="{{route('loginuser')}}">Login</a></li>
                                {{--<li><a href="{{route('registeruser')}}">Register</a></li>--}}
                            @endif()
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
                    <!-- Header Logo ==== -->
                    <div class="menu-logo">
                        <a href="{{route('home')}}"><img src="{{asset('public/images/dap_logo.jpg')}}" alt="" style="height: 100px; width: 100px; opacity: 0.8;"></a>
                    </div>
                    <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
                                <li><a href="https://www.facebook.com/Diversityaware/?ref=bookmarks" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                {{--<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>--}}
                                {{--<li><a href="https://www.facebook.com/DiversityAwarenessProgram/" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>--}}
                                <li><a href="https://twitter.com/diversityaware" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/user/DiversityAwareness1" class="btn-link"><i class="fa fa-youtube"></i></a></li>
                                <!-- Search Button ==== -->
                                {{--<li class="search-btn">--}}
                                    {{--<button id="quik-search-btn" type="button" class="btn-link"><i--}}
                                                {{--class="fa fa-search"></i></button>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                    <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
                        <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
                    <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                        <div class="menu-logo">
                            <a href="{{route('home')}}"><img src="{{asset('public/images/dap_logo.jpg')}}" alt="" style="height: 100px; width: 100px; opacity: 0.8;"></a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>

                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="index-2.html">Home 1</a></li>--}}
                            {{--<li><a href="index-3.html">Home 2</a></li>--}}
                            {{--<li><a href="index-4.html">Home 3</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="{{ route('event') }}">Events</a></li>
                            <li><a href="{{ route('courses') }}">Our Courses</a>
                                {{--<ul class="sub-menu">--}}
                                {{--<ul class="sub-menu">--}}
                                {{--<li><a href="about-1.html">About 1</a></li>--}}
                                {{--<li><a href="about-2.html">About 2</a></li>--}}
                                {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Event<i class="fa fa-angle-right"></i></a>--}}
                                <!--<ul class="sub-menu">-->
                                <!--    <li><a href="{{ route('courses') }}">Our Courses</a></li>-->
                                <!--    <li><a href="{{ route('event-details') }}">Course Details</a></li>-->
                                <!--</ul>-->
                            </li>
                            {{--<li><a href="{{ route('faq') }}">FAQ's</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="faq-1.html">FAQ's 1</a></li>--}}
                            {{--<li><a href="faq-2.html">FAQ's 2</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--                                    <li><a href="{{ route('contact') }}">Contact Us</a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="contact-1.html">Contact Us 1</a></li>--}}
                            {{--<li><a href="contact-2.html">Contact Us 2</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{ route('portfolio') }}">Portfolio</a></li>--}}
                            <!--<li><a href="{{ route('profile') }}">Profile</a></li>-->
                            <!--<li><a href="{{ route('membership') }}">Membership</a></li>-->
                            {{--<li><a href="error-404.html">404 Page</a></li>--}}

                            {{--</li>--}}
                            {{--<li class="add-mega-menu"><a href="javascript:;">Courses <i--}}
                            {{--class="fa fa-chevron-down"></i></a>--}}
                            {{--<ul class="sub-menu add-menu">--}}
                            {{--<li class="add-menu-left">--}}
                            {{--<h5 class="menu-adv-title">Our Courses</h5>--}}
                            {{--<ul>--}}
                            {{--<li><a href="{{ route('courses') }}">Courses </a></li>--}}
                            {{--<li><a href="courses-details.html">Courses Details</a></li>--}}
                            {{--<li><a href="profile.html">Instructor Profile</a></li>--}}
                            {{--<li><a href="{{ route('event') }}">Upcoming Event</a></li>--}}
                            {{--<li><a href="{{ route('membership') }}">Membership</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="add-menu-right">--}}
                            {{--<img src="{{asset('public/images/adv/adv.jpg')}}" alt=""/>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{ route('blog') }}">Blog</a>--}}
                                {{--<ul class="sub-menu">--}}
                                {{--<li><a href="blog-classic-grid.html">Blog Classic</a></li>--}}
                                {{--<li><a href="blog-classic-sidebar.html">Blog Classic Sidebar</a></li>--}}
                                {{--<li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>--}}
                                {{--<li><a href="blog-standard-sidebar.html">Blog Standard Sidebar</a></li>--}}
                                {{--<li><a href="blog-details.html">Blog Details</a></li>--}}
                                {{--</ul>--}}
                            {{--</li> --}}
                            <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a target="_blank" href="https://www.amazon.com/Justin-LaKyle-Brown/e/B072J9KGRP?ref=sr_ntt_srch_lnk_1&qid=1599594036&sr=8-">My Amazon</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                        <div class="nav-social-link">
                            <li><a href="https://www.facebook.com/Diversityaware/?ref=bookmarks" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/diversityaware" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/user/DiversityAwareness1" class="btn outline radius-xl"><i class="fa fa-youtube"></i></a></li>
                        </div>
                    </div>
                    <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
            <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                 data-alias="news-gallery36" data-source="gallery"
                 style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                <div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;"
                     data-version="5.3.0.2">
                    <ul>    <!-- SLIDE  -->
                        <li data-index="rs-100"
                            data-transition="parallaxvertical"
                            data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="default"
                            data-thumb="error-404.html"
                            data-rotate="0"
                            data-fstransition="fade"
                            data-fsmasterspeed="1500"
                            data-fsslotamount="7"
                            data-saveperformance="off"
                            data-title="A STUDY ON HAPPINESS"
                            data-param1="" data-param2=""
                            data-param3="" data-param4=""
                            data-param5="" data-param6=""
                            data-param7="" data-param8=""
                            data-param9="" data-param10=""
                            data-description="Science says that Women are generally happier">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('public/images/slider/banner.jpg')}}" alt=""
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina/>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-100-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme"
                                 id="slide-100-layer-2"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['250','250','250','240']"
                                 data-fontsize="['50','50','50','30']"
                                 data-lineheight="['55','55','55','35']"
                                 data-width="full"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                                {{$pages[2]->title}}
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle tp-resizeme"
                                 id="slide-100-layer-3"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['210','210','210','210']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle tp-resizeme"
                                 id="slide-100-layer-4"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['320','320','320','290']"
                                 data-width="['800','800','700','420']"
                                 data-height="['188','188','188','120']"
                                 data-whitespace="unset"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                {{$pages[2]->content}}
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Newspaper-Button rev-btn "
                                 id="slide-100-layer-5"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['90','80','75','90']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['400','400','400','420']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[12,12,12,12]"
                                 data-paddingright="[30,35,35,15]"
                                 data-paddingbottom="[12,12,12,12]"
                                 data-paddingleft="[30,35,35,15]"
                                 style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:#ffd74f !important; border:0; border-radius:30px; margin-right:5px; margin-top: 78% !important;">
                                <a href="{{ route('service') }}" style="color: black;">READ MORE</a>
                            </div>
                            <div class="tp-caption Newspaper-Button rev-btn"
                                 id="slide-100-layer-6"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['-90','-80','-75','-90']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['400','400','400','420']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[12,12,12,12]"
                                 data-paddingright="[30,35,35,15]"
                                 data-paddingbottom="[12,12,12,12]"
                                 data-paddingleft="[30,35,35,15]"
                                 style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px; padding-top: 3%; margin-top: 75% !important;">
                                <a href="{{route('contact')}}">CONTACT US</a>
                            </div>
                        </li>
                        <li data-index="rs-200"
                            data-transition="parallaxvertical"
                            data-slotamount="default"
                            data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default"
                            data-easeout="default"
                            data-masterspeed="default"
                            data-thumb="{{asset('public/images/slider/slide1.jpg')}}"
                            data-rotate="0"
                            data-fstransition="fade"
                            data-fsmasterspeed="1500"
                            data-fsslotamount="7"
                            data-saveperformance="off"
                            data-title="A STUDY ON HAPPINESS"
                            data-param1="" data-param2=""
                            data-param3="" data-param4=""
                            data-param5="" data-param6=""
                            data-param7="" data-param8=""
                            data-param9="" data-param10=""
                            data-description="Science says that Women are generally happier">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('public/images/slider/banner.jpg')}}" alt=""
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina/>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                 id="slide-200-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:1;","ease":"Power4.easeOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme"
                                 id="slide-200-layer-2"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['250','250','250','240']"
                                 data-fontsize="['50','50','50','30']"
                                 data-lineheight="['55','55','55','35']"
                                 data-width="full"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[10,10,10,10]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;">
                                {{$pages[2]->title}}
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme"
                                 id="slide-200-layer-3"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['210','210','210','210']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme"
                                 id="slide-200-layer-4"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['320','320','320','290']"
                                 data-width="['800','800','700','420']"
                                 data-height="['188','188','188','120']"
                                 data-whitespace="unset"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400; width: 4px;">
                                {{$pages[2]->content}}
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Newspaper-Button rev-btn "
                                 id="slide-200-layer-5"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['90','80','75','90']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['400','400','400','420']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[12,12,12,12]"
                                 data-paddingright="[30,35,35,15]"
                                 data-paddingbottom="[12,12,12,12]"
                                 data-paddingleft="[30,35,35,15]"
                                 style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:#ffd74f !important; border:0; border-radius:30px; margin-right:5px; padding-top: 3%; margin-top: 78% !important;">
                                <a href="{{ route('service') }}" style="color: black;">READ MORE</a>
                            </div>
                            <div class="tp-caption Newspaper-Button rev-btn"
                                 id="slide-200-layer-6"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['-90','-80','-75','-90']"
                                 data-y="['top','top','top','top']"
                                 data-voffset="['400','400','400','420']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="button"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                 data-textAlign="['center','center','center','center']"
                                 data-paddingtop="[12,12,12,12]"
                                 data-paddingright="[30,35,35,15]"
                                 data-paddingbottom="[12,12,12,12]"
                                 data-paddingleft="[30,35,35,15]"
                                 style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px; padding-top: 3%; margin-top: 75% !important;"><a href="{{route('contact')}}">
                                CONTACT US
                                </a>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                    </ul>
                </div><!-- END REVOLUTION SLIDER -->
            </div>
        </div>
        <!-- Main Slider -->
        <div class="content-block">

            <!-- Our Services -->
            {{--<div class="section-area content-inner service-info-bx">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-4 col-md-4 col-sm-6">--}}
                            {{--<div class="service-bx">--}}
                                {{--<div class="action-box">--}}
                                    {{--<img src="{{asset('public/images/our-services/pic1.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="info-bx text-center">--}}
                                    {{--<div class="feature-box-sm radius bg-white">--}}
                                        {{--<i class="fa fa-bank text-primary"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4><a href="#">Best Industry Leaders</a></h4>--}}
                                    {{--<a href="#" class="btn radius-xl">View More</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4 col-md-4 col-sm-6">--}}
                            {{--<div class="service-bx">--}}
                                {{--<div class="action-box">--}}
                                    {{--<img src="{{asset('public/images/our-services/pic2.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="info-bx text-center">--}}
                                    {{--<div class="feature-box-sm radius bg-white">--}}
                                        {{--<i class="fa fa-book text-primary"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4><a href="#">Learn Courses Online</a></h4>--}}
                                    {{--<a href="#" class="btn radius-xl">View More</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
                            {{--<div class="service-bx m-b0">--}}
                                {{--<div class="action-box">--}}
                                    {{--<img src="{{asset('public/images/our-services/pic3.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="info-bx text-center">--}}
                                    {{--<div class="feature-box-sm radius bg-white">--}}
                                        {{--<i class="fa fa-file-text-o text-primary"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4><a href="#">Book Library & Store</a></h4>--}}
                                    {{--<a href="#" class="btn radius-xl">View More</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- Our Services END -->

            <!-- Popular Courses -->
            <div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx left">
                            <h2 class="title-head">Popular <span>Courses</span></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                            @foreach($course as $row)
                            <div class="item">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        {{--storage_path(url('storage/app/' . $this->icon)--}}
                                        <img src="{{$row->details->image_url}}" alt="">
                                        <a href="{{route('web-course-details', ['id' => $row->id])}}" class="btn">Read More</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="{{route('web-course-details', ['id' => $row->id])}}">{{$row->name}}</a></h5>
                                        <!--<span>Programming</span>-->
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span>5 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <!--<del>$190</del>-->
                                            <h5>${{$row->amount}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses END -->

            <!-- Form -->
            <div class="section-area section-sp1 bg-fix ovb1-dark online-course"
                 style="background-image:url({{asset('public/images/background/image2.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center text-black">
                            <h2>Online Courses To Learn</h2>
                            <h5>Own Your Feature Learning New Skills Online</h5>
                            <form class="cours-search" style="background-color: rgba(0,0,0,0.3); !important;">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           placeholder="What do you want to learn today?	" style="color: black">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" style="color:black;">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mw800 m-auto">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30" style="border-color: black !important;">
                                    <div class="icon-box">
                                        <h3 style="color: black !important;"><i class="ti-user" style="color: black !important;"></i><span class="counter" style="color:black;">5</span>M</h3>
                                    </div>
                                    <span class="cours-search-text" style="color:black;">Over 5 million student</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3 style="color: black !important;"><i class="ti-book" style="color: black !important;"></i><span class="counter" style="color:black;">30</span>K</h3>
                                    </div>
                                    <span class="cours-search-text" style="color:black;">30,000 Courses.</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3 style="color: black !important;"><i class="ti-layout-list-post" style="color:black;"></i><span class="counter">20</span>K</h3>
                                    </div>
                                    <span class="cours-search-text" style="color:black;">Learn Anything Online.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form END -->
            {{--<div class="section-area section-sp2">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center heading-bx">--}}
                            {{--<h2 class="title-head m-b0">Upcoming <span>Events</span></h2>--}}
                            {{--<p class="m-b0">Upcoming Education Events To Feed Brain. </p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">--}}
                            {{--@foreach($event as $events)--}}
                            {{--<div class="item">--}}
                                {{--<div class="event-bx">--}}
                                    {{--<div class="action-box">--}}
                                        {{--<img src="{{$events->image_url}}" style="height: 300px" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="info-bx d-flex">--}}
                                        {{--<div>--}}
                                            {{--<div class="event-time">--}}
                                                {{--<div class="event-date">29</div>--}}
                                                {{--<div class="event-month">October</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="event-info">--}}
                                            {{--<h4 class="event-title"><a href="#">{{$events->title}}</a></h4>--}}
                                            {{--<ul class="media-post">--}}
                                                {{--<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>--}}
                                                {{--<li><a href="#"><i class="fa fa-map-marker"></i>{{$events->city . ', ' . $events->country}}</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                            {{--<p>{{$events->description}}</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="text-center">--}}
                        {{--<a href="{{ route('event') }}" class="btn">View All Event</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <!-- Testimonials -->
            {{--<div class="section-area section-sp2 bg-fix ovbl-dark"--}}
                 {{--style="background-image:url({{asset('public/images/background/bg1.jpg')}});">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-white heading-bx left">--}}
                            {{--<h2 class="title-head text-uppercase">what people <span>say</span></h2>--}}
                            {{--<p>It is a long established fact that a reader will be distracted by the readable content of--}}
                                {{--a page</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimonial-bx">--}}
                                {{--<div class="testimonial-thumb">--}}
                                    {{--<img src="{{asset('public/images/testimonials/pic1.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-info">--}}
                                    {{--<h5 class="name">Peter Packer</h5>--}}
                                    {{--<p>-Art Director</p>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-content">--}}
                                    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
                                        {{--Ipsum has been the industry's standard dummy text ever since the 1500s, when an--}}
                                        {{--unknown printer took a galley of type...</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimonial-bx">--}}
                                {{--<div class="testimonial-thumb">--}}
                                    {{--<img src="{{asset('public/images/testimonials/pic2.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-info">--}}
                                    {{--<h5 class="name">Peter Packer</h5>--}}
                                    {{--<p>-Art Director</p>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-content">--}}
                                    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
                                        {{--Ipsum has been the industry's standard dummy text ever since the 1500s, when an--}}
                                        {{--unknown printer took a galley of type...</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- Testimonials END -->

            <!-- Recent News -->
            {{--<div class="section-area section-sp2">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 heading-bx left">--}}
                            {{--<h2 class="title-head">Recent <span>News</span></h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">--}}
                        {{--@foreach($news as $detail)--}}
                        {{--<div class="item">--}}
                            {{--<div class="recent-news">--}}
                                {{--<div class="action-box">--}}
                                    {{--<img src="{{$detail->image_url}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="info-bx">--}}
                                    {{--<ul class="media-post">--}}
                                        {{--<li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-user"></i>By {{$detail->author}}</a></li>--}}
                                    {{--</ul>--}}
                                    {{--<h5 class="post-title"><a href="blog-details.html">{{$detail->title}}</a></h5>--}}
                                    {{--<p>{{$detail->description}}</p>--}}
                                    {{--<div class="post-extra">--}}
                                        {{--<a href="{{route('blog')}}" class="btn-link">READ MORE</a>--}}
                                        {{--<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                            {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- Recent News End -->

        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <!-- Footer ==== -->
    <!--<footer>-->
    <!--    <div class="footer-top">-->
    <!--        <div class="pt-exebar">-->
    <!--            <div class="container">-->
    <!--                <div class="d-flex align-items-stretch">-->
    <!--                    <div class="pt-logo mr-auto">-->
    <!--                        <a href="{{route('home')}}"><img src="{{asset('public/images/dap_logo.jpg')}}" alt="" style="height: 100px; width: 200px"/></a>-->
    <!--                    </div>-->
    <!--                    <div class="pt-social-link">-->
    <!--                        <ul class="list-inline m-a0">-->
    <!--                            <li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>-->
    <!--                            <li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>-->
    <!--                            <li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>-->
    <!--                            <li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="pt-btn-join">-->
    <!--                        <a href="#" class="btn ">Join Now</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">-->
    <!--                    <div class="widget">-->
    <!--                        <h5 class="footer-title">Sign Up For A Newsletter</h5>-->
    <!--                        <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on-->
    <!--                            job searching.</p>-->
    <!--                        <div class="subscribe-form m-b20">-->
    <!--                            <form class="subscription-form"-->
    <!--                                  action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php"-->
    <!--                                  method="post">-->
    <!--                                <div class="ajax-message"></div>-->
    <!--                                <div class="input-group">-->
    <!--                                    <input name="email" required="required" class="form-control"-->
    <!--                                           placeholder="Your Email Address" type="email">-->
    <!--                                    <span class="input-group-btn">-->
				<!--							<button name="submit" value="Submit" type="submit" class="btn"><i-->
    <!--                                                    class="fa fa-arrow-right"></i></button>-->
				<!--						</span>-->
    <!--                                </div>-->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-12 col-lg-5 col-md-7 col-sm-12">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">-->
    <!--                            <div class="widget footer_widget">-->
    <!--                                <h5 class="footer-title">Company</h5>-->
    <!--                                <ul>-->
    <!--                                    <li><a href="index-2.html">Home</a></li>-->
    <!--                                    <li><a href="about-1.html">About</a></li>-->
    <!--                                    <li><a href="faq-1.html">FAQs</a></li>-->
    <!--                                    <li><a href="contact-1.html">Contact</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">-->
    <!--                            <div class="widget footer_widget">-->
    <!--                                <h5 class="footer-title">Get In Touch</h5>-->
    <!--                                <ul>-->
    <!--                                    <li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a>-->
    <!--                                    </li>-->
    <!--                                    <li><a href="blog-classic-grid.html">Blog</a></li>-->
    <!--                                    <li><a href="portfolio.html">Portfolio</a></li>-->
    <!--                                    <li><a href="event.html">Event</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">-->
    <!--                            <div class="widget footer_widget">-->
    <!--                                <h5 class="footer-title">Courses</h5>-->
    <!--                                <ul>-->
    <!--                                    <li><a href="courses.html">Courses</a></li>-->
    <!--                                    <li><a href="courses-details.html">Details</a></li>-->
    <!--                                    <li><a href="membership.html">Membership</a></li>-->
    <!--                                    <li><a href="profile.html">Profile</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">-->
    <!--                    <div class="widget widget_gallery gallery-grid-4">-->
    <!--                        <h5 class="footer-title">Our Gallery</h5>-->
    <!--                        <ul class="magnific-image">-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic1.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic1.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic2.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic2.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic3.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic3.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic4.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic4.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic5.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic5.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic6.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic6.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic7.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic7.jpg')}}" alt=""></a></li>-->
    <!--                            <li><a href="{{asset('public/images/gallery/pic8.jpg')}}" class="magnific-anchor"><img-->
    <!--                                            src="{{asset('public/images/gallery/pic8.jpg')}}" alt=""></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="footer-bottom">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-12 col-md-12 col-sm-12 text-center"> © 2019 <span-->
    <!--                            class="text-white">DAP - Diversity Awareness Program</span> All Rights Reserved.-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</footer>-->
    @include('inc.footer')
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
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
<!-- Revolution JavaScripts Files -->
<script src="{{asset('public/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('public/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        var ttrevapi;
        var tpj = jQuery;
        if (tpj("#rev_slider_486_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_486_1");
        } else {
            ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "//educhamp.themetrades.com/demo/xhtml/assets/vendors/revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    },

                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [768, 600, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 20:02:03 GMT -->
</html>