<?php
$menu = DB::select("SELECT packages.id,packages.title,packages.slug,tour_categories.category FROM packages
LEFT JOIN tour_categories ON packages.categoryId = tour_categories.id WHERE packages.status='Active'
UNION
SELECT packages.id,packages.title,packages.slug,tour_categories.category FROM packages
LEFT JOIN tour_categories ON packages.categoryId = tour_categories.id WHERE packages.status='Active'");
$setting = DB::select('SELECT * FROM settings');
?>
<header class="header header-style-2 clearfix headersec54">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-info">
                        <ul>
                            <li><i class="flaticon-flash"></i> Contact us on: +91-9830243235</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="social-icons">
                        <ul>
                            <li><a href="{{ $setting[0]->twitterLink}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $setting[0]->twitterLink}}"><i class="fa fa-instagram" target="_blank"></i></a></li>
                            <li><a href="{{ $setting[0]->twitterLink}}"><i class="fa fa-linkedin" target="_blank"></i></a></li>
                            <li><a href="{{ $setting[0]->twitterLink}}"><i class="fa fa-dribbble" target="_blank"></i></a></li>
                            <li><a href="{{ $setting[0]->twitterLink}}"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                            <li><a href="{{ route('login')}}"><i class="fa fa-lock" aria-hidden="true"></i> Login </a></li>
                            <li><a href="{{ route('register')}}"><i class="fa fa-user" aria-hidden="true"></i> Sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-style bg-transparent menu-hover-2  clearfix">
        <div class="main-navigation main-mega-menu animated">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div id="navbar-collapse-1" class="container">

                    <a class="navbar-brand" href="{{ url('/') }}"><img id="logo_img" src="{{ asset('images/meilleur-holidays-logo.jpg') }}" alt="logo"></a>
                    
                 
                    <span class="navbar-toggler-icon menutoggle556" style="font-size:20px;cursor:pointer"></span>
                    <div class="duplimenu"></div>
                    <div class="mobile_menu045 sidenav" id="mySidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="accordion accordion-flush mobilemenu55" id="accordionFlushExample">
                            <div class="accordion-item">
                                <a class="menu-link" href="https://meilleurholidays.iudyog.com/">Home</a>
                                <a class="menu-link" href="https://meilleurholidays.iudyog.com/about-us">About Us</a>
                                {{-- <h2 class="accordion-header" id="flush-head01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu01" aria-expanded="false" aria-controls="flush-menu01">
                                        Weekend Holidays</button>
                                </h2>
                                <div id="flush-menu01" class="accordion-collapse collapse" aria-labelledby="flush-head01" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            @if (!empty($menu))
                                            @foreach ($menu as $item)
                                            @if ($item->category == 'weekend-holidays')
                                            <li><a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a></li>
                                            @endif
                                            @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-head02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu02" aria-expanded="false" aria-controls="flush-menu02">
                                        International Tour</button>
                                </h2>
                                <div id="flush-menu02" class="accordion-collapse collapse" aria-labelledby="flush-head02" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            @if (!empty($menu))
                                            @foreach ($menu as $item)
                                            @if ($item->category == 'international')
                                            <li>
                                                <a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-head03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu03" aria-expanded="false" aria-controls="flush-menu03">
                                        Domestic Tour</button>
                                </h2>
                                <div id="flush-menu03" class="accordion-collapse collapse" aria-labelledby="flush-head01" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            <!--    @if (!empty($menu))
                                            @foreach ($menu as $item)
                                            @if ($item->category == 'domestic')
                                            <li>
                                                <a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif -->
                                            <li>
                                                <h3>North East India</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/arunachal-pradesh-tour-package">Arunachal Pradesh</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/darjeeling-tour-package">Darjeeling</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/gangtok-pelling-ravangla-summer-special-package-tour">Gangtok Pelling Ravangla </a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/gangtok-pelling-namchi-puja-special-tour-packages">Gangtok Pelling Namchi</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/fresh-package-tour-package">GANGTOK PELLING DARJEELING PACKAGE TOUR</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/Rinchenpong-kaluk-sikkim-tour-package-tour-plan-with-tour-cost">Kaluk Ravangla Gangtok</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/north-sikkim-holiday-package-tour-with-lachung-lachen-gurudongmar-lake">North Sikkim</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/sikkim-darjeeling-tour-package">Darjeeling Gangtok</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/sandakphu-phalut-trekking-package-in-darjeeling-west-bengal">Sandakphu Phalut</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/old-silk-route-zuluk-gnathang-sillery-gaon-tour-packages">Silk Route</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Andaman</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/portblar-havelock-tour-package">Andaman 6N/7D Tour</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/andaman-tour-package">Andaman 4N/5D Tour</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/Andaman-Tour-Package-5n-6d-from-kolkata">Andaman 5N/6D Tour</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Jammu & Kashmir</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-tour-packages">Kashmir Package</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-premium-package-tour">Premium Kashmir Package</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-offbeat-package-tour">Offbeat Kashmir Package</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-vaishno-devi-srinagar-pahalgam-sonmarg-package-tour">Kashmir Packages With Vaishno Devi</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/Leh-Ladakh-tour-package">Leh Ladakh</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/royal-enfiled-leh-package-tour">Royal Enfield Leh Package</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/ladakh-fixed-departures-tour-packages-from-delhi-mumbai-with-flight">Leh Ladakh Fixed Departures</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/manali-leh-ladakh-tour-packages-travel-holidays-road-trip">Manali Leh Ladakh</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Uttarakhand</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/nainital-package-tour-nainital-summer-holidays">Nainital Package</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>South India</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/vizag-araku-tour-packages">Vizag Araku</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/kerala-tour-packages">Kerala Tour Package</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/kerala-premium-packages">Kerala Premium Package</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Himachal</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/Shimla-Manali-Packages-tour-best-holiday">SHIMLA-MANALI PACKAGE</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Dooars</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/jungle_safari_dooars_3">Dooars Tour</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/dooars-4n-5d-tour-package-from-njp-to-njp-from-kolkata">Dooars 4N/5D From NJP Tour</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/jeep-safari-elephant-safari-gorumara-national-park">Dooars 5N/6D From NJP Tour</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Others</h3>
                                                <ul>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/goa-tour-packages">Goa Tour</a></li>
                                                    <li><a href="https://meilleurholidays.iudyog.com/packages/rajasthan-package-tour-holidays-in-rajasthan">Rajasthan Tour</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-head03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu04" aria-expanded="false" aria-controls="flush-menu04">
                                        Tea Tourism</button>
                                </h2>
                                <div id="flush-menu04" class="accordion-collapse collapse" aria-labelledby="flush-head01" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            <li>
                                                <a href="{{ url('/packages/book-stay-darjeeling-tea-bunglow') }}">At a Glance</a>
                                            </li>
                                            @if (!empty($menu))
                                            @foreach ($menu as $item)
                                            @if ($item->category == 'tea-tourism')
                                            <li>
                                                <a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <a class="menu-link" href="https://meilleurholidays.iudyog.com/contact">Contact Us</a>
                            {{-- <div class="accordion-item">
                                <ul class="megamenu78">
                                    <li class="paybtn">
                                        <a href="{{ url('razorpay-payment') }}" target="_blank">Pay Now<i class="fa fa-credit-card" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                   


                    <ul class="navbar-nav ml-xl-auto">
                        <li class="nav-item dropdown">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ url('/about-us') }}" class="nav-link">About Us</a>
                        </li>
                        {{-- <li class="nav-item dropdown toursinindia-class active">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Weekend Holidays</a>
                            <div class="dropdown-menu left-1 megamenu01">
                                <div class="dropdown">
                                    <ul class="megamenu78">
                                        @if (!empty($menu))
                                        @foreach ($menu as $item)
                                        @if ($item->category == 'weekend-holidays')
                                        <li><a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item dropdown domestic-tour-class">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Domestic Tour</a>
                            <div class="dropdown-menu left-1 megamenu01 dom_menu">
                                <div class="dropdown">
                                    <div class="megamenu78 domslist565">
                                        <!--  @if (!empty($menu))
                                        @foreach ($menu as $item)
                                        @if ($item->category == 'domestic')
                                        <li><a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif -->

                                        <div class="dombox45">
                                            <ul>
                                                <li>
                                                    <h3>North East India</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/arunachal-pradesh-tour-package">Arunachal Pradesh</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/darjeeling-tour-package">Darjeeling</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/gangtok-pelling-ravangla-summer-special-package-tour">Gangtok Pelling Ravangla </a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/gangtok-pelling-namchi-puja-special-tour-packages">Gangtok Pelling Namchi</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/fresh-package-tour-package">GANGTOK PELLING DARJEELING PACKAGE TOUR</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/Rinchenpong-kaluk-sikkim-tour-package-tour-plan-with-tour-cost">Kaluk Ravangla Gangtok</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/north-sikkim-holiday-package-tour-with-lachung-lachen-gurudongmar-lake">North Sikkim</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/sikkim-darjeeling-tour-package">Darjeeling Gangtok</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/sandakphu-phalut-trekking-package-in-darjeeling-west-bengal">Sandakphu Phalut</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/old-silk-route-zuluk-gnathang-sillery-gaon-tour-packages">Silk Route</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>




                                        <div class="dombox45">
                                            <ul>

                                                <li>
                                                    <h3>Andaman</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/portblar-havelock-tour-package">Andaman 6N/7D Tour</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/andaman-tour-package">Andaman 4N/5D Tour</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/Andaman-Tour-Package-5n-6d-from-kolkata">Andaman 5N/6D Tour</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <h3>Uttarakhand</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/nainital-package-tour-nainital-summer-holidays">Nainital Package</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>South India</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/vizag-araku-tour-packages">Vizag Araku</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/kerala-tour-packages">Kerala Tour Package</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/kerala-premium-packages">Kerala Premium Package</a></li>
                                                    </ul>
                                                </li>

                                             
                                                <li>
                                                    <h3>Himachal</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/Shimla-Manali-Packages-tour-best-holiday">SHIMLA-MANALI PACKAGE</a></li>
                                                    </ul>
                                                </li>
                                           



                                            </ul>

                                        </div>



                                        <div class="dombox45">

                                            <ul>
                                                <li>
                                                    <h3>Jammu & Kashmir</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-tour-packages">Kashmir Package</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-premium-package-tour">Premium Kashmir Package</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-offbeat-package-tour">Offbeat Kashmir Package</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/kashmir-vaishno-devi-srinagar-pahalgam-sonmarg-package-tour">Kashmir Packages With Vaishno Devi</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/Leh-Ladakh-tour-package">Leh Ladakh</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/royal-enfiled-leh-package-tour">Royal Enfield Leh Package</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/ladakh-fixed-departures-tour-packages-from-delhi-mumbai-with-flight">Leh Ladakh Fixed Departures</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/manali-leh-ladakh-tour-packages-travel-holidays-road-trip">Manali Leh Ladakh</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>


                                     


                                        <div class="dombox45">
                                            <ul>

                                                <li>
                                                    <h3>Dooars</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/jungle_safari_dooars_3">Dooars Tour</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/dooars-4n-5d-tour-package-from-njp-to-njp-from-kolkata">Dooars 4N/5D From NJP Tour</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/jeep-safari-elephant-safari-gorumara-national-park">Dooars 5N/6D From NJP Tour</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="dombox45">
                                            <ul>
                                                <li>
                                                    <h3>Others</h3>
                                                    <ul>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/goa-tour-packages">Goa Tour</a></li>
                                                        <li><a href="https://meilleurholidays.iudyog.com/packages/rajasthan-package-tour-holidays-in-rajasthan">Rajasthan Tour</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                        </li> --}}
                        {{-- <li class="nav-item dropdown international-tour-class">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">International Tour</a>
                            <div class="dropdown-menu left-1 megamenu01">
                                <div class="dropdown">
                                    <ul class="megamenu78">
                                        @if (!empty($menu))
                                        @foreach ($menu as $item)
                                        @if ($item->category == 'international')
                                        <li><a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item dropdown domestic-tour-class">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tea Tourism</a>
                            <div class="dropdown-menu left-1 megamenu01">
                                <div class="dropdown">
                                    <ul class="megamenu78">
                                        <li><a href="{{ url('/packages/book-stay-darjeeling-tea-bunglow') }}">At a Glance</a>
                                        </li>
                                        @if (!empty($menu))
                                        @foreach ($menu as $item)
                                        @if ($item->category == 'tea-tourism')
                                        <li><a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    {{-- <a href="{{ url('razorpay-payment') }}" target="_blank" class="pay">Pay Now<i class="fa fa-credit-card" aria-hidden="true"></i></a> --}}
                </div>
            </nav>
        </div>
    </div>
    <div class="tqfBlock" style="right: 0;">
        <div class="tqfAnchor">{{ __('Get a Call Back') }}</div>
        <div class="topQuoteForm">
            <h5>{{ __('Please Fill up to get Call Back from our Travel Consultant') }}</h5>
            <a href="javascript:void(0)" class="tqfAnchor gcbCloseBtn"><i class="fa fa-close"></i></a>
            @if (Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form class="form" action="{{ route('getCallBack') }}" method="POST">
                @csrf
                <div class="input">
                    <input type="hidden" name="url" id="url" value="{{  Request::url() }}">
                    <div class="form_name">
                        <input type="text" name="name" placeholder="{{ __('Your Name') }}" id="name" pattern="^[a-zA-Z\s]{1,100}$">
                    </div>
                    <div class="form_mail">
                        <input type="text" name="email" placeholder="{{ __('Email Id') }}" id="email" pattern="^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$">
                    </div>
                    <div class="form_mobile">
                        <input type="tel" name="mobile" placeholder="{{ __('Phone Number') }}" id="mobile" pattern="^[0-9]{10}$">
                    </div>
                    <div class="form_message">
                        <textarea name="message" id="message" placeholder="{{ __('Message') }}"></textarea>
                    </div>
                    <button type="submit" id="submit" name="submit">{{ __('Submit') }}</button>
                    <!-- <button class="gcbCloseBtn" type="submit" id="submit" name="submit">{{ __('Cancel') }}</button> -->
                </div>
            </form>
        </div>
    </div>
</header>