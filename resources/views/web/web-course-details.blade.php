@include('templates.header')
<!-- header END ==== -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner1.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Course Details</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Course Details</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12">

                        @foreach($course as $row)
                            <div class="courses-post">
                                <div class="ttr-post-media media-effect">
                                    <a href="#"><img src="{{ $row->details->image_url }}" alt=""></a>
                                </div>
                                <div class="ttr-post-info">
                                    <div class="ttr-post-title ">
                                        <h2 class="post-title">{{$row->name}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="courese-overview" id="overview">
                                <div class="row">
                                    {{--<div class="col-md-12 col-lg-5">--}}
                                    {{--<ul class="course-features">--}}
                                    {{--<li><i class="ti-book"></i> <span class="label">Topics</span> <span class="value">Web design</span></li>--}}
                                    {{--<li><i class="ti-help-alt"></i> <span class="label">Host</span> <span class="value">Diversity</span></li>--}}
                                    {{--<li><i class="ti-time"></i> <span class="label">Location</span> <span class="value">#45 Road</span></li>--}}
                                    {{--<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>--}}
                                    {{--<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>--}}
                                    {{--<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>--}}
                                    {{--<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}
                                    <div class="col-md-12 col-lg-7">
                                        <h5 class="m-b5">Course Description:</h5>
                                        <div class="ttr-post-text">
                                            {!! $row->details->details !!}
                                        </div>
                                        {{--<h5 class="m-b5">Certification</h5>--}}
                                        {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
                                        {{--<h5 class="m-b5">Course Content</h5>--}}
                                        {{--<ul class="list-checked primary">--}}
                                        {{--<li>Over 37 lectures and 55.5 hours of content!</li>--}}
                                        {{--<li>LIVE PROJECT End to End Software Testing Training Included.</li>--}}
                                        {{--<li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>--}}
                                        {{--<li>Information packed practical training starting from basics to advanced testing techniques.</li>--}}
                                        {{--<li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>--}}
                                        {{--<li>Course content designed by considering current software testing technology and the job market.</li>--}}
                                        {{--<li>Practical assignments at the end of every session.</li>--}}
                                        {{--<li>Practical learning experience with live project work and examples.cv</li>--}}
                                        {{--</ul>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7" style="padding-top: 20px;">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="m-b5">Chapters:</h5> &nbsp;&nbsp;
                                    </div>
                                    <div class="col">
                                        @foreach($chapter as $field)
                                            <ul>
                                                <li>
                                                    <a href="{{route('watch-video', ['id' => $field->id])}}"
                                                       style="color: black; list-style: none ">{{$field->name}}</a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 m-b30">
                        <div class="bg-primary text-white contact-info-bx m-b30">
                            {{--<h2 class="m-b10 title-head">Contact <span>Information</span></h2>--}}
                            {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                            {{--<div class="widget widget_getintuch">--}}
                            {{--<ul>--}}
                            {{--<li><i class="ti-location-pin"></i>75k Newcastle St. Ponte Vedra Beach, FL 309382 New York</li>--}}
                            {{--<li><i class="ti-mobile"></i>0800-123456 (24/7 Support Line)</li>--}}
                            {{--<li><i class="ti-email"></i>info@example.com</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            <h5 class="m-t0 m-b20">Follow Us</h5>
                            <ul class="list-inline contact-social-bx">
                                <li><a href="https://www.facebook.com/Diversityaware/?ref=bookmarks"
                                       class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/diversityaware" class="btn outline radius-xl"><i
                                                class="fa fa-twitter"></i></a></li>
                                {{--<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>--}}
                                {{--<li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>--}}
                                <li><a href="https://www.youtube.com/user/DiversityAwareness1"
                                       class="btn outline radius-xl"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        @if($status == 1)
                            <form method="POST" action="{{url('/paypal')}}">
                                <div class="col">
                                    @csrf
                                    <input type="hidden" value="{{$row->amount}}" name="amount">
                                    <input type="hidden" value="{{$row->id}}" name="course_id">

                                    <button class="btn btn-primary float-right">Go to Course</button>
                                    @else
                                        <button type="submit" class="btn btn-primary float-right">Buy this Course
                                            ({{$row->amount}})
                                        </button>

                                </div>
                            </form>
                        @endif()
                        @endforeach
                        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.1298878182047!2d-81.38369578541523!3d30.204840081824198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e437ac927a996b%3A0x799695b1a2b970ab!2sNona+Blue+Modern+Tavern!5e0!3m2!1sen!2sin!4v1548177305546" class="align-self-stretch d-flex" style="width:100%; min-width:100%; min-height:400px;" allowfullscreen></iframe>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
<!-- Content END-->
@include('inc.footer')
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
</body>
</html>