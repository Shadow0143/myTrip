<?php
$menu = DB::select('SELECT packages.id,packages.title,packages.slug,tour_categories.category FROM packages
LEFT JOIN tour_categories ON packages.categoryId = tour_categories.id
UNION
SELECT packages.id,packages.title,packages.slug,tour_categories.category FROM packages
RIGHT JOIN tour_categories ON packages.categoryId = tour_categories.id');

$setting = DB::select('SELECT * FROM settings');
?>
<header class="header header-style-2 clearfix headersec54">
   
    <div class="menu-style bg-transparent menu-hover-2  clearfix">
        <div class="main-navigation main-mega-menu animated">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div id="navbar-collapse-1" class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"><img id="logo_img" src="{{ asset('images/meilleur-holidays-logo.jpg') }}" alt="logo"></a>
                    <span class="navbar-toggler-icon menutoggle556" style="font-size:20px;cursor:pointer" onclick="openNav()"></span>
                    <div class="mobile_menu045 sidenav" id="mySidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="accordion accordion-flush mobilemenu55" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-head01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu01" aria-expanded="false" aria-controls="flush-menu01">
                                        Weekend Holidays</button>
                                </h2>
                                <div id="flush-menu01" class="accordion-collapse collapse" aria-labelledby="flush-head01" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            @if (!empty($menu))
                                                @foreach ($menu as $item)
                                                    @if ($item->category == 'weekend-holidays')
                                                        <li><a href="{{ url('/packages') }}/{{ $item->title }}">{{ $item->title }}</a></li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
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
                                                            <a href="{{ url('/packages') }}/{{ $item->title }}">{{ $item->title }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-head03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu03" aria-expanded="false" aria-controls="flush-menu03">
                                        Domestic Tour</button>
                                </h2>
                                <div id="flush-menu03" class="accordion-collapse collapse" aria-labelledby="flush-head01" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            @if (!empty($menu))
                                                @foreach ($menu as $item)
                                                    @if ($item->category == 'domestic')
                                                        <li>
                                                            <a href="{{ url('/packages') }}/{{ $item->title }}">{{ $item->title }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-head03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-menu03" aria-expanded="false" aria-controls="flush-menu03">
                                        Tea Tourism</button>
                                </h2>
                                <div id="flush-menu03" class="accordion-collapse collapse" aria-labelledby="flush-head01" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="megamenu78">
                                            @if (!empty($menu))
                                                @foreach ($menu as $item)
                                                    @if ($item->category == 'tea-tourism')
                                                        <li>
                                                            <a href="{{ url('/packages') }}/{{ $item->title }}">{{ $item->title }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <ul class="megamenu78">
                                    <li class="paybtn">
                                        <a href="{{ url('razorpay-payment') }}">Pay Now<i class="fa fa-credit-card" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav ml-xl-auto">
                        <li class="nav-item dropdown toursinindia-class active">
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
                        </li>
                        <li class="nav-item dropdown international-tour-class">
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
                        </li>
                        <li class="nav-item dropdown domestic-tour-class">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Domestic Tour</a>
                            <div class="dropdown-menu left-1 megamenu01 dom_menu">
                                <div class="dropdown">
                                    <ul class="megamenu78">
                                        @if (!empty($menu))
                                            @foreach ($menu as $item)
                                                @if ($item->category == 'domestic')
                                                    <li><a href="{{ url('/packages') }}/{{ $item->slug }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown domestic-tour-class">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tea Tourism</a>
                            <div class="dropdown-menu left-1 megamenu01">
                                <div class="dropdown">
                                    <ul class="megamenu78">
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
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ url('/about-us') }}" class="nav-link">About-Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <a href="{{ url('razorpay-payment') }}" class="pay">Pay Now<i class="fa fa-credit-card" aria-hidden="true"></i></a>
                </div>
            </nav>
        </div>
    </div>
    <div class="tqfBlock" style="right: 0;">
        <div class="tqfAnchor">{{ __('Get a Call Back') }}</div>        
        <div class="topQuoteForm">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
            <h5>{{ __('Please Fill up to get Call Back from our Travel Consultant') }}</h5>
            
            @if (Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form class="form" action="{{ route('getCallBack') }}" method="POST">
                @csrf
                <div class="input">
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
                </div>
            </form>
        </div>
    </div>
</header>
