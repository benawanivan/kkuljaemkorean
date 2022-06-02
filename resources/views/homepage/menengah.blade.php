@include('templates.header')

<!-- Website Title -->
<title>Level Menengah - Kkuljaem Korean - Les Bahasa Korea No.1</title>

@include ('templates.header2')


@include('templates.navbar')

    <!-- Breadcrumbs -->
    <div class="ex-basic-1" style="padding-top:6.25rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Level Menengah</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <div class="basic-2" style="padding-bottom:0rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="darkbrown" style="font-family: Avocado">Level Menengah</h1>
                        <p>Tingkatkan kemampuan Bahasa Korea-mu di sini! Level Menengah adalah level yang cocok untuk kamu 
                        yang sudah menguasai dasar-dasar bahasa Korea dan ingin mengasah kemampuan menyusun kalimat dan 
                        percakapan. Kamu akan memelajari kalimat-kalimat praktis untuk digunakan di Korea Selatan.</p>
                        <!-- <h4 class="brown">Syafa Azakhra Diana</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">Universitas Pendidikan Indonesia (Jurusan: Korean Studies)</div>
                            </li>
                        </ul> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6" style="margin-top:3rem;">
                    <div class="image-container">
                        <img class="img-fluid" src="images/intensif.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- kelas -->
    <div id="kelas" class="cards-2" style="padding-bottom: 0rem;padding-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <!-- Card-->
                     <div class="card" style="border: none">
                        <div class="card-body" style="background-size:312px;background-image: url('images/kelas-percakapan.png');">
                            <div class="card-title" style="padding-top: 7rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Percakapan</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                                <p class="brown" style="font-size: 90%;">Kamu akan mempelajari kalimat dan ekspresi sehari-hari yang sering digunakan oleh orang Korea!</p>
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/percakapan') }}" style="font-size:18px; margin-top: 1.3rem;">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card-->
                    {{-- <div class="card" style="border: none">
                        <div class="card-body" style="background-size:312px;background-image: url('images/kelas-intensif1.png');">
                            <div class="card-title" style="padding-top: 7rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Intensif 1</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                                <p class="brown" style="font-size: 90%;">Kamu akan belajar 2x lebih banyak dibandingkan dengan Kelas Dasar! </p>
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/intensifsatu') }}" style="font-size:18px;margin-top: 2.7rem;">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card --> --}}
                    <!-- end of card -->
                    <!-- Card-->
                    {{-- <div class="card" style="border: none">
                        <div class="card-body" style="background-size:312px;background-image: url('images/kelas-intensif2.png');">
                            <div class="card-title" style="padding-top: 7rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Intensif 2</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                                <p class="brown" style="font-size: 90%;">Belajar setara TOPIK Level 2 untuk kamu yang mau kuliah atau kerja di Korea bisa di Kelas Intensif Level 2! </p>
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/intensifdua') }}" style="font-size:18px; margin-top: 1.3rem;">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card --> --}}
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of kelas -->
   
@include('templates.footer')