<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="index.html" />
    <!-- OG -->
    <meta name="robots" content="index, follow">


    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{asset('public/images/dap_logo.jpg')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/dap_logo.jpg')}}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Diversity Awareness Program </title>

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
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav">
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="{{url('faq')}}"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                            <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>diversityaware@gmail.com</a></li>
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
                            <!--        @else-->
                            <!--            <a href="{{route('loginuser')}}">Login</a>-->
                            <!--    </li>-->
                            <!--    {{--<li><a href="register.html">Register</a></li>--}}-->
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
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner" style="margin-right: -119px;">
                            <ul>
                                {{--<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>--}}
                                {{--<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>--}}
                                <li><a href="https://www.facebook.com/Diversityaware/?ref=bookmarks" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/diversityaware" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/user/DiversityAwareness1" class="btn outline radius-xl"><i class="fa fa-youtube"></i></a></li>
                                <!-- Search Button ==== -->
                                <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
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
                            {{--<li><a href="{{ route('event') }}">Events</a></li>--}}
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
                            {{--</li>--}}
                            <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a target="_blank" href="https://www.amazon.com/Justin-LaKyle-Brown/e/B072J9KGRP?ref=sr_ntt_srch_lnk_1&qid=1599594036&sr=8-">My Amazon</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            {{--<li><a href="{{ route('service') }}">Services</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-dashboard"><a href="javascript:;">Dashboard <i--}}
                            {{--class="fa fa-chevron-down"></i></a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="admin/index.html">Dashboard</a></li>--}}
                            {{--<li><a href="admin/add-listing.html">Add Listing</a></li>--}}
                            {{--<li><a href="admin/bookmark.html">Bookmark</a></li>--}}
                            {{--<li><a href="admin/courses.html">Courses</a></li>--}}
                            {{--<li><a href="admin/review.html">Review</a></li>--}}
                            {{--<li><a href="admin/teacher-profile.html">Teacher Profile</a></li>--}}
                            {{--<li><a href="admin/user-profile.html">User Profile</a></li>--}}
                            {{--<li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="admin/basic-calendar.html">Basic Calendar</a></li>--}}
                            {{--<li><a href="admin/list-view-calendar.html">List View Calendar</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>--}}
                            {{--<ul class="sub-menu">--}}
                            {{--<li><a href="admin/mailbox.html">Mailbox</a></li>--}}
                            {{--<li><a href="admin/mailbox-compose.html">Compose</a></li>--}}
                            {{--<li><a href="admin/mailbox-read.html">Mail Read</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
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
    <!-- header END ==== -->