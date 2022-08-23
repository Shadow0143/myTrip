@extends('layouts.app')
@section('metades')
    <meta name="description" content="We are Specialists of the North East - India. A Destination Management Company(DMC) for planning International and Domestic Holidays. Call +91-9836-11-7777" />
    <meta name="author" content="Meilleur Holidays: Travel Company in Kolkata" />
    <meta name="keywords" content="Meilleur Holidays: Travel Company in Kolkata" />
@endsection
@section('title')
    <title>Meilleur Holidays: Travel Company in Kolkata</title>
@endsection
@section('css')
@endsection
@section('content')
    <section class="slider-wrapper p-0 homebaner01">
        <div id="slider-style-one" class="carousel slide bs-slider control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">
            <ol class="carousel-indicators">
                @foreach ($bannerall as $bk => $banner)
                    @php $active = ($bk==0) ? 'active' : ''; @endphp
                    <li data-target="#slider-style-one" data-slide-to="{{ $bk }}" class="{{ $active }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($bannerall as $bk => $banner)
                    @php $active = ($bk==0) ? 'active' : ''; @endphp
                    <div class="carousel-item {{ $active }}">
                        <img src="banner/{{ $banner->banner_image }} " alt="banner_images" class="slide-image" />
                        <div class="bs-slider-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="slide-text home-3 slide-style-center">
                                    <div class="sub-title">
                                        <h4>{!! html_entity_decode($banner->title) !!}</h4>
                                    </div>
									<div class="title-box">
                                        {!! html_entity_decode($banner->sub_title) !!}
                                    </div>
                                    <div class="btn-box">
                                        <a href="#" class="btn-theme">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="left carousel-control" href="#slider-style-one" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#slider-style-one" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="welcome-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                    <div class="icon-wrp">
                    @if (count($bannercontain) > 0)
            @foreach ($bannercontain as $banner)
                        <div class="icon-box">
                        {!! html_entity_decode($banner->image) !!}
                            <h5>{{ $banner['title'] }}</h5>
                        </div> 
                        @endforeach
                @endif                       
                    </div>
               </div>                
            </div>           
        </div>
    </section>
    <section class="special-places-sec pb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Welcome to Meilleurholidays</h4>
                    <h2>Special <span>Tour</span> Places</h2>
                    <p>Love your morning cup of joe even more by discovering what goes into a satisfying brew on a coffee
                        tour.</p>
                </div>
            </div>
            @if (count($packages) > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="specialplaces_carousel owl-carousel owl-theme owl-navst">
                            @foreach ($packages as $pkg)
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{ asset('package') }}/{{ $pkg->image }}" alt="Special Packages">
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5>{{ $pkg->price }}/-</h5>
                                                </div>
                                                <div class="title-box">
                                                    {!! $pkg->shortDescription !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>{!! $pkg->duration !!}</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>{!! $pkg->numberOfPerson !!}</a></li>
                                            </ul>
                                            <p>{!! $pkg->whatYouWillGet !!}</p>
                                            <div class="listboxbtm14">
                                                <a class="btn-theme" href="{{ url('/contact') }}">Book Now</a>
                                                <a class="btn-theme" href="{{ url('/packages-details') }}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="feature-section over-layer-black pt-75 pb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Meilleurholidays Features</h4>
                    <h2>Why <span>Choose</span> Meilleur</h2>
                    <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or
                        web designs.
                    </p>
                </div>
            </div>
            @if (count($features) > 0)
                <div class="row">
                    @foreach ($features as $feature)
                        <div class="col-md-4">
                            <div class="feature-item">
                                <div class="icon-box">{!! html_entity_decode($feature->subTitle) !!}</div>
                                <div class="content">
                                    <h3><a href="javascript:void(0)">{{ $feature->name }}</span></a></h3>
                                    <p>{{ $feature->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <section class="special-packages-sec pt-75 pb-80">
        <div class="container">
		@if (count($specialoffer) > 0)
			@foreach ($specialoffer as $speci)
            <div class="row">
                <div class="col-md-9">
                    <div class="section-title stitle-left">
                        <h4>Tea Tourism packages</h4>
                        <h2>{{ $speci->name }}</h2>
                        <p>{{ $speci->description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    @if (count($teaTourismPackages) > 0)
                        <div class="row">
                            @foreach ($teaTourismPackages as $teapkg)
                                <div class="col-md-6">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{ asset('package') }}/{{ $teapkg->image }}" alt="{{ $teapkg->title }}">
                                            <div class="offer-price"> Off 40%</div>
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5>{{ $teapkg->price }}/-</h5>
                                                </div>
                                                <div class="title-box">
                                                    {!! $teapkg->shortDescription !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>{!! $teapkg->duration !!}</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>{!! $teapkg->numberOfPerson !!}</a></li>
                                            </ul>
                                            <p>{!! $teapkg->whatYouWillGet !!}</p>
                                            <div class="listboxbtm14">
                                                <a class="btn-theme" href="{{ url('/contact') }}">Book Now</a>
                                                <a class="btn-theme" href="{{ url('/packages') }}/{{ $teapkg->slug }}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-0">
                    <div class="add-box thumb">
                    <img src="{{ asset('specialoffer') }}/{{ $speci->image }}" alt="">
                    </div>
                </div>
            </div>
			@endforeach
			@endif
        </div>
    </section>
    <section class="funfact-section over-layer-black pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <div class="content">
                                    <h2>2583</h2>
                                    <h3><a href="#">Travel Package</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-plane"></i>
                                </div>
                                <div class="content">
                                    <h2>1879</h2>
                                    <h3><a href="#">Locations Made</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="content">
                                    <h2>7215</h2>
                                    <h3><a href="#">Satisfied Client</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="content">
                                    <h2>1639</h2>
                                    <h3><a href="#">Recomended Trip</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-hotel-sec pt-75 pb-65">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Tourism Packages Collection</h4>
                    <h2>Latest <span>Packages</span> Collection</h2>
                    <p>We Are Here To Map Your Dream</p>
                </div>
            </div>
            @if (count($packages) > 0)
                <div class="row">
                    @foreach ($packages as $pkg)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="special-packages">
                                <div class="thumb">
                                    <img src="{{ asset('package') }}/{{ $pkg->image }}" alt="{{ $pkg->title }}">
                                    <div class="offer-price"> Off 40%</div>
                                    <div class="post-title-box">
                                        <div class="price-box">
                                            <h5>{{ $pkg->price }}/-</h5>
                                        </div>
                                        <div class="title-box">
                                            {!! $pkg->shortDescription !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="info">
                                        <li><a href="#"><i class="fa fa-calendar"></i>{!! $pkg->duration !!}</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>{!! $pkg->numberOfPerson !!}</a></li>
                                    </ul>
                                    <p>{!! $pkg->whatYouWillGet !!}</p>
                                    <div class="listboxbtm14">
                                        <a class="btn-theme" href="{{ url('/contact') }}">Book Now</a>
                                        <a class="btn-theme" href="{{ url('/packages') }}/{{ $teapkg->slug }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <section class="testimonials-section pt-25 pb-25">
        <div class="container">
            <div class="row">
                @if (count($testimonial) > 0)
                    <div class="col-lg-12">
                        <div class="inner-title">
                            <h2>Our <span>Client's Say</span></h2>
                            <div class="sec-line mb-40"></div>
                        </div>
                        <div class="testimonials-post testimonials_slide owl-carousel owl-theme owl-navst st-three">
                            @foreach ($testimonial as $test)
                                <div class="testimonials-item">
                                    <div class="thumb">
                                        <img src="{{ asset('package') }}/{{ $test->image }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>{{ $test->name }} <small>- {{ $test->subTitle }}</small></h5>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                            <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        </ul>
                                        <p><i class="fa fa-quote-left"></i> {{ $test->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item').removeClass('active');
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item-home').addClass('active');
        });
    </script>
@endpush