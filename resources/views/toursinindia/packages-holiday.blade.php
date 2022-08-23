@extends('layouts.app')
@section('metades')
    <meta name="description" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="author" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="keywords" content="Touran - Travel & Tour HTMl5 Template" />
@endsection
@section('title')
    <title>Touran - Travel & Tour HTMl5 Template</title>
@endsection
@section('css')
@endsection
@section('content')
    <section class="inner-area parallax-bg" data-background="{{ asset('images/img/scenery01.jpg') }}" data-type="parallax"
        data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <h1>Holiday</h1>
                        <p>Home <a href="#">Domestic Tour</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="special-packages-sec pt-85 pb-60">
        <div class="container">
            <div class="row grid-mb">
                <div class="col-md-4">
                    <div class="filterbox56">
                        <h2>Choose Option By</h2>
                        <div class="filter44">
                            <div class="checksec">
                                <h3>Inclusion</h3>
                                <ul>
                                    <li>
                                        <label class="checkbox69">Hotel
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox69">Fooding
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox69">Sightseeing
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox69">Transport
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox69">Air Ticket
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h3>Budget Per Person</h3>
                                <ul>
                                    <li>
                                        <label class="radiobox69">All
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">Less than 10,000/-
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">10,000 - 20,000
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">20,000 - 30,000
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">30,000 - 40,000
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">40,000 - 50,000
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">50,000 - 60,000
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">Greater than 60,000/-
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h3>Duration (in Days)</h3>
                                <ul>
                                    <li>
                                        <label class="radiobox69">All
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">1-3 days
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">4-6 days
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">7-9 days
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">10-12 days
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiobox69">13 days or more
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="listsearchcover">
                        <div class="searchbox">
                            <input type="text" name="" placeholder="Type Destination...">
                            <button type="submit">Search</button>
                        </div>
                        <!--<div class="navbar-toggler-icon filterbtntoggle" style="font-size:20px;cursor:pointer" onclick="openNav1()">
                                            <i class="fa fa-filter"></i>
                                        </div>-->
                    </div>
                    <div class="mobile_menu045 sidenav" id="mySidenav1">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
                        <div class="filterbox56 mobile">
                            <h2>Choose Option By</h2>
                            <div class="filter44">
                                <div class="checksec">
                                    <h3>Inclusion</h3>
                                    <ul>
                                        <li>
                                            <label class="checkbox69">Hotel
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox69">Fooding
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox69">Sightseeing
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>

                                        <li>
                                            <label class="checkbox69">Transport
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox69">Air Ticket
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                    <h3>Budget Per Person</h3>
                                    <ul>
                                        <li>
                                            <label class="radiobox69">All
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">Less than 10,000/-
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">10,000 - 20,000
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">20,000 - 30,000
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">30,000 - 40,000
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">40,000 - 50,000
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">50,000 - 60,000
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">Greater than 60,000/-
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                    <h3>Duration (in Days)</h3>
                                    <ul>
                                        <li>
                                            <label class="radiobox69">All
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">1-3 days
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">4-6 days
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">7-9 days
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">10-12 days
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiobox69">13 days or more
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($data) > 0)
                        <div class="row">
                            @foreach ($data as $item)
                                <div class=" col-lg-6 col-md-6  col-sm-6">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            {{-- <img src="{{ asset('images/img/summit-swiss-heritage.jpg') }}" alt=""> --}}
                                            <img src="{{ asset('images/package') }}/{{ $item['image'] }}" alt="">
                                            <div class="offer-price"> Off 40%</div>
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5>{{ $item['price'] }}</h5>
                                                </div>
                                                <div class="title-box">
                                                    {!! $item['subTitle'] !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>{!! $item['duration'] !!}</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>{!! $item['numberOfPerson'] !!}</a>
                                                </li>
                                            </ul>
                                            <p>{!! $item['title'] !!}</p>
                                            @if (count($item['section']) > 0)
                                                @foreach ($item['section'] as $section)
                                                    @if ($section['sectionName'] == 'hotels')
                                                        @if (count($section['sub_sections']) > 0)
                                                            @foreach (array_slice($section['sub_sections'], 0, 1) as $subSection)
                                                                <div class="small-hotel">
                                                                    <div class="text">
                                                                        <h6>Hotels to Stay</h6>
                                                                        <h5>{!! $subSection['title'] !!}</h5>
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa fa-star-half-empty"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fa  fa-star-o"></i></a>
                                                                            </li>
                                                                            <li><a href="#">(3 Ratings)</a></li>
                                                                        </ul>
                                                                        <a class="map-viw" href="#"><i
                                                                                class="fa fa-map-marker"></i>View on
                                                                            Map</a>
                                                                    </div>
                                                                    @if (count($subSection['sub_sub_section']) > 0)
                                                                        <div class="thumb">
                                                                            @foreach (array_slice($subSection['sub_sub_section'], 0, 2) as $subSubSection)
                                                                                <img src="{{ asset('images/package') }}/{{ $subSubSection['image'] }}"
                                                                                    alt="">
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                            <div class="listboxbtm14">
                                                <a class="btn-theme" href="#">Book Now</a>
                                                <a class="btn-theme"
                                                    href="{{ url('/packages') }}/{{ $item['slug'] }}">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-link-item text-center pt-30 pb-20">
                        <ul>
                            <li>
                                <a class="flaticon-left-arrow-1" href="#"></a>
                            </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a class="flaticon-right-arrow-1" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-section bg-f8 style-2 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="client_carousel" class="owl-carousel">
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/6.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{ asset('images/partner/2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
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
            $('#navbar-collapse-1 ul.navbar-nav li.toursinindia-class').addClass('active');
        });
    </script>
@endpush
