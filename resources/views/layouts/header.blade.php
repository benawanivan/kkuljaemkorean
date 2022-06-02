<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin - Kkuljaem Korean</title>
        <link rel="icon" href="images/logo_orange.svg">
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="background-color:#e77324">
            <a class="navbar-brand" href="#" style="text-align: center;">
                <img src="{{asset('images/logo_white.svg')}}" style="width: 70px">
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto ml-md-0" style="margin-left:auto !important">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#EF9C22;color: #fff">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Slider</div>
                            <a class="nav-link" href="{{ url('/slider')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Slider Menu
                            </a>
                            <a class="nav-link" href="{{ url('/addslider')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Add Slider
                            </a>
                            <a class="nav-link" href="{{ url('/clock')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div>
                                Edit Countdown Clock
                            </a>
                            <div class="sb-sidenav-menu-heading">Profile</div>
                            <a class="nav-link" href="{{ url('/profile')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Edit Profile
                            </a>
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ session('username')}}
                    </div>
                </nav>
            </div>