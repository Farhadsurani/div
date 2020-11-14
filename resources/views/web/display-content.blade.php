@include('templates.header')
    <!-- header END ==== -->
       <!-- Inner Content Box ==== -->
       <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner1.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Chapter Content</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Chapter Content</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
        <div class="content-block">
			<div class="section-area section-sp2">
				<div class="container">
						@foreach($pages as $page)
							<h5><?php echo $page->chapter->name ?></h5>

							<?php echo $page->details ?>
							@endforeach
				</div>
			</div>

					<!-- Pagination ==== -->
					<div class="pagination-bx rounded-sm gray clearfix">
						<ul class="pagination">
							<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
						</ul>
					</div>
					<!-- Pagination END ==== -->
				</div>
			</div>
			<!-- Blog Grid END ==== -->
        </div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
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