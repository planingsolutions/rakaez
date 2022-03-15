<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/template-rtl/public/admin/index_admin by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Oct 2021 08:42:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link type="image/x-icon" href="{{asset('assets/img/logo.jpeg')}}" rel="icon">

    <title>@yield('tittle')</title>

    <link rel="stylesheet" href="{{asset('assets/assets_admin/css/bootstrap-rtl.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/assets_admin/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/assets_admin/css/feathericon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets_admin/plugins/morris/morris.css')}}">

    <link rel="stylesheet" href="{{asset('assets/assets_admin/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/assets_admin/plugins/datatables/datatables.min.css')}}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"> </link>
    <link rel="stylesheet" href="{{asset('assets/assets_admin/css/style.css')}}">


</head>


<body>


<div class="main-wrapper">

    @include('admin.includes.header')
    @include('admin.includes.sidenav')

    <div class="page-wrapper" style="background-color: #f8f9fa !important;">
        <div class="content container-fluid">
            @include('admin.includes.welcome')
        </div>
        <div>
        @yield('content')
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
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

            <script>

                    $(document).ready(function() {
                    $('#files_list').DataTable({
            
                        "aLengthMenu": [
                            [5, 10, 25, -1],
                            [5, 10, 25, "All"]
                        ],
                        "iDisplayLength": 10,

                        "language": {
                            "sSearch": "ابحث:",

                            "sProcessing": "جارٍ التحميل...",
                            "sLengthMenu": "أظهر _MENU_ مدخلات",
                            "sZeroRecords": "لم يعثر على أية سجلات",
                            "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                            "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                            "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                            "sInfoPostFix": "",
                            "sUrl": "",
                            "oPaginate": {
                                "sFirst": "الأول",
                                "sPrevious": "السابق",
                                "sNext": "التالي",
                                "sLast": "الأخير"
                            }
                        }
                    });
                });
            </script>

    </body>

</html>