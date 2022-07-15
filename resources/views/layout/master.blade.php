<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:23:57 GMT -->
<head>
    <meta charset="utf-8" />
    <title>{{$title ?? ''}} | {{config('app.name')}}</title>
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />--}}
{{--    <meta content="Coderthemes" name="author" />--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- third party css -->
{{--    <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />--}}
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @include('layout.siderbar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('layout.topbar')
            <!-- end Topbar -->

            <!-- Start Content-->
            @yield('content')
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        @include('layout.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="rightbar-overlay"></div>
<!-- /End-bar -->

<!-- bundle -->
<script src="{{asset('js/vendor.min.js')}}"></script>
<script src="{{asset('js/app.min.js')}}"></script>

<!-- third party js -->
{{--<script src="assets/js/vendor/apexcharts.min.js"></script>--}}
{{--<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>--}}
{{--<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>--}}
<!-- third party js ends -->

<!-- demo app -->
{{--<script src="assets/js/pages/demo.dashboard.js"></script>--}}
<!-- end demo js-->
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:24:33 GMT -->
</html>
