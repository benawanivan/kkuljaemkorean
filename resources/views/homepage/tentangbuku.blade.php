@include('templates.header')

<!-- Website Title -->
<title>Kelas Dasar - Kkuljaem Korean - Les Bahasa Korea No.1</title>

@include ('templates.header2')


@include('templates.navbar')

    <!-- Breadcrumbs -->
    <div class="ex-basic-1" style="padding-top:6.25rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Tentang Buku</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content" style="padding-top:2rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container" style="margin-top:2rem;">
                            <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Buku Kkuljaem?</h4>

                            <p style="text-align: justify;">
                                Bagi para pemula, tidak mudah untuk mencari buku pelajaran Bahasa Korea yang lengkap sekaligus menyenangkan dan mudah dipahami. 
                                Karena itu, setelah sukses mengajar lebih dari 2.000 siswa, Kkuljaem Korean menghadirkan buku pelajaran Kkuljaem Korean Dasar 1. 
                                Buku ini disusun oleh Bandung Oppa bersama guru-guru berpengalaman dari Kkuljaem Korean untuk mendampingi kamu belajar dari 
                                nol sampai mahir.
                            </p>

                            <p style="text-align: justify;">
                                Buku Kkuljaem Korean Dasar 1 dilengkapi dengan pelajaran kosa kata, tata bahasa, serta soal latihan berbicara, mendengarkan, 
                                membaca dan menulis. Terdapat pula berbagai informasi menarik tentang kebudayaan Korea dari Bandung Oppa. File audio dapat 
                                diakses dengan mudah melalui website Kkuljaem Korean. Buku ini juga terintegrasi dengan pelajaran yang tersedia di kursus 
                                Kkuljaem Korean. Dijamin, buku ini adalah one stop solution bagi kamu yang ingin belajar bahasa Korea!
                            </p>

                            <div class="row" style="text-align:center">
                                <div class="col-lg-7">
                                    <a class="btn-solid-lg page-scroll" href="#" style="font-size: 18px;width:100%">Pesan Sekarang</a>
                                </div>
                                <div class="col-lg-5">
                                    <a class="btn-solid-lg page-scroll" href="{{ url('/audiofile') }}" style="font-size: 18px;width:100%">Audio File</a>
                                </div>
                            </div>

                            
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container" style="margin-top:3rem;">
                            <img class="img-fluid" src="images/buku/2.jpeg" style="border-radius: 5%;" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    


@include('templates.footer')