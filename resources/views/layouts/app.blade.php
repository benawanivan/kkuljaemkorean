<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('asset') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('asset') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Extra details for Live View on GitHub Pages -->
    <title>
       {{$namePage}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('asset') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('asset') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('asset') }}/demo/demo.css" rel="stylesheet" />
    <!--   Core JS Files   -->
    <script src="{{ asset('asset') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('asset') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('asset') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('asset') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />


</head>

<body class="body w-100" >

    @include('layouts.sidebar')

    <script src="{{ asset('asset') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('asset') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('asset') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    --}}
    <!-- Chart JS -->
    {{-- <script src="{{ asset('asset') }}/js/plugins/chartjs.min.js"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="{{ asset('asset') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('asset') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    {{-- <script src="{{ asset('asset') }}/demo/demo.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>

</html>
