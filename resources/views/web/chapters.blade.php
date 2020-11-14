@include('templates.header')
<!-- header END ==== -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{asset('public/images/banner/banner3.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Chapters</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Chapters</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">

        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="widget courses-search-bx placeani" style="margin-bottom: 0 !important;">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Search Courses</label>
                                    <input name="name" type="text" required class="form-control">
                                </div>
                            </div>
                        </div>
                            <div class="">
                                @foreach($chapters as $field)
                                <div class="info-bx text-left">
                                    <h5><a href="{{ route('watch-video', ['id' => $field->id]) }}">{{ $field->name }}</a></h5>
                                    {{--<span>{{ $field->details }}</span>--}}
                                </div>
                                @endforeach
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