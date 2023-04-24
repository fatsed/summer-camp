<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="/asset/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/asset/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/asset/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/asset/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/asset/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/asset/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="/asset/select2/select2.css">
    <link rel="shortcut icon" href="/asset/images/favicon.png"/>
    <link rel="stylesheet" href="/sweetalert2/sweetalert2.css"/>
{{--    <link rel="stylesheet" href="/sweetalert2/style.css"/>--}}

</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')
    @include('admin.navbar-top')
    <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="/asset/vendors/js/vendor.bundle.base.js"></script>
<script src="/asset/vendors/chart.js/Chart.min.js"></script>
<script src="/asset/vendors/progressbar.js/progressbar.min.js"></script>
<script src="/asset/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="/asset/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/asset/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="/asset/js/off-canvas.js"></script>
<script src="/asset/js/hoverable-collapse.js"></script>
<script src="asset/js/misc.js"></script>
<script src="/asset/js/settings.js"></script>
<script src="/asset/js/todolist.js"></script>
<script src="/asset/js/dashboard.js"></script>
<script src="/asset/select2/select2.js"></script>
<script src="/sweetalert2/sweetalert2.js"></script>
<script src="/sweetalert2/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@include('admin.alerts.sweetalert.success')

</body>
</html>
