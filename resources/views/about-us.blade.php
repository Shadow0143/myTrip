@extends('layouts.app')
@section('metades')
<meta name="description" content="The best Travel Agents in India. FOR BOOKING ☎ CALL +91-9836-11-7777" />
<meta name="author" content="Meilleur Holidays" />
<meta name="keywords" content="Meilleur Holidays" />
@endsection
@section('title')
<title>Travel Agents in Kolkata - Meilleur Holidays</title>
@endsection
@section('css')
@endsection
@section('content')
@foreach($aboutAll as $about)
<section class="inner-area parallax-bg" data-background="pagebanner/{{ $about->banner_image }} " data-type="parallax" data-speed="3">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12">
                    <h4>{{ $about->module_name}}</h4>
                    <p>Home <a href="#">about</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="global-section over-layer-white pt-75 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="global-area">
                    <div class="inner-title">
                        <h2>MEILLEUR HOLIDAYS</h2>
                        <div class="sec-line"></div>
                    </div>
                    {!! html_entity_decode( $about->description ) !!}               
                </div>
            </div>
            <div class="col-xl-5 col-lg-8 col-md-10">
                <div class="map-area">
                    <img src="pageimage/{{ $about->image }}" alt="{{ $about->title }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<section class="team-section bg-f8 pt-75 pb-50">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h5>AT MEILLEUR HOLIDAYS, WE ARE ON A MISSION</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-col">
                    <div class="thumb">
                        <img src="{{ asset('images/blog/world-of-tourism.jpg') }}" alt="">
                    </div>
                    <div class="content text-center">
                        <h5>TO MAKE THE WORLD AFFORDABLE WITH CONTINUOUS INNOVATION IN THE WORLD OF TOURISM</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-col">
                    <div class="thumb">
                        <img src="{{ asset('images/blog/community-1.jpg') }}" alt="">
                    </div>
                    <div class="content text-center">
                        <h5>TO CREATE A COMMUNITY OF HAPPY TRAVELERS BY PROFESSIONALLY PLANNED HOLIDAYS WITH A PERSONAL TOUCH</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-col">
                    <div class="thumb">
                        <img src="{{ asset('images/blog/achievement.jpg') }}" alt="">
                    </div>
                    <div class="content text-center">
                        <h5>TO DEVELOP A CULTURE THAT INSPIRES TEAM MEMBERS AND ASSOCIATES FOR HIGHER LEVELS OF ACHIEVEMENTS</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-col">
                    <div class="thumb">
                        <img src="{{ asset('images/blog/indian-tourism.jpg') }}" alt="">
                    </div>
                    <div class="content text-center">
                        <h5>TO BUILD INDIA’S MOST ADMIRED TRAVEL COMPANY WITH A FAMILY OF VERSATILE TRAVELERS ALL AROUND THE WORLD</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="testimonials-section pt-25 pb-25">
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
                            <img src="{{ asset('package') }}/{{ $test->image }}" alt="{{ $test->title }}">
                        </div>
                        <div class="content">
                            <h5>{{$test->name}} <small>- {{$test->subTitle}}</small></h5>
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                            </ul>
                            <p><i class="fa fa-quote-left"></i> {{$test->description}}</p>
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
        $('#navbar-collapse-1 ul.navbar-nav li.nav-item-aboutus').addClass('active');
    });
</script>
@endpush