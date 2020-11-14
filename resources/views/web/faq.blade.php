@include('templates.header')
    <!-- header END ==== -->
     <!-- Content -->
     <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/faq.jpg')}});">);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Frequently Asked Questions</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Faqs</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
            <div class="section-area section-sp1">
                <div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="heading-bx left">
								<h2 class="m-b10 title-head">Have a <span> Questions</span></h2>
							</div>
							<p class="m-b10"> "Have a question about our products and services, contact us today. A representative will contact you within the next 48 hours</p>
							<!--<div class="row">-->
							<!--	<div class="col-lg-6 col-md-6 col-sm-6 m-b30">-->
							<!--		<div class="feature-container">-->
							<!--			<div class="feature-md text-white m-b20">-->
							<!--				<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon1.png')}}" alt=""></a> -->
							<!--			</div>-->
							<!--			<div class="icon-content">-->
							<!--				<h5 class="ttr-tilte">Our Philosophy</h5>-->
							<!--				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--	<div class="col-lg-6 col-md-6 col-sm-6 m-b30">-->
							<!--		<div class="feature-container">-->
							<!--			<div class="feature-md text-white m-b20">-->
							<!--				<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon2.png')}}" alt=""></a> -->
							<!--			</div>-->
							<!--			<div class="icon-content">-->
							<!--				<h5 class="ttr-tilte">Kingster's Principle</h5>-->
							<!--				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--	<div class="col-lg-6 col-md-6 col-sm-6 m-b30">-->
							<!--		<div class="feature-container">-->
							<!--			<div class="feature-md text-white m-b20">-->
							<!--				<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon3.png')}}"" alt=""></a> -->
							<!--			</div>-->
							<!--			<div class="icon-content">-->
							<!--				<h5 class="ttr-tilte">Key Of Success</h5>-->
							<!--				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--	<div class="col-lg-6 col-md-6 col-sm-6 m-b30">-->
							<!--		<div class="feature-container">-->
							<!--			<div class="feature-md text-white m-b20">-->
							<!--				<a href="#" class="icon-cell"><img src="{{asset('public/images/icon/icon4.png')}}"" alt=""></a> -->
							<!--			</div>-->
							<!--			<div class="icon-content">-->
							<!--				<h5 class="ttr-tilte">Our Philosophy</h5>-->
							<!--				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
						</div>
						<div class="col-lg-4 col-md-12">
							<form class="contact-bx" method="POST" action="{{ route('contact-us') }}">
							@csrf
						{{--<div class="ajax-message"></div>--}}
							<div class="heading-bx left">
								<h2 class="title-head">Get In <span>Touch</span></h2>
								{{--<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>--}}
							</div>
							<div class="row placeani">
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Your Name</label>
											<input name="name" type="text" required class="form-control valid-character">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group"> 
											<label>Your Email Address</label>
											<input name="email" type="email" class="form-control" required >
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Your Phone</label>
											<input name="phone" type="text" required class="form-control int-value">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Subject</label>
											<input name="subject" type="text" required class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<label>Type Message</label>
											<textarea name="message" rows="4" class="form-control" required ></textarea>
										</div>
									</div>
								</div>
								{{--<div class="col-lg-12">--}}
									{{--<div class="form-group">--}}
										{{--<div class="input-group">--}}
											{{--<div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>--}}
											{{--<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								<div class="col-lg-12">
									<button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
								</div>
							</div>
						</form>
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