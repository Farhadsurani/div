<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="canonical" href="index.html" />
	<!-- OG -->
	<meta name="robots" content="index, follow">
	
	<meta name="keywords" content="Web Design, Education, Institute, Study" />
	<meta name="author" content="ThemeTrades" />
	<meta name="description" content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute." />
	
	<meta property="og:url" content="index.html" />
	<meta property="og:site_name" content="Diversity"/>
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_us" />
	<meta property="og:title" content="Diversity" />
	<meta property="og:description" content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training center or other educational institute." />
	<meta property="og:image" content="preview.png"/>
	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="index.html">
	<meta name="twitter:creator" content="@themetrades">
	<meta name="twitter:title" content="Diversity">
	<meta name="twitter:description" content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute.">
	
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset('public/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Diversity </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/assets.css')}}">
	
	<!-- TYPOGRAPHY ============================================= --><link rel="stylesheet" type="text/css" href="{{asset('public/css/typography.css')}}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/shortcodes/shortcodes.css')}}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('public/css/color/color-1.css')}}">
	
</head>
<body>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url({{asset('public/images/background/bg2.jpg')}})";>
			<a href="{{route('home')}}"><img src="{{asset('public/images/dap_logo.jpg')}}" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<p>Don't have an account? <a href="{{route('register')}}">Create one here</a></p>
				</div>	
				<form class="contact-bx" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<div class="col-md-8">
									<label>Your Email</label><br><br>
										<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus style="padding-left: 15px;">

										@if ($errors->has('email'))
											<span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<div class="col-md-8">
									<label>Your Password</label><br><br>
										<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required style="padding-left: 15px;">

										@if ($errors->has('password'))
											<span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
									<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
								</div>
								<a href="forget-password.html" class="ml-auto">Forgot Password?</a>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>
						</div>
						<div class="col-lg-12">
							<h6>Login with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="{{route('redirect')}}"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="{{route('redirectgoogle')}}"><i class="fa fa-google"></i>Google</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
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