<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('metades')
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom-animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/new/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    @laravelPWA
    @yield('css')
    <style>
        .whats-app-link {
            position: fixed;
            z-index: 9999999999999;
            width: 50px;
            left: 10px;
            right: 0;
            top: 80%;
        }

        .whats-app-link img {
            width: 50px;
        }

        .call-phone {
            position: fixed;
            z-index: 9999999999999;
            width: 50px;
            left: 10px;
            right: 0;
            top: 90% !important;
        }

        .call-phone img {
            width: 50px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    <a href="javascript:void(0)" class="scrollup"><i class="flaticon-long-arrow-pointing-up" aria-hidden="true"></i></a>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
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
    @yield('js')



    <script>
      

        $(document).ready(function() {
            $('.menutoggle556').click(function() {
                $('#mySidenav').toggleClass('mobmenu99');
                $('.duplimenu').addClass('admob55');

                $('.closebtn').click(function(){
                    $('#mySidenav').removeClass('mobmenu99');
                });

            });


           
            $('.admob55').click(function() {
                $('.mobile_menu045').removeClass('mobmenu99');
            }); 

           
             
            
        });


       $(document).mouseup(function (e) {
            var container = $(".mobile_menu045");
            if(!container.is(e.target) && 
            container.has(e.target).length === 0) {
                container.removeClass('mobmenu99')
            }
        }); 
 

        

      

    </script>









    <script>
        function closeicon() {
            document.getElementById("formcall").style.width = "0";
        }
    </script>
    <script>
        function openNav1() {
            document.getElementById("mySidenav1").style.width = "280px";
        }

        function closeNav1() {
            document.getElementById("mySidenav1").style.width = "0";
        }

        $('.banner_slider').slick({
            dots: true,
            infinite: true,
            speed: 200,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true
        });
        
        $('.packages_slider').slick({
            dots: true,
            infinite: true,
            speed: 200,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true
        });
        $('.spmenu01').slick({
            dots: true,
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    </script>




    <!-- <script>
 $(document).mouseup(function (e) {
            var container = $(".mobile_menu045");
            if(!container.is(e.target) && 
            container.has(e.target).length === 0) {
                container.hide();
            }
        });
</script> -->



    <script>
        $(document).ready(function() {
            $('.tqfAnchor').click(function() {
                $('.tqfBlock').toggleClass('open');
            });
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('#subscribeBtn').click(function() {
            var subscriberEmail = $('#subscriberEmail').val();
            $.ajax({
                url: "{{ route('subscriber') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "subscriberEmail": subscriberEmail,
                },
                success: function(data) {
                    if (data.code == 200) {
                        swal("Congratulation!", data.msg, "success");
                    } else {
                        swal("Sorry!", data.msg, "error");
                    }
                }
            });
        });
    </script>
    @stack('scripts')
</body>

</html>