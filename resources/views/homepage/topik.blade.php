@include('templates.header')

<!-- Website Title -->
<title>Kelas Topik - Kkuljaem Korean - Les Bahasa Korea No.1</title>

@include ('templates.header2')


@include('templates.navbar')

    <!-- Breadcrumbs -->
    <div class="ex-basic-1" style="padding-top:6.25rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><a href="{{ url('/lanjutan') }}" class="darkbrown">Level Lanjutan</a><i class="fa fa-angle-double-right"></i><span>Kelas TOPIK</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <div class="basic-2" style="padding-bottom:0rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text-container">
                        <h1 class="darkbrown" style="font-family: Avocado">Kelas TOPIK</h1>
                        <h4 class="brown">Trifosa Olfi</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">Hankuk University of Foreign Studies (Master of Arts in Media and Communication)</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">TOPIK Level 5</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="image-container">
                        <img class="img-fluid" src="images/trifosa_trans.png" alt="Trifosa Olfi">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->


    <div class="basic-2" style="background-color: #fccd85;">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10" style="text-align:center">
                    <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:2rem;">Apa itu Kelas TOPIK?</h1>
                    <p class="brown">Pilihan kelas yang cocok bagi kamu 
                    yang membutuhkan bimbingan untuk mengikuti ujian TOPIK! Dalam Kelas TOPIK, kamu akan dapat pembahasan 
                    tuntas TOPIK I dan TOPIK II!</p>
                </div> <!-- end of col -->
                <div class="col-lg-1"></div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->


@include('templates.footer')