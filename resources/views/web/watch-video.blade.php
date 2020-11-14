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
                            @foreach($all_chapters as $field)
                                <div class="info-bx text-left">
                                    <div class="row">
                                        <div class="col">
                                            <h5>
                                                <a href="{{ route('watch-video', ['id' => $field->id]) }}">{{ $field->name }}</a>
                                            </h5>
                                        </div>
                                        <div class="col">
                                            @if(!isset($assign))
                                                <a href="{{route ('content',['id' => $field->id])}}"
                                                   class="btn radius-xl float-right" style="
                                               padding: 7px;">Read Content</a>
                                            @endif
                                        </div>
                                    </div>
                                    {{--<span>{{ $field->details }}</span>--}}
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        @isset($video[0]->video)
                            <video width="100%" height="100%" controls>
                                <source src="{{url('storage/app/' . $video[0]->video)}}" type="video/mp4">
                            </video>
                        @endisset

                        <div>
                            @if($status != 1)
                                <form method="POST" action="{{route('paypal')}}">
                                    <div class="col">
                                        @csrf
                                        <input type="hidden" value="{{$amount}}" name="amount">
                                        <input type="hidden" value="{{$field->id}}" name="chapter_id">
                                        <button type="submit" class="btn btn-primary float-right">Buy this Chapter
                                            (${{$amount}})
                                        </button>
                                    </div>
                                </form>
                            @else
                                <button type="submit" class="btn btn-primary float-right">View Chapter
                                    {{--                                        (${{$amount}})--}}
                                </button>
                            @endif()
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