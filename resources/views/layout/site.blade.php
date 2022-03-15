<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <link type="image/x-icon" href="{{asset('assets/img/logo.jpeg') }}" rel="icon">

<title>@yield('tittle')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">



</head>

<body>
    <!-- Start Navbar -->

    <header class="header">

        @include('front.includes.header')
    </header>

    <div class="main-wrapper">
        @yield('content')
    </div>

    <footer>
        @include('front.includes.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
     <!--====== Jquery js ======-->
     <script src="{{asset('assets/js/jquery-1.12.4.min.js')}} "></script>
        <script src="{{asset('assets/js/modernizr-3.7.1.min.js')}}"></script>

        <!--====== Bootstrap js ======-->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

        <!--====== Slick js ======-->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>

        <!--====== Magnific Popup js ======-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

        <!--====== Isotope js ======-->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    
    
    
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>