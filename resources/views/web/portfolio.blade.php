@include('templates.header')
    <!-- header END ==== -->
     <!-- Content -->
     <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner1.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Portfolio</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Portfolio</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="feature-filters clearfix center m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#" style="background-color: #ffd74f; color: black"><span>All</span></a>
							</li>
							<li data-filter="book" class="btn">
								<input type="radio">
								<a href="#"><span>Book</span></a> 
							</li>
							<li data-filter="courses" class="btn">
								<input type="radio">
								<a href="#"><span>Courses</span></a> 
							</li>
							<li data-filter="education" class="btn">
								<input type="radio">
								<a href="#"><span>Education</span></a> 
							</li>
						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_1.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_1.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_2.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_1.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_3.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_3.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book education">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_4.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_4.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_5.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_5.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 education">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_6.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_6.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_7.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_7.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_8.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_8.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 education courses">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_9.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_9.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_10.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_10.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_11.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_11.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{asset('public/images/portfolio/image_12.jpg')}}" alt=""> 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{asset('public/images/portfolio/image_12.jpg')}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Soft skills</a></h4>
												
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
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