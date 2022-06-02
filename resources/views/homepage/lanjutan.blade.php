@include('templates.header')

<!-- Website Title -->
<title>Level Lanjutan - Kkuljaem Korean - Les Bahasa Korea No.1</title>

@include ('templates.header2')


@include('templates.navbar')

    <!-- Breadcrumbs -->
    <div class="ex-basic-1" style="padding-top:6.25rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Level Lanjutan</span>
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
                        <h1 class="darkbrown" style="font-family: Avocado">Level Lanjutan</h1>
                        <p>Asah dan sempurnakan Bahasa Korea-mu di kelas-kelas ini! Level Lanjutan sangat cocok bagi kamu 
                        yang ingin meningkatkan kemampuan berbahasa Korea. Di Level Lanjutan, kamu juga bisa mempersiapkan 
                        diri untuk mengikuti ujian TOPIK I. </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="image-container">
                        <img class="img-fluid" src="images/trifosa_trans.png" alt="alternative">
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
                        <div class="card-body" style="background-size:312px;background-image: url('images/kelas-intensif2.png');">
                            <div class="card-title" style="padding-top: 7rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Intensif 2</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                                <p class="brown" style="font-size: 90%;">Belajar setara TOPIK Level 2 untuk kamu yang mau kuliah atau kerja di Korea bisa di Kelas Intensif Level 2! </p>
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/intensifdua') }}" style="font-size:18px; margin-top: 1.3rem;">Lebih Lanjut</a>
                        </div>
                    </div>
                    <!-- end of card -->
                      <!-- Card-->
                    <div class="card" style="border: none">
                        <div class="card-body" style="background-size:312px;background-image: url('images/kelas-intensif1.png');">
                            <div class="card-title" style="padding-top: 7rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas TOPIK</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                                <p class="brown" style="font-size: 90%;">Kamu akan mendapatkan pembahasan tuntas tentang berbagai tipe dan soal TOPIK I! </p>
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/topik') }}" style="font-size:18px;margin-top: 2.7rem;">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card -->
                    <!-- Card-->
                    {{-- <div class="card" style="border: none">
                        <div class="card-body" style="background-size:312px;background-image: url('images/kelas-percakapan.png');">
                            <div class="card-title" style="padding-top: 7rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Intensif 1</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                                <p class="brown" style="font-size: 90%;">Kamu akan mempelajari kalimat dan ekspresi sehari-hari yang sering digunakan oleh orang Korea!</p>
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/litepercakapan') }}" style="font-size:18px; margin-top: 1.3rem;">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card --> --}}
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of kelas -->


@include('templates.footer')