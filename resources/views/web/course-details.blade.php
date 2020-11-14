@include('templates.header')
    <!-- header END ==== -->
     <!-- Content -->
     <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner3.jpg')}});">
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
						 <div class="col-lg-9 col-md-8 col-sm-12">
							 <div class="row">
								 @foreach($course_details as $field)
								 {{--<div class="col-md-6 col-lg-4 col-sm-6 m-b30">--}}
									 <div class="cours-bx">
										 <div class="action-box">
												 <img src="{{$field->details->image_url}}" alt="">
												 <a href="{{ route('course-details', ['id' => $field->id])}}" class="btn">Read More</a>
										 </div>
										 <div class="info-bx text-center">
											 <h5><a href="{{ route('course-details', ['id' => $field->id])}}">{{ $field->name }}</a></h5>
											 <span>{{ $field->details->details}}</span>
										 </div>
									 </div>co
								 {{--</div>--}}
								 @endforeach
							 </div>
						 </div>

								<div class="col-lg-12 m-b20" style="margin-top: 3%">
									<h4>Chapters:</h4>
									<div class="info-bx text-left">
										@foreach($chapters as $chapter)
										<h5>{{ $chapter->name }}</h5>
										@endforeach
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