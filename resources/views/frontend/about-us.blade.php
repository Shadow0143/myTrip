@extends('frontend.layouts.app')
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
    <section class="inner-area parallax-bg" data-background="{{asset('images/bg/px-1.jpg')}}')}}" data-type="parallax" data-speed="3">
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-12">
                <h4>about</h4>
                <p>Home <a href="#">about</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="global-section over-layer-white pt-75 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <div class="global-area">
                        <div class="inner-title">
                            <h2>Now We Are Globaly Everywhare</h2>
                            <h3>Discover  vestibulum <span>pharetra orci turpis</span>, ut interdum </h3>
                            <div class="sec-line"></div>
                        </div>
                        <p>Pellentesque consectetur condimentum libero, interdum aliquet enim sollic tudin ut. Donec dapibus tempor odio eu aliquet. Vivamus ultricies augue ut.</p>
                        <h4>Condimentum at sed sapien:</h4>
                        <ul>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-10">
                    <div class="map-area">
                        <img src="{{asset('images/photos/map01.png')}}')}}" alt="image">
                    </div>
                    <p class="map-content">Discover  vestibulum <span class="color-light">Call:</span> <span>+88095085363</span>, ut interdum </p>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-section over-layer-black pt-75 pb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Touran Travel Features</h4>
                    <h2>Why <span>Choose</span> Touran</h2>
                    <p>Deserunt quia ducimus ut illum optio cum eum voluptate corrupti numquam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-like"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">Years of <span>experience</span></a></h3>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-manager"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">Expert Tour <span>Guide</span></a></h3>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-heart-1"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">Beautiful <span>Tour Place</span></a></h3>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section bg-f8 pt-75 pb-50">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>MEET OUR TEAM</h4>
                    <h2>OUR <span>TEAM</span></h2>
                    <p>Consectetur adipisicing elit. Excepturi nemo tenetur veniam repellat earum inventore modi omnis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-col">
                        <div class="thumb">
                            <img src="{{asset('images/team/1.jpg')}}" alt="">
                        </div>
                        <div class="content text-center">
                            <h4><a href="#">mikel jackson</a></h4>
                            <h5>designer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-col">
                        <div class="thumb">
                            <img src="{{asset('images/team/2.jpg')}}" alt="">
                        </div>
                        <div class="content text-center">
                            <h4><a href="#">CM Punk</a></h4>
                            <h5>designer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-col">
                        <div class="thumb">
                            <img src="{{asset('images/team/3.jpg')}}" alt="">
                        </div>
                        <div class="content text-center">
                            <h4><a href="#">Hulk Hogan</a></h4>
                            <h5>designer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-col">
                        <div class="thumb">
                            <img src="{{asset('images/team/4.jpg')}}" alt="">
                        </div>
                        <div class="content text-center">
                            <h4><a href="#">André the Giant</a></h4>
                            <h5>designer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="funfact-section over-layer-black pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-sec">
                        <h2>Travel <span>Award</span> Year <span>2019</span></h2>
                        <p> Discover  vestibulum <span>pharetra orci turpis</span>, ut interdum </p>
                        <div class="video-content">
                            <img src="{{asset('images/photos/video-img.png')}}" alt="image">
                            <div class="overlay">
                                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-youtube"><i class="ficon fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
    {{-- <section class="testimonials-section pt-75 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-title">
                        <h2>Our Client's Say</h2>
                        <div class="sec-line mb-40"></div>
                    </div>
                    <div class="testimonials-post testimonials_slide_col_two owl-carousel owl-theme owl-navst st-three">
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('images/testimonials/1.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h5>Horem Due <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing as necessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('images/testimonials/2.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h5>Hasan Pue <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing as necessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('images/testimonials/1.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h5>Gorem Due <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing as necessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section bg-f8 pt-75 pb-50">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Our latest blog</h4>
                    <h2>Touran <span>Latest</span> Blog</h2>
                    <p>Consectetur adipisicing elit. Excepturi nemo tenetur veniam repellat earum inventore modi omnis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('images/blog/1.jpg')}}">
                            <div class="content">
                                <h3>Summer Vacation Travel On gratest global mounten</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('images/blog/2.jpg')}}">
                            <div class="content">
                                <h3>Winter Vacation Travel On beautiful tour package</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('images/blog/3.jpg')}}">
                            <div class="content">
                                <h3>Summer Vacation Travel On gratest global Tower</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-section style-2 pb-70">
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
    </section> --}}
@endsection
@section('js')
@endsection
@push('scripts')
    <script type="text/javascript">
        
    </script>
@endpush