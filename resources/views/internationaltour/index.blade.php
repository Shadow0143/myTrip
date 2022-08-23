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
    <section class="inner-area parallax-bg" data-background="{{asset('images/bg/px-1.jpg')}}" data-type="parallax" data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <h4>Holiday</h4>
                        <p>Home <a href="#">Packages</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="special-packages-sec pt-85 pb-60">
        <div class="container">
            <div class="row grid-mb">
                <div class="col-md-4">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{asset('images/features/1.jpg')}}" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Redilova Tour Place</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ullam ipsum voluptate more
                                maxime blanditiis tour package.</p>
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('images/features/sm1.jpg')}}" alt="">
                                    <img src="{{asset('images/features/sm2.jpg')}}" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{asset('images/features/2.jpg')}}" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Adventure swimming</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ullam ipsum voluptate more
                                maxime blanditiis tour package.</p>
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('images/features/sm1.jpg')}}" alt="">
                                    <img src="{{asset('images/features/sm2.jpg')}}" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{asset('images/features/3.jpg')}}" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Ratargul gorgeous</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ullam ipsum voluptate more
                                maxime blanditiis tour package.</p>
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('images/features/sm1.jpg')}}" alt="">
                                    <img src="{{asset('images/features/sm2.jpg')}}" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{asset('images/features/3.jpg')}}" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Redilova Tour Place</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ullam ipsum voluptate more
                                maxime blanditiis tour package.</p>
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('images/features/sm1.jpg')}}" alt="">
                                    <img src="{{asset('images/features/sm2.jpg')}}" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{asset('images/features/1.jpg')}}" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Adventure swimming</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ullam ipsum voluptate more
                                maxime blanditiis tour package.</p>
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('images/features/sm1.jpg')}}" alt="">
                                    <img src="{{asset('images/features/sm2.jpg')}}" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="special-packages">
                        <div class="thumb">
                            <img src="{{asset('images/features/3.jpg')}}" alt="">
                            <div class="offer-price"> Off 40%</div>
                            <div class="post-title-box">
                                <div class="price-box">
                                    <h5><span>$</span>400</h5>
                                    <h6>Starts From</h6>
                                </div>
                                <div class="title-box">
                                    <h4>Ratargul gorgeous</h4>
                                    <h3>peelamedu, cbe, india</h3>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="info">
                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                            </ul>
                            <p>Travel quia tempore, ex delectus rerum option's sapiente, magnam ullam ipsum voluptate more
                                maxime blanditiis tour package.</p>
                            <div class="small-hotel">
                                <div class="text">
                                    <h6>Hotels to Stay</h6>
                                    <h5>Saladi Hasan</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                </div>
                                <div class="thumb">
                                    <img src="{{asset('images/features/sm1.jpg')}}" alt="">
                                    <img src="{{asset('images/features/sm2.jpg')}}" alt="">
                                </div>
                            </div>
                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                            <a class="btn-theme" href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="page-link-item text-center pt-30 pb-20">
                        <ul>
                            <li><a class="flaticon-left-arrow-1" href="#"></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="flaticon-right-arrow-1" href="#"></a></li>
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
                                <img src="{{asset('images/partner/1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/4.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/5.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/6.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/2.png')}}" alt="">
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
        $(document).ready(function(){
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item').removeClass('active');
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item-packages').addClass('active');
        });        
    </script>
@endpush