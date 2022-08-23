<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/dist/img/preloader.png') }}" alt="preloader" height="120" width="120">
</div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('admin/dashboard')}}" class="nav-link">{{__('Home')}}</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">{{__('Contact')}}</a>
        </li>
        </li>
    </ul>    
    <ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">       
             <a href="" onclick="history.back()"><i class="fas fa-arrow-left angle-gap"></i></button></i>
        </li>
        <li class="nav-item d-none d-sm-inline-block">       
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off "></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>       
    </ul>
</nav>