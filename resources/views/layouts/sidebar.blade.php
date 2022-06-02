<form id="logout-form" action="" method="POST" style="display: none;">
    @csrf
</form>
 <!-- End Navbar -->
 <div class="wrapper-sidebar d-flex align-items-stretch">
    <div class="" style="">
     <nav id="sidebar2" class="sidebar2" data-color="orange">

        
          <div class="sidebar-wrapper" id="sidebar-wrapper">
              <ul class="nav">
                <div class="logo" style="text-align:left;padding-left:1.5rem;padding-right:1.5rem;margin-top:-22px">
                    <a class="simple-text logo-normal">
                        <i class="now-ui-icons users_single-02" style="margin-right:12px"></i>
                        <b> Admin 1</b>
                        <small>Admin</small>
                    </a>
                </div>
                <li class="@if ($activePage == 'slidermenu') active @endif">
                    <a href="{{route('slidermenu')}}">
                    <i class="now-ui-icons files_paper"></i>
                    <p>{{ __('Slider Menu') }}</p>
                    </a>
                </li>
                <li class="@if ($activePage == 'editprofil') active @endif">
                    <a href="{{route('profile')}}">
                    <i class="now-ui-icons users_circle-08"></i>
                    <p>{{ __('Edit Profil') }}</p>
                    </a>
                </li>
              
              </ul>
          </div>
     </nav>
    </div>
     <!-- Page Content  -->
     <div id="content" class="">
         <nav class="navbar" style="position:fixed;z-index: 100;">
            <div class="container-fluid">
             <div class="custom-menu-sidebar">
                 <button type="button" id="sidebarCollapse" class="btn btn-primary">
                     <i class="fa fa-bars"></i>
                     <span class="sr-only">Toggle Menu</span>
                 </button>
             </div>
             {{-- <div class="navbar-wrapper">
                 <a class="navbar-brand" href="#pablo"><p>Selamat Datang {{ \Auth::user()->nama }}</p> </a>
             </div> --}}
             <div class="navbar-wrapper">
                <a href="#" class="logoNavbar">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Excellent"
                        style="max-width:115px;padding-top:1px;padding-bottom:1px;padding-right:10px;">
                </a>
            </div>
             <a href="{{ route('logout') }}" class="btnLogout" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <p>Logout</p>
                </a>
         </nav>
     <div class="container-fluid" style="margin-top: 100px">
         @yield('content')
     </div>
     </div>
 </div>
 </div>
