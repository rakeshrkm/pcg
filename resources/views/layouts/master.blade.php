<!DOCTYPE html>
<html lang="en">
<meta http-equiv="chontent-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8" />
    <title>{{ isset($title) ? $title : 'Prakhar software consulting group'}}</title>
    <meta name="description" content="{{ isset($description) ? $description : 'Prakhar software consulting group'}}" />
    <meta name="keywords" content="{{ isset($keyword) ? $keyword : 'Prakhar software consulting group'}}"" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="{{Request::url()}}" />
   
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/foundstrap.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/iconcrafts.css') }}" />

    <!-- css plugin -->
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/smartmenu.min.css') }}" />

    <!-- theme stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/pcg-web-logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}" />
    <!--chatboat-->
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/chatBot.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/timeline.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bot.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    {{-- contact us --}}
    <link rel="stylesheet" href="{{ asset('assets/css/appointment/materialize.min.css') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>  

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://www.mazenet.com/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{ asset('assets/css/appointment/style.css') }}">
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    {!! htmlScriptTagJsApi() !!}
</head>

<body>

    @include('layouts.header')

    @yield('contents')


    @include('layouts.footer')

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/css/appointment/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/page-redirect.js') }}"></script> <!-- javascript here -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJ7vR7u5Tw1Ii8qA0mAsKVUvSnoidOkhE"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.smartmenus.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>

    <!-- javascript plugin -->
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="../www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('assets/js/training.js') }}"></script>
    <script>
    $(".testimonial-content").owlCarousel({
        loop: true,
        items: 2,
        margin: 50,
        dots: true,
        nav: false,
        mouseDrag: true,
        autoplay: false,
        autoplayTimeout: 4000,
        smartSpeed: 800,
         responsive: {
                                      0: { items: 1 },
                                      568: { items: 1 },
                                      768: { items: 1 },
                                      992: { items: 2 },
                                      1200: { items: 2 },
                                  },
        });
     </script>
    @yield('scripts')
            <!--bottom popup-->
</body>
</html>
