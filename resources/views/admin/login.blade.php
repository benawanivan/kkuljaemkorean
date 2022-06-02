<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Extra details for Live View on GitHub Pages -->
    <title>
       Admin Login - Kkuljaem Korean
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
    <style>
        @font-face {
            src: url('css/fonts/Avocado Sans Bold.ttf');
            font-family: Avocado;
        }

        @font-face {
            src: url('css/fonts/Montserrat-Black.ttf');
            font-family: Montserrat_Black;
        }

        @font-face {
            src: url('css/fonts/Montserrat-Bold.ttf');
            font-family: Montserrat_Bold;
        }
    </style>


</head>

<body class="body w-100" style="background-image:url('images/background-login.png');background-size:cover">
    <div class="container" style="padding-top:5rem;">
        <div class="row justify-content-center">
            <img src="{{ asset('images/logo_white.svg') }}" alt="Logo Kkuljaem" style="width:23%;padding-bottom:1rem">  
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-family: Montserrat_Bold; color: #6E4B1F">Login Admin</div>

                    <div class="card-body">
                        
                        <form method="POST" action="{{route('proseslogin')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right" style="font-family: Montserrat_Bold">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right" style="font-family: Montserrat_Bold">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            @if (session('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color:#EF9C22" >
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
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
