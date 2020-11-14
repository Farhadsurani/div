<footer>
	<div class="footer-top">
		<div class="pt-exebar">
			<div class="container">
				<div class="d-flex align-items-stretch">
					<div class="pt-logo mr-auto">
						<a href="{{route('home')}}"><img src="{{asset('public/images/dap_logo.jpg')}}" alt="" style="height: 100px; width: 200px"/></a>
					</div>
					<div class="pt-social-link">
						<ul class="list-inline m-a0">
							<li><a href="https://www.facebook.com/Diversityaware/?ref=bookmarks" class="btn-link"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/diversityaware" class="btn-link"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/user/DiversityAwareness1" class="radius-xl"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					{{--<div class="pt-btn-join">--}}
					{{--<a href="#" class="btn ">Join Now</a>--}}
					{{--</div>--}}
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
					<div class="widget">
						<h5 class="footer-title">Sign Up For A Newsletter</h5>
						<div class="subscribe-form m-b20">
							<form class="subscription-form" method="POST" action="{{ url('/news') }}">
								@csrf
								{{--<div class="ajax-message"></div>--}}
								<div class="input-group">
									<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
									<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-5 col-md-7 col-sm-12">
					<div class="row">
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Company</h5>
								<ul>
									<li><a href="{{route('home')}}">Home</a></li>
									<li><a href="{{route('about')}}">About</a></li>
									<li><a href="{{route('faq')}}">FAQs</a></li>
									<li><a href="{{route('contact')}}">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Get In Touch</h5>
								<ul>
									{{--<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>--}}
									<li><a href="{{route('blog')}}">Blog</a></li>
									<li><a href="{{route('portfolio')}}">Portfolio</a></li>
									<li><a href="{{route('event')}}">Event</a></li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Courses</h5>
								<ul>
									<li><a href="{{route('courses')}}">Courses</a></li>
									<li><a href="{{route('event-details')}}">Details</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
					<div class="widget widget_gallery gallery-grid-4">
						<h5 class="footer-title">Our Gallery</h5>
						<ul class="magnific-image">
							<li><img src="{{asset('storage/app/Gallery/1lETI4w7XSWf5fl8dJKng6MyzvhCUEFeACXUF5AE.png')}}" alt=""></li>
							<li><img src="{{asset('storage/app/Gallery/2umi5l0wmdXde4rdxlwuJcRulcBNesxyTTEQhFWp.png')}}" alt=""></li>
							<li><img src="{{asset('storage/app/Gallery/1lETI4w7XSWf5fl8dJKng6MyzvhCUEFeACXUF5AE.png')}}" alt=""></li>
							<li><img src="{{asset('storage/app/Gallery/7CNLxFMN6aLMJN8lAOvUBIPA2zEdWpVFij3gzo1A.png')}}" alt=""></li>
							<li><img src="{{asset('storage/app/Gallery/8Lj9Xl4feMVqEC59RPSwv6VxAtNt81V89gRZ0a65.png')}}" alt=""></li>
							<li><img src="{{asset('storage/app/Gallery/9s5bDjMge0eI0Vz7av2O2wUbfolr4MyziBzsFFEL.png')}}" alt=""></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center"> © 2020 <span class="text-white">DAP - Diversity Awareness Program</span>  All Rights Reserved.</div>    </div>
		</div>
	</div>
</footer>