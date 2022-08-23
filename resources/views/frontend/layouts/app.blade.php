<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    @yield('metades')
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @yield('js')
    @stack('scripts')
      <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-dropdownhover.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-slider.js') }}"></script>
      <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
      <script src="{{ asset('js/slick.min.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/css3-animate-it.js') }}"></script>
      <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
      <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
      <script src="{{ asset('js/player-min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>