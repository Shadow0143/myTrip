@extends('layouts.app')
@section('metades')
<meta name="description" content="{{ $data[0]['metaDiscription'] }}" />
<meta name="author" content="{{ $data[0]['metaTitle'] }}" />
<meta name="keywords" content="{{ $data[0]['metaTitle'] }}" />
@endsection
@section('title')
<title>{{ $data[0]['metaTitle'] }}</title>
@endsection
@section('css')
<style>
    .tour-sections p {
        color: #000;
        font-weight: 700;
        padding: 6px;
    }
</style>
@endsection
@section('content')
@if (count($data) > 0)
@foreach ($data as $item)
<section class="inner-area parallax-bg" data-background="{{ asset('package') }}/{{ $item['backgroundImage'] }}" data-type="parallax" data-speed="3">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $item['title'] }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="breadcursec">
    <div class="container">
        <ul class="breadcrumb01">
            <li><a href="#">Home</a></li>
            <li><a href="#">Package</a></li>
            <li><a href="#">{{ $item['title'] }}</a></li>
        </ul>
    </div>
</div>
<section class="special-packages-sec  pt-85">
    <div class="container">
        <div class="grid-mb">
            <div class="special-packages dtl-st">
                <div>
                    @if (count($item['section']) > 0)
                    @foreach ($item['section'] as $section)
                    @if ($section['sectionName'] == 'banner')
                    <div class="thumb">
                        <ul class="packages_slider">
                            @if (count($section['sub_sections']) > 0)
                            @foreach ($section['sub_sections'] as $subSection)
                            <li>
                                <a href="#"><img src="{{ asset('package') }}/{{ $subSection['image'] }}" alt=""></a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                        <div class="post-title-box packbtm85">
                            <div class="price-box">
                                <h5>{{ $item['price'] }}/-</h5>
                                <h6>Starts From</h6>
                            </div>
                            <div class="title-box">
                                <h4>{{ $item['title'] }}</h4>
                                <h3>{{ $item['subTitle'] }}</h3>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                    <div class="tourdetsec55">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                @if (count($item['section']) > 0)
                                @foreach ($item['section'] as $section)
                                @if ($section['sectionName'] == 'package-tour')
                                <div class="tourdetails15">
                                    <h3>{{ $section['title'] }}</h3>
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        @if (count($section['sub_sections']) > 0)
                                        @foreach ($section['sub_sections'] as $subSection)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $subSection['id'] }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    <strong>{!! $subSection['title'] !!}</strong>
                                                </button>
                                            </h2>
                                            <div id="flush-collapse{{ $subSection['id'] }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="tourcategoy01">
                                                        {!! $subSection['longDescription'] !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($item['section']) > 0)
                @foreach ($item['section'] as $section)
                @if ($section['sectionName'] == 'hotels')
                <div class="content">
                    <div class="small-hotel">
                        <h6>{{ $section['title'] }}</h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @if (count($section['sub_sections']) > 0)
                            @foreach ($section['sub_sections'] as $dk => $subSection)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if ($dk == 0) active show @endif" href="#tab-{{ $subSection['id'] }}" aria-controls="#tab-{{ $subSection['id'] }}" role="tab" data-toggle="tab">{{ $subSection['subTitle'] }}</button>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @if (count($section['sub_sections']) > 0)
                            @foreach ($section['sub_sections'] as $dk => $subSection)
                            <div role="tabpanel" class="tab-pane @if ($dk == 0) active show @endif" class="tab-pane" id="tab-{{ $subSection['id'] }}">
                                <div class="hotelcatagory01">
                                    <div class="text">
                                        <h5>{{ $subSection['title'] }}</h5>
                                        @if(!empty($subSection['shortDescription']))
                                        <p>{!! $subSection['shortDescription'] !!}</p>
                                        @endif
                                    </div>
                                    @if (count($subSection['sub_sub_section']) > 0)
                                    <div class="thumb">
                                        @foreach ($subSection['sub_sub_section'] as $subSubSection)
                                        <img src="{{ asset('package') }}/{{ $subSubSection['image'] }}" alt="" class="thumb-catagory">
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <a class="btn-theme" href="{{url('/contact')}}">Book Now</a>
                </div>
                @endif
                @endforeach
                @endif
                @if (count($item['section']) > 0)
                @foreach ($item['section'] as $section)
                @if ($section['sectionName'] == 'summary')
                <div class="tourdetsec55 summarytour889">
                    <div class="conatiner12">
                        <h3> {{ $section['title'] }}</h3>
                        <div class="tourdetails15">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @if (count($section['sub_sections']) > 0)
                                @foreach ($section['sub_sections'] as $subSection)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $subSection['id'] }}" aria-expanded="false" aria-controls="flush-collapse5">
                                            {!! $subSection['title'] !!}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $subSection['id'] }}" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="tourcategoy01 summar045">
                                                {!! $subSection['longDescription'] !!}
                                            </div>
                                            @if ($subSection['image'])
                                            <div style="padding-top: 20px;">
                                                <img style="border-radius: 8px; max-width: 60%; display: block; margin-left: auto; margin-right: auto; height: auto;" src="{{ asset('package') }}/{{ $subSection['image'] }}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                @if (count($item['section']) > 0)
                @foreach ($item['section'] as $section)
                @if ($section['sectionName'] == 'what-you-will-get')
                <div class="row">
                    <h3 class="tour-section-title">{{ $section['title'] }}</h3>
                    @if (count($section['sub_sections']) > 0)
                    @foreach ($section['sub_sections'] as $subSection)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="tour-sections">
                            @if ($subSection['image'])
                            <img src="{{ asset('package') }}/{{ $subSection['image'] }}">
                            @endif
                            <p>{{ $subSection['title'] }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                @endif
                @endforeach
                @endif
                @if (count($item['section']) > 0)
                @foreach ($item['section'] as $section)
                @if ($section['sectionName'] == 'information')
                <div class="tourdetsec55 summarytour889">
                    <div class="conatiner">
                        <h3> {{ $section['title'] }}</h3>
                        <div class="tourdetails15">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @if (count($section['sub_sections']) > 0)
                                @foreach ($section['sub_sections'] as $subSection)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1{{ $subSection['id'] }}" aria-expanded="false" aria-controls="flush-collapse11">
                                            <strong>{!! $subSection['title'] !!}</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse1{{ $subSection['id'] }}" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="tourcategoy01 summar045">
                                                {!! $subSection['longDescription'] !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>


<section class="padd000 similarsection45">
    <div class="container">
        <div class="similar_content88">
            <h2 class="title01">Similar Packages</h2>
            @if (count($similarPackages) > 0)
            <div class="row">
                @foreach ($similarPackages as $pkg)
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{ asset('package') }}/{{ $pkg->image }}" alt="" class="thumb-image">
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5>{{ $pkg->price }}/-</h5>
                                </div>
                                <div class="title-box">
                                    <p class="similar-package-description"> {!! $pkg->shortDescription !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>{!! $pkg->duration !!}</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>{!! $pkg->numberOfPerson !!}</a></li>
                            </ul>
                            <p>{!! $pkg->whatYouWillGet !!}</p>
                            <div class="listboxbtm144">
                                <a class="btn-theme" href="{{url('/contact')}}">Book Now</a>
                                <a class="btn-theme btn-theme2" href="{{ url('/packages') }}/{{ $pkg->slug }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>


{{-- <section class="testimonials-section">
    <div class="container">
        <div class="row">
            @if (count($testimonial) > 0)
            <div class="col-lg-12">
                <div class="inner-title mt-25">
                    <h2>Our Client's Say</h2>
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
                            <p><i class="fa fa-quote-left"></i>{{ $test->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section> --}}
@endforeach
@endif
@endsection
@section('js')
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function () {
                $('.tqfBlock').toggleClass('open');
            }, 7000);
        });
        $(document).ready(function() {
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item').removeClass('active');
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item-packages').addClass('active');
        });
        $('#myTab li:first').class('active');
    </script>
@endpush