@include('templates.header')
    <!-- header END ==== -->
     <!-- Content -->
     <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/gallery.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Our Gallery</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Our Gallery</li>
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
								 @foreach($gallery as $field)
								 <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
										 <div class="action-box">
												 <img src="{{$field->image_url}}" style="height: 250px; width: 250px" alt="">
{{--												 <a href="{{ route('course-details', ['id' => $field->id])}}" class="btn">Read More</a>--}}
										 </div>
								 </div>
								 @endforeach
							 </div>
								<div class="col-lg-12 m-b20">
									<div class="pagination-bx rounded-sm gray clearfix">
										<ul class="pagination">
											<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
										</ul>
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