@include('templates.header');
<body id="bg">

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner1.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Profile</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Profile</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">

        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                {{--@if($price == 0)--}}
                    {{--<div class="alert alert-danger" role="alert">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                            {{--Please Pay to access all courses!--}}
                            {{--</div>--}}
                        {{--<form method="POST" action="{{url('/paypal')}}">--}}
                            {{--<div class="col">--}}
                            {{--@csrf--}}
                            {{--<button type="submit" class="btn btn-primary float-right">Pay Now!</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}
                <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="profile-bx text-center">
                            <div class="user-profile-thumb">
                                <img src="{{$user->details->image_url}}" alt=""/>
                            </div>
                            <div class="profile-info">
                                <h4>{{$user->name}}</h4>
                                <span>{{$user->email}}</span>
                            </div>
                            <div class="profile-tabnav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#courses"><i
                                                    class="ti-book"></i>Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#quiz-results"><i
                                                    class="ti-bookmark-alt"></i>Quiz Results </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#edit-profile"><i
                                                    class="ti-pencil-alt"></i>Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#change-password"><i
                                                    class="ti-lock"></i>Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                        <div class="profile-content-bx">
                            <div class="tab-content">
                                <div class="tab-pane active" id="courses">
                                    <div class="profile-head">
                                        <h3>My Courses</h3>
                                        <div class="feature-filters style1 ml-auto">
                                            <ul class="filters" data-toggle="buttons">
                                                <li data-filter="" class="btn active">
                                                    <input type="radio">
                                                    <a href="#" style="background-color: #ffd74f; color: black"><span>All</span></a>
                                                </li>
                                                <li data-filter="publish" class="btn">
                                                    <input type="radio">
                                                    <a href="#"><span>Publish</span></a>
                                                </li>
                                                <li data-filter="pending" class="btn">
                                                    <input type="radio">
                                                    <a href="#"><span>Pending</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                            @if($price == 1)
                                        <div class="courses-filter">
                                            <div class="clearfix">
                                            <div id="masonry" class="ttr-gallery-listing magnific-image row">
                                                @foreach($course as $row)
                                                <div class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                    <div class="cours-bx">
                                                        <div class="action-box">
                                                            <img src="{{$row->details->image_url}}" alt="">
                                                            <a href="{{ route('chapters-list', ['id' => $row->id])}}" class="btn">Read More</a>
                                                        </div>
                                                        <div class="info-bx text-center">
                                                            <h5><a href="#">{{$row->name}}</a></h5>
                                                            <span>{{$row->details->details}}</span>
                                                        </div>
                                                        {{--<div class="cours-more-info">--}}
                                                            {{--<div class="review">--}}
                                                                {{--<span>3 Review</span>--}}
                                                                {{--<ul class="cours-star">--}}
                                                                    {{--<li class="active"><i class="fa fa-star"></i></li>--}}
                                                                    {{--<li class="active"><i class="fa fa-star"></i></li>--}}
                                                                    {{--<li class="active"><i class="fa fa-star"></i></li>--}}
                                                                    {{--<li><i class="fa fa-star"></i></li>--}}
                                                                    {{--<li><i class="fa fa-star"></i></li>--}}
                                                                {{--</ul>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="price">--}}
                                                                {{--<del>$190</del>--}}
                                                                {{--<h5>$120</h5>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            </div>
                                        </div>
                                                @else
                                        <div class="courses-filter" style="opacity: 0.6;">
                                            <div class="clearfix">
                                                <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                                                    <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                        <div class="cours-bx">
                                                            <div class="action-box">
                                                                <img src="{{asset('public/images/courses/pic1.jpg')}}"
                                                                     alt="">
                                                                <a href="https://diversityawarenessprogram.com/courses" class="btn">Read More</a>
                                                            </div>
                                                            <div class="info-bx text-center">
                                                                <h5><a href="#">Buy Our Course</a></h5>
                                                                <span>Diversity</span>
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

                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                            @endif
                                        </div>
                                <div class="tab-pane" id="quiz-results">
                                    <div class="profile-head">
                                        <h3>Quiz Results</h3>
                                    </div>
                                    <div class="courses-filter">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <ul class="course-features">
                                                    <li><i class="ti-book"></i> <span class="label">Lectures</span>
                                                        <span class="value">8</span></li>
                                                    <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span>
                                                        <span class="value">1</span></li>
                                                    <li><i class="ti-time"></i> <span class="label">Duration</span>
                                                        <span class="value">60 hours</span></li>
                                                    <li><i class="ti-stats-up"></i> <span
                                                                class="label">Skill level</span> <span class="value">Beginner</span>
                                                    </li>
                                                    <li><i class="ti-smallcap"></i> <span class="label">Language</span>
                                                        <span class="value">English</span></li>
                                                    <li><i class="ti-user"></i> <span class="label">Students</span>
                                                        <span class="value">32</span></li>
                                                    <li><i class="ti-check-box"></i> <span
                                                                class="label">Assessments</span> <span
                                                                class="value">Yes</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <ul class="course-features">
                                                    <li><i class="ti-book"></i> <span class="label">Lectures</span>
                                                        <span class="value">8</span></li>
                                                    <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span>
                                                        <span class="value">1</span></li>
                                                    <li><i class="ti-time"></i> <span class="label">Duration</span>
                                                        <span class="value">60 hours</span></li>
                                                    <li><i class="ti-stats-up"></i> <span
                                                                class="label">Skill level</span> <span class="value">Beginner</span>
                                                    </li>
                                                    <li><i class="ti-smallcap"></i> <span class="label">Language</span>
                                                        <span class="value">English</span></li>
                                                    <li><i class="ti-user"></i> <span class="label">Students</span>
                                                        <span class="value">32</span></li>
                                                    <li><i class="ti-check-box"></i> <span
                                                                class="label">Assessments</span> <span
                                                                class="value">Yes</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="edit-profile">
                                    <div class="profile-head">
                                        <h3>Edit Profile</h3>
                                    </div>
                                    <form class="edit-profile" method="POST" enctype="multipart/form-data" action="{{ route('edit-profile') }}">
                                        @csrf
                                        <div class="">
                                            <div class="form-group row">
                                                <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                    <h3>1. Personal Details</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full
                                                    Name</label>
                                                <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">
                                                    Email</label>
                                                <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                    {!! Form::text('email', $user->email, ['class' => 'form-control', 'readonly']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">
                                                    Image</label>
                                                <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                    {!! Form::file('image', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Occupation</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="CTO">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Company--}}
                                            {{--Name</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="EduChamp">--}}
                                            {{--<span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone--}}
                                            {{--No.</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="+120 012345 6789">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="seperator"></div>--}}

                                            {{--<div class="form-group row">--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">--}}
                                            {{--<h3>2. Address</h3>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Address</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text"--}}
                                            {{--value="5-S2-20 Dummy City, UK">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">City</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="US">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">State</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="California">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Postcode</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="000702">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>--}}

                                            {{--<div class="form-group row">--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">--}}
                                            {{--<h3 class="m-form__section">3. Social Links</h3>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Linkedin</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="www.linkedin.com">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="www.facebook.com">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="www.twitter.com">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group row">--}}
                                            {{--<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Instagram</label>--}}
                                            {{--<div class="col-12 col-sm-9 col-md-9 col-lg-7">--}}
                                            {{--<input class="form-control" type="text" value="www.instagram.com">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-12 col-sm-3 col-md-3 col-lg-2">
                                                    </div>
                                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                        <button type="submit" class="btn">Save Changes</button>
                                                        <button type="reset" class="btn-secondry">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="change-password">
                                    <div class="profile-head">
                                        <h3>Change Password</h3>
                                    </div>
                                    <form class="edit-profile">
                                        <div class="">
                                            <div class="form-group row">
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
                                                    <h3>Password</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Current
                                                    Password</label>
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                    <input class="form-control" type="password" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New
                                                    Password</label>
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                    <input class="form-control" type="password" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re Type
                                                    New Password</label>
                                                <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                    <input class="form-control" type="password" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                            </div>
                                            <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                <button type="reset" class="btn">Save changes</button>
                                                <button type="reset" class="btn-secondry">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
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