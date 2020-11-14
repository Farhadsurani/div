@include('templates.header')
    <!-- header END ==== -->
    <!-- Inner Content Box ==== -->
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/about.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">About Us</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
		<div class="content-block">
            <!-- About Us ==== -->
			{{--<div class="section-area section-sp1">--}}
                {{--<div class="container">--}}
					 {{--<div class="row">--}}
						{{--<div class="col-lg-3 col-md-6 col-sm-6 m-b30">--}}
							{{--<div class="feature-container">--}}
								{{--<div class="feature-md text-white m-b20">--}}
									{{--<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon1.png')}}" alt=""/></a> --}}
								{{--</div>--}}
								{{--<div class="icon-content">--}}
									{{--<h5 class="ttr-tilte">Our Philosophy</h5>--}}
									{{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-lg-3 col-md-6 col-sm-6 m-b30">--}}
							{{--<div class="feature-container">--}}
								{{--<div class="feature-md text-white m-b20">--}}
									{{--<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon2.png')}}" alt=""/></a> --}}
								{{--</div>--}}
								{{--<div class="icon-content">--}}
									{{--<h5 class="ttr-tilte">Kingster's Principle</h5>--}}
									{{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-lg-3 col-md-6 col-sm-6 m-b30">--}}
							{{--<div class="feature-container">--}}
								{{--<div class="feature-md text-white m-b20">--}}
									{{--<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon3.png')}}" alt=""/></a> --}}
								{{--</div>--}}
								{{--<div class="icon-content">--}}
									{{--<h5 class="ttr-tilte">Key Of Success</h5>--}}
									{{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-lg-3 col-md-6 col-sm-6 m-b30">--}}
							{{--<div class="feature-container">--}}
								{{--<div class="feature-md text-white m-b20">--}}
									{{--<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon4.png')}}" alt=""/></a> --}}
								{{--</div>--}}
								{{--<div class="icon-content">--}}
									{{--<h5 class="ttr-tilte">Our Philosophy</h5>--}}
									{{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
            {{--</div>--}}
			<!-- About Us END ==== -->
            <!-- Our Story ==== -->
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-12 col-md-12 heading-bx">
							<h2 class="m-b10">Our Story</h2>
							<h5 class="fw4"><b>{{$about[0]->title}}</b></h5>
							<p>
								{{$about[0]->content}}
							</p>
							{{--<a href="#" class="btn">Read More</a>--}}
						</div>
						{{--<div class="col-lg-7 col-md-12 heading-bx p-lr">--}}
							{{--<div class="video-bx">--}}
								{{--<img src="{{asset('public/images/about/pic1.jpg')}}" alt=""/>--}}
								{{--<a href="https://www.youtube.com/watch?v=x_sJzVe9P_8" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
							{{--</div>--}}
						{{--</div>--}}
					</div>
				</div>
			</div>
			<!-- Our Story END ==== -->
			<!-- Our Status ==== -->
			<div class="section-area content-inner section-sp1">
                <div class="container">
                    <div class="section-content">
                         <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-primary">
										<span class="counter">3000</span><span>+</span>
									</div>
									<span class="counter-text">Completed Projects</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-black">
										<span class="counter">2500</span><span>+</span>
									</div>
									<span class="counter-text">Happy Clients</span>
								</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">1500</span><span>+</span>
									</div>
									<span class="counter-text">Questions Answered</span>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Our Status END ==== -->
			<!-- About Content ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url({{asset('public/images/background/bg1.jpg')}});">
                <div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="join-content-bx text-white">
								<h2>Book Bio</h2>

								<p>This book is a gift from the author's heart to the reader's Mind. UGH!?! Not
									Another Diversity Book! "When Multicultural Competence Meets Reality"
									will shift your paradigms regarding racism, prejudices, stereotypes,
									women's issues, differences in gender, inequity, intersectionality, and
									media. Nothing is taboo. It pulls no punches and puts anything and
									everything on the table. It is designed for anyone who desires to
									experience life through the eyes of "the other." It is instructive but not
									didactic. And most importantly, it is written by a witty author who is known
									among colleagues, friends, and family for his outrageous encounters with
									people from all walks of life. His stories are now your stories.</p>
								<a target="_blank" href="https://www.amazon.com/Justin-LaKyle-Brown/e/B072J9KGRP?ref=sr_ntt_srch_lnk_1&qid=1599594036&sr=8-" class="btn button-md">Buy Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Content END ==== -->
			<!-- Testimonials ==== -->
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head text-uppercase">what people <span>say</span></h2>

						</div>
					</div>
					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						@foreach($test as $testimonial)
						<div class="item">
							<div class="testimonial-bx">
								{{--<div class="testimonial-thumb">--}}
									{{--<img src="{{asset('public/images/testimonials/pic1.jpg')}}" alt="">--}}
								{{--</div>--}}
								<div class="testimonial-info">
									<h5 class="name">{{$testimonial->name}}</h5>
									<p>{{$testimonial->desgination}}</p>
								</div>
								<div class="testimonial-content">
									<p>{{$testimonial->comment}}</p>
								</div>
							</div>
						</div>
@endforeach()
					</div>
				</div>
			</div>
			<!-- Testimonials END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->

   
    @include('inc.footer')
    <button class="back-to-top fa fa-chevron-up" ></button>
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