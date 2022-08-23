<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
        <img src="{{ asset('admin/dist/img/meilleur-holidays-logo.png') }}" alt="Meilleur Logo" class="">
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li> 
                @if(Auth::user()->role_id == 1)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                CMS
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        <p>Home</p>
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('/banner') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Banner</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/bannercontain') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Banner Contain</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('featuresView') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Features</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('specialofferView') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Special Offer</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/pages') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pages</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('testimonialView') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Testimonial</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Lead
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 3) 
                            <li class="nav-item">
                                <a href="{{ url('/lead-entry') }}" target="_blank" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leads Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/leadb2c') }}" target="_blank" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leads B2C</p>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2) 
                            <li class="nav-item">
                                <a href="{{ url('/search-by-enq-id') }}" target="_blank" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Search By ENQ ID</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/booking-details') }}" target="_blank" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Booking Details</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                @if(Auth::user()->role_id == 1)
                    <li class="nav-item">                  
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Packages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('domesticTour') }}?category=domestic" target="_blank" class="nav-link" >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Domestic Tour</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('domesticTour') }}?category=international" target="_blank" class="nav-link" >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>International Tour</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('domesticTour') }}?category=weekend-holidays" target="_blank" class="nav-link" >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Weekend Holidays</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('domesticTour') }}?category=tea-tourism" target="_blank" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tea Tourism</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Setting
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">                       
                            <li class="nav-item">
                                <a href="{{ route('setting') }}" target="_blank" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Setting</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('subscriberView')}}" target="_blank" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>Subscribers</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('userView')}}" target="_blank" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>