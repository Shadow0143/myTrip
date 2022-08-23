@extends('layouts.app')
@section('metades')
<meta name="description"
    content="We are Specialists of the North East - India. A Destination Management Company(DMC) for planning International and Domestic Holidays. Call +91-9836-11-7777" />
<meta name="author" content="Meilleur Holidays: Travel Company in Kolkata" />
<meta name="keywords" content="Meilleur Holidays: Travel Company in Kolkata" />
@endsection
@section('title')
<title>Meilleur Holidays: Travel Company in Kolkata</title>
@endsection
@section('css')
@endsection
@section('content')

{{-- <div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/800px-Google_Images_2015_logo.svg.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/800px-Google_Images_2015_logo.svg.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/800px-Google_Images_2015_logo.svg.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> --}}
<section class="slider-wrapper p-0 homebaner01">
    <div id="slider-style-one" class="carousel slide bs-slider control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="5000">
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
                                <a href="{{ url('/about-us') }}" class="btn-theme">Read more</a>
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
                <!--  <div class="icon-wrp">
                    @if (count($bannercontain) > 0)
                    @foreach ($bannercontain as $banner)
                    <div class="icon-box">
                        {!! html_entity_decode($banner->image) !!}
                        <h5>{{ $banner['title'] }}</h5>
                    </div>
                    @endforeach
                    @endif
                </div> -->

                {{-- <div class="icon-wrp">
                    <div class="icon-box">
                        <figure>
                            <img src="{{ asset('images/welcomepack') }}/{{ 'holiday01.png '}}">
                        </figure>
                        <h5>Holidays</h5>
                    </div>

                    <div class="icon-box">
                        <figure>
                            <img src="{{ asset('images/welcomepack') }}/{{ 'grouptour.png '}}">
                        </figure>
                        <h5> Group Tour</h5>
                    </div>


                    <div class="icon-box">
                        <figure>
                            <img src="{{ asset('images/welcomepack') }}/{{ 'hotelbook.png '}}">
                        </figure>
                        <h5>Hotel Booking</h5>
                    </div>

                    <div class="icon-box">
                        <figure>
                            <img src="{{ asset('images/welcomepack') }}/{{ 'airticket.png '}}">
                        </figure>
                        <h5>AirTickets</h5>
                    </div>


                    <div class="icon-box">
                        <figure>
                            <img src="{{ asset('images/welcomepack') }}/{{ 'stay-home.png '}}">
                        </figure>
                        <h5> Home Stay</h5>
                    </div>




                    <div class="icon-box">
                        <figure>
                            <img src="{{ asset('images/welcomepack') }}/{{ 'visa.png '}}">
                        </figure>
                        <h5>Visa</h5>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>
</section>
<section class="special-places-sec pb-80">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <div class="section-title-img mt-5">
                    <img src="../package/catch_line.jpg" alt="catch_line">
                </div>
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
                                    <a class="btn-theme" href="{{ url('/packages') }}/{{ $pkg->slug }}">View Details</a>
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
{{-- <section class="feature-section over-layer-black pt-75 pb-80">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4>Meilleur Holidays Features</h4>
                <h2>Why <span>Choose</span> Meilleur</h2>
                <!--     <ul>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Trip Advisory 4.8 rating out of 5 |</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Google 4.7 rating out of 5 |</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> ISO-9001-2015 certified company –Trust of Quality</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Technology driven support system</li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Average experience of team is above 15 years</li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Senior Management are more than two decades in same Travel domain.</li>
                   
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Global Presence &amp; Local support team.</li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Own Hotel and Flight inventory | Pre-Purchased Hotel + Flight Deal |</li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Guarantee of refund in case of any unexpected incident.</li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Member of Renowned International, National and Reginal Travel Association</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No hidden cost | Trusted Travel Team over 17 years |</li>
                </ul> -->


                <div class="chooserow455">
                    <ul class="row">
                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'trip45.png '}}">
                            </figure>
                            <small>4.8 rating out of 5</small>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'google78.png '}}">
                            </figure>
                            <small>Customer rating 4.8</small>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'iso.png '}}">
                            </figure>
                            <small>Trust of Quality</small>
                        </li>


                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'suppportdrive.png '}}">
                            </figure>
                            <small>System Driven Support </small>
                        </li>


                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <i class="flaticon-like"></i>
                            </figure>
                            <small>18 Years Team Experience</small>
                        </li>


                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <i class="flaticon-manager"></i>
                            </figure>
                            <small>Top Management working over two decades in Same Field </small>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'glopresence01.png '}}">
                            </figure>
                            <small>Global Presence &amp; Local support team</small>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'flighthotel45.png '}}">
                            </figure>
                            <small>Own Hotel and Flight inventory</small>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'refund45.png '}}">
                            </figure>
                            <small>Unexpected Incident</small>
                        </li>

                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'association45.png '}}">
                            </figure>
                            <small>International, National and Regional Travel Association</small>
                        </li>



                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'hidden.png '}}">
                            </figure>
                            <small>Honesty</small>
                        </li>


                        <li class="col-lg-2 col-md-2 col-sm-4 col-6">
                            <figure>
                                <img src="{{ asset('images/choose_logo') }}/{{ 'bestdeal01.png '}}">
                            </figure>
                            <small>Best Deal Guaranteed</small>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <!--  @if (count($features) > 0)
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
        @endif -->
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
                                <!-- <div class="offer-price"> Off 40%</div> -->
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
                                    <a class="btn-theme" href="{{ url('/packages') }}/{{ $teapkg->slug }}">View
                                        Details</a>
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
                                <h2>186</h2>
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
                                <h2>17057</h2>
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
                        <!-- <div class="offer-price"> Off 40%</div> -->
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
</section> --}}
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