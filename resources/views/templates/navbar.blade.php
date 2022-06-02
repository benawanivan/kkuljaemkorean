 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
        <a href="{{ url('/') }}">
            <img src="images/logo.svg" alt="alternative" style="width:70px">
        </a>
        <!-- Image Logo -->
        <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.png" alt="alternative"></a> -->
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="justify-content:center">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size:15px;margin-left:10px;margin-right:10px;">
                    <a class="nav-link page-scroll" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" style="font-size:15px;margin-left:10px;margin-right:10px;">
                    <a class="nav-link page-scroll" href="{{ url('/#testimony')}}">Testimoni</a>
                </li>
                <li class="nav-item dropdown" style="font-size: 15px;margin-left:10px;margin-right:10px;">
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Level</a>
                    <div class="dropdown-menu" style="font-size:15px;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/pemula')}}"><span class="item-text" style="font-size:15px;">Level Pemula</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/menengah')}}"><span class="item-text" style="font-size:15px;">Level Menengah</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/lanjutan')}}"><span class="item-text" style="font-size:15px;">Level Lanjutan</span></a>
                    </div>
                </li>
                <li class="nav-item" style="font-size:15px;margin-left:10px;margin-right:10px;"> 
                    <a class="nav-link page-scroll" href="{{ url('/caradaftar')}}">Cara Daftar</a>
                </li>
                <li class="nav-item dropdown" style="font-size: 15px;margin-left:10px;margin-right:10px;">
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Buku Kkuljaem</a>
                    <div class="dropdown-menu" style="font-size:15px;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/tentangbuku')}}"><span class="item-text" style="font-size:15px;">Tentang</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ url('/audiofile')}}"><span class="item-text" style="font-size:15px;">Audio File</span></a>
                    </div>
                </li>
                <li class="nav-item" style="font-size:15px;margin-left:10px;margin-right:10px;"> 
                    <a class="nav-link page-scroll" href="{{ url('/kkuljaemedu')}}">Kkuljaem Edu</a>
                </li>
                <li class="nav-item" style="font-size:15px;margin-left:10px;margin-right:10px;"> 
                    <a class="nav-link page-scroll" href="https://wa.wizard.id/a0d2fe">Contact Us</a>
                </li>

               
                <!-- end of dropdown menu -->
            </ul>
             <a class="btn-solid-reg" href="https://kkuljaemkoreanapp.com/" style="font-size:15px;"></i>Buka Kkuljaem App</a>
               
{{--             
            </ul>
            <a class="btn-solid-reg" href="https://wa.wizard.id/a0d2fe" style="font-size:15px;"></i>Contact Us</a> --}}
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->