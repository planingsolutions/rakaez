<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link type="image/x-icon" href="{{asset('assets/img/logo.jpeg') }}" rel="icon">

        <title>@yield('tittle')</title>

        <link rel="stylesheet" href="{{asset('assets/assets_admin/css/bootstrap-rtl.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/assets_admin/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/assets_admin/css/feathericon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/assets_admin/plugins/morris/morris.css')}}">

        <link rel="stylesheet" href="{{asset('assets/assets_admin/plugins/select2/css/select2.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/assets_admin/plugins/datatables/datatables.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/assets_admin/css/style.css')}}">


    </head>

<body>


        <div class="main-wrapper">

                @include('admin.includes.header')
                @include('admin.includes.sidenav')
                <div class="page-wrapper"  style="background-color: #f8f9fa !important;">
                    <div class="content container-fluid">
                        @include('admin.includes.welcome')
                        @yield('content')
                    </div>

                </div>
        </div>
    <script src="{{asset('assets/assets_admin/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('assets/assets_admin/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/assets_admin/js/popper.min.js')}}"></script>

    <script src="{{asset('assets/assets_admin/js/mask.js')}}"></script>
    <script src="{{asset('assets/assets_admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/assets_admin/js/form-validation.js')}}"></script>
    <script src="{{asset('assets/assets_admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/assets_admin/js/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('assets/assets_admin/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('assets/assets_admin/js/chart.morris.js')}}"></script>
    <script src="{{asset('assets/assets_admin/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/assets_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/assets_admin/plugins/datatables/datatables.min.js')}}"></script>
    
    <script src="{{asset('assets/assets_admin/js/script.js')}}"></script>

</body>


</html>