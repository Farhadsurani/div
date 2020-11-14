@include('templates.header')
    <!-- header END ==== -->
     <!-- Content -->
     <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner1.jpg')}});">);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Our Services</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Our Services</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-4 col-md-12 heading-bx">
							{{--<h2 class="m-b10">Our Story</h2>--}}
							<h4 class="fw4"><b>{{$service[3]->title}}</b></h4>
							<p>
								{{$service[3]->content}}
							</p>
						</div>
						<div class="col-lg-4 col-md-12 heading-bx" style="    margin-bottom: 20%;">
							{{--<h2 class="m-b10">Our Story</h2>--}}
							<h4 class="fw4"><b>{{$service[4]->title}}</b></h4>
							<p>
								{{$service[4]->content}}
							</p>
						</div>
						<div class="col-lg-4 col-md-12 heading-bx" style="    margin-bottom: 16%;">
							{{--<h2 class="m-b10">Our Story</h2>--}}
							<h4 class="fw4"><b>{{$service[5]->title}}</b></h4>
							<p>
								{{$service[5]->content}}
							</p>
						</div>
					</div>
				</div>
			</div>
            <!-- Your Faq End -->
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
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