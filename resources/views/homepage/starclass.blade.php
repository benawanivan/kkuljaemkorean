@include('templates.header')

<script>
//Set up date for countdown
 let launchDate = new Date("{{$clock->date}} {{$clock->time}}").getTime();

//Set timer to tick
 let timer = setInterval(tick, 1000);

 function tick () {
     //get current time
     let now = new Date().getTime();
     //Get the difference in time to get time left until reaches 0
     let t = launchDate - now;

     //check if time is above 0
     if (t > 0) {
         //Setup Days, hours, seconds, and minutes
         //Algorithm to calculate days
         let days = Math.floor(t / (1000 * 60 * 60 * 24));
         //prefix any number below 10
         if (days < 10) { days = "0" + days; }
         //algorithm to calculate hours
         let hours = Math.floor((t % ( 1000 * 60 * 60 * 24 ))/(1000 * 60 * 60));
         if (hours < 10) { hours = "0" + hours;}
         //algorithm to calculate minutes
         let mins = Math.floor((t % ( 1000 * 60 * 60 ))/(1000 * 60));
         if (mins < 10) { mins = "0" + mins;}
         //algorithm to calculate secs
         let secs = Math.floor((t % ( 1000 * 60 ) )/1000);
         if (secs < 10) { secs = "0" + secs;}
         //Create time string
         let time = `${days} : ${hours} : ${mins} : ${secs}`;

         //set time on document
         document.querySelector('.days').innerText = days;
         document.querySelector('.hours').innerText = hours;
         document.querySelector('.mins').innerText = mins;
         document.querySelector('.secs').innerText = secs;
         document.querySelector('.countdown').innerText = time;
     }
 }

</script>
<!-- Website Title -->
<title>Kkuljaem Korean - Les Bahasa Korea No.1</title>

@include ('templates.header2')

<a href="body" class="back-to-top page-scroll" style="display: inline;">Back to Top</a>
 
<!-- Header -->
<header id="header" class="header" style="background-color: #fff;">
    <div class="header-content" style="padding-top:2rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 style="color:#6E4B1F">Belajar bahasa Korea asik dan menyenangkan di Kkuljaem Korean</h1>
                        <p style="color:#f5ae48">Les bahasa Korea yang praktis dan fleksibel, sehingga kamu bisa belajar dimana aja dan kapan aja. Dengan level kelas yang beragam dan harga yang terjangkau, kamu bebas memilih kelasmu.</p>
                        <div class="card" style="border: none;background-color:transparent;padding-bottom:1rem;">
                            <div class="card-body" style="padding-bottom:0rem;padding-top:1.5rem;padding-left:1.25rem;padding-right:1.25rem;background-size:312px;background-color:#B77A2C;border-radius:25px;">
                                <div class="row" style="text-align: center">
                                    <div class="col-lg-3">
                                        <div class="days" style="font-size: -webkit-xxx-large;color:#fff"></div>
                                        <p style="color:#fff;margin-top: 0.5rem">Days</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="hours" style="font-size: -webkit-xxx-large;color:#fff"></div>
                                        <p style="color:#fff;margin-top: 0.5rem">Hours</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mins" style="font-size: -webkit-xxx-large;color:#fff"></div>
                                        <p style="color:#fff;margin-top: 0.5rem">Minutes</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="secs" style="font-size: -webkit-xxx-large;color:#fff"></div>
                                        <p style="color:#fff;margin-top: 0.5rem">Seconds</p>
                                    </div>
                                  
                                </div>    
                            </div>
                        </div>
                        <a class="btn-solid-reg page-scroll" href="{{$clock->link}}" style="font-size: 20px;width:100%;text-align:center;">Daftar Sekarang</a>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container" style="margin-top:1.5rem;margin-right:0rem">
                        <img class="img-fluid" src="images/starclass/landing.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
    
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->

<header id="header" class="header">
    <div class="header-content" style="padding-top:2rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="darkbrown" style="font-size:3.1rem">Kenalan Yuk<br>sama Kkuljaem Korean Star Class </h1>
                        <img src="images/divider.svg" style="width: 170px;">
                        <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Kkuljaem Star Class?</h4>

                        <p>Kkuljaem Star Class menyediakan fasilitas belajar secara tatap muka untuk kamu. Dibimbing 
                        oleh pengajar super dari Kkuljaem Korean, kamu bisa mengikuti kelas live session melalui 
                        Zoom Meeting selama 1 jam tiap minggunya. Kamu juga akan mendapatkan akun premium kkuljaem 
                        Korean App dan akses ke 200+ video pembelajaran serta modul pembelajaran lengkap.</p>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/main.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->

<!-- List Guru -->
<div class="slider-2" style="padding-top: 0rem;padding-bottom: 0rem;background-color: #f5ae48;">
    <div class="row">
        <div class="col-lg-12">
            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide -->
                            <div class="swiper-slide">
                            <img src="images/slider/jongdae_slide.png" class="d-block w-100" alt="Han Jong Dae">
                            <a href="{{ url('/lite')}}" class="stretched-link"></a>
                            </div> <!-- end of swiper-slide -->
                        
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">       
                        <img src="images/slider/syafa_slide.png" class="d-block w-100" alt="Syafa Azakhra">
                            <a href="{{ url('/intensifsatu')}}" class="stretched-link"></a>
                        </div> 
                        <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                        <img src="images/slider/jane_slide.png" class="d-block w-100" alt="Jane Adita">
                            <a href="{{ url('/intensifdua')}}" class="stretched-link"></a>
                        </div> 
                        <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide"> 
                        <img src="images/slider/melly_slide.png" class="d-block w-100" alt="Mellyana Murtanu">
                            <a href="{{ url('/intensifdua')}}" class="stretched-link"></a>   
                        </div> 
                        <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                        <img src="images/slider/trifosa_slide.jpg   " class="d-block w-100" alt="Trifosa Olfi">
                        <a href="{{ url('/topik')}}" class="stretched-link"></a>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
                        
                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of slider-2 -->
<!-- end of testimonials -->





<!-- kelas pemula -->
<div id="pemula" class="cards-2" style="padding-bottom: 0rem;padding-top: 5rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="text-align:center">
                <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:1rem;">Pemula</h1>
                <p class="brown" style="font-size:120%">Mulai perjalanan bahasa Korea-mu dari sini! Level Pemula sangat cocok untuk kamu yang belum memiliki pengetahuan bahasa Korea sama sekali.</p>
            </div> <!-- end of col -->
            <div class="col-lg-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Card-->
                <div class="card" style="border: none;width: 23rem;">
                    <div class="card-body" style="background-size:312px;background-color:#f8bd6d;border-radius:25px;padding: 1.15rem;text-align: -webkit-center;">
                        <div class="image-container" style="width: 180px">
                            <img class="img-fluid" src="images/starclass/19.png" alt="alternative">
                        </div>
                        <div class="card-title" style="padding-top: 0rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Dasar</div>
                        <img src="images/divider.svg" style="width: 170px;">
                        <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                            <p class="brown" style="font-size: 90%;"    >Kamu akan menguasai huruf Hangeul, tata bahasa dasar bahasa Korea, 
                            dan bisa mengerti kata-kata yang sering keluar dalam percakapan sehari-hari!</p>
                        </div>
                        <details>
                            <summary style="color:#fff">
                                Kurikulum
                            </summary>
                            <div class="details-content">
                                <div class="row">
                                    <div class="col-lg-12" style="text-align:center">
                                        <div class="text-container" style="margin-top:1rem">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;font-size:smaller;">
                                                    <thead>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                        <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                                        <th scope="col" style="border-color:white; border-top:0px">Materi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                            <td scope="row">1</th>
                                                            <td>Pengenalan Hangeul</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">2</th>
                                                            <td>Hangeul: Vokal & Konsonan Tambahan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">3</th>
                                                            <td>Tata Bahasa Dasar</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">4</th>
                                                            <td>Perkenalan Diri Dasar</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">5</th>
                                                            <td>Bahasa Semi Formal</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">6</th>
                                                            <td>Post Position</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">7</th>
                                                            <td>Past Tense & Future Tense</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">8</th>
                                                            <td>Lokasi & Arah</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">9</th>
                                                            <td>Angka Sino & Asli Korea</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">10</th>
                                                            <td>Kata Tanya</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">11</th>
                                                            <td>Partikel</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">12</th>
                                                            <td>Kata Penghubung</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end of text-container -->
                                    </div> <!-- end of col -->
                                </div>
                            </div>
                        </details>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->
                  <!-- Card-->
                <div class="card" style="border: none;width: 23rem;">
                    <div class="card-body" style="background-size:312px;background-color:#f8bd6d;border-radius:25px;padding: 1.15rem;text-align: -webkit-center;">
                        <div class="image-container" style="width: 180px">
                            <img class="img-fluid" src="images/starclass/23.png" alt="alternative">
                        </div>
                        <div class="card-title" style="padding-top: 0rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Intensif 1</div>
                        <img src="images/divider.svg" style="width: 170px;">
                        <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                            <p class="brown" style="font-size: 90%;">Kamu akan belajar 2x lebih banyak dari Kelas Dasar. Diakhir kelas, kamu akan menguasai
                                Hangeul dan tata bahasa Korea secara menyeluruh! </p>
                        </div>
                        <details>
                            <summary style="color:#fff">
                                Kurikulum
                            </summary>
                            <div class="details-content">
                                <div class="row">
                                    <div class="col-lg-12" style="text-align:center">
                                        <div class="text-container" style="margin-top:1rem">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;font-size:smaller;">
                                                    <thead>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                        <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                                        <th scope="col" style="border-color:white; border-top:0px">Materi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                            <td scope="row">1</th>
                                                            <td>Mengenal Hangeul</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">2</th>
                                                            <td>Perkenalan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">3</th>
                                                            <td>Sekolah</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">4</th>
                                                            <td>Kegiatan Sehari-hari</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">5</th>
                                                            <td>Tanggal & Hari</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">6</th>
                                                            <td>Kegiatan keseharian</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">7</th>
                                                            <td>Akhir Pekan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">8</th>
                                                            <td>Membeli Sesuatu 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">9</th>
                                                            <td>Makanan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">10</th>
                                                            <td>Rumah</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">11</th>
                                                            <td>Keluarga</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">12</th>
                                                            <td>Cuaca</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">13</th>
                                                            <td>Telepon 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">14</th>
                                                            <td>Ulang Tahun</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">15</th>
                                                            <td>Hobi</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">16</th>
                                                            <td>Lalu Lintas 1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end of text-container -->
                                    </div> <!-- end of col -->
                                </div>
                            </div>
                        </details>
                        {{-- <a class="btn-solid-white page-scroll" href="{{ url('/intensifsatu') }}" style="font-size:18px;margin-top: 0rem;">Lebih Lanjut</a> --}}
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

<!-- kelas menengah -->
<div id="menengah" class="cards-2" style="padding-bottom: 0rem;padding-top: 0rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="text-align:center">
                <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:1rem;">Menengah</h1>
                <p class="brown" style="font-size:120%">Pilihan level untuk kamu yang ingin meningkatkan kemampuan berbicara dalam bahasa Korea.</p>
            </div> <!-- end of col -->
            <div class="col-lg-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="border: none;width: 23rem;">
                    <div class="card-body" style="background-size:312px;background-color:#f8bd6d;border-radius:25px;padding: 1.15rem;text-align: -webkit-center;">
                        <div class="image-container" style="width: 180px">
                            <img class="img-fluid" src="images/starclass/20.png" alt="alternative">
                        </div>
                        <div class="card-title" style="padding-top: 0rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Percakapan</div>
                        <img src="images/divider.svg" style="width: 170px;">
                        <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                            <p class="brown" style="font-size: 90%;">Di Kelas Percakapan, kamu akan mempelajari kalimat dan ekspresi sehari-hari yang sering digunakan oleh orang Korea! 
                                Kemampuan percakapan dan pelafalan kamu akan diasah agar setelah lulus dari Kelas Percakapan, kamu mampu membicarakan tentang keseharianmu dalam bahasa Korea.</p>
                        </div>
                        <details>
                            <summary style="color:#fff">
                                Kurikulum
                            </summary>
                            <div class="details-content">
                                <div class="row">
                                    <div class="col-lg-12" style="text-align:center">
                                        <div class="text-container" style="margin-top:1rem">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;font-size:smaller;">
                                                    <thead>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                        <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                                        <th scope="col" style="border-color:white; border-top:0px">Materi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                            <td scope="row">1</th>
                                                            <td>Perkenalan (Formal & Informal)</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">2</th>
                                                            <td>Memesan Makanan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">3</th>
                                                            <td>Bertanya Jalan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">4</th>
                                                            <td>Bertanya Harga</td>
                                                        </tr>
                                                        </tr>
                                                            <td scope="row" colspan="2">Review</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">5</th>
                                                            <td>Ungkapan Selamat & Pujian</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">6</th>
                                                            <td>Cuaca & Musim</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">7</th>
                                                            <td>Klausa Masa Lalu</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">8</th>
                                                            <td>Klausa Masa Depan</td>
                                                        </tr>
                                                        </tr>
                                                            <td scope="row" colspan="2">Review</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">9</th>
                                                            <td>Tata Bahasa: Shopping</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">10</th>
                                                            <td>Kalimat Suruhan & Larangan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">11</th>
                                                            <td>Tata Bahasa</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">12</th>
                                                            <td>Kata Penghubung</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end of text-container -->
                                    </div> <!-- end of col -->
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
                <!-- end of card -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of kelas -->

<!-- kelas lanjutan-->
<div id="lanjutan" class="cards-2" style="padding-bottom: 0rem;padding-top: 0rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="text-align:center">
                <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:1rem;">Lanjutan</h1>
                <p class="brown" style="font-size:120%">Pilihan level yang direkomendasikan untuk kamu yang ingin memperdalam kemampuan berbahasa Korea-mu secara serius. Di Level Lanjutan, kamu juga bisa mempersiapkan diri untuk mengikuti ujian TOPIK I.                </p>
            </div> <!-- end of col -->
            <div class="col-lg-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Card-->
                <div class="card" style="border: none;width: 23rem;">
                    <div class="card-body" style="background-size:312px;background-color:#f8bd6d;border-radius:25px;padding: 1.15rem;text-align: -webkit-center;">
                        <div class="image-container" style="width: 180px">
                            <img class="img-fluid" src="images/starclass/21.png" alt="alternative">
                        </div>
                        <div class="card-title" style="padding-top: 0rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas Intensif 2</div>
                        <img src="images/divider.svg" style="width: 170px;">
                        <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                            <p class="brown" style="font-size: 90%;">Belajar setara TOPIK Level 2 untuk kamu yang mau kuliah atau kerja di Korea! 
                            Kamu bisa belajar menulis secara formal dalam bahasa Korea, 
                            kamu juga akan mempelajari tata bahasa dan percakapan level menengah.</p>
                        </div>
                        <details>
                            <summary style="color:#fff">
                                Kurikulum
                            </summary>
                            <div class="details-content">
                                <div class="row">
                                    <div class="col-lg-12" style="text-align:center">
                                        <div class="text-container" style="margin-top:1rem">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;font-size:smaller;">
                                                    <thead>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                        <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                                        <th scope="col" style="border-color:white; border-top:0px">Materi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                            <td scope="row">1</th>
                                                            <td>Pertemuan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">2</th>
                                                            <td>Janji</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">3</th>
                                                            <td>Membeli Sesuatu</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">4</th>
                                                            <td>Rumah Sakit </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">5</th>
                                                            <td>Surat</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">6</th>
                                                            <td>Lalu Lintas</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">7</th>
                                                            <td>Telepon</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">8</th>
                                                            <td>Film</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">9</th>
                                                            <td>Hari Libur</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">10</th>
                                                            <td>Penampilan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">11</th>
                                                            <td>Wisata</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">12</th>
                                                            <td>Tempat Umum</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">13</th>
                                                            <td>Kota</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">14</th>
                                                            <td>Rencana</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">15</th>
                                                            <td>Kehidupan di Korea</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">16</th>
                                                            <td>Review</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end of text-container -->
                                    </div> <!-- end of col -->
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
                <!-- end of card -->
                  <!-- Card-->
                <div class="card" style="border: none;width: 23rem;">
                    <div class="card-body" style="background-size:312px;background-color:#f8bd6d;border-radius:25px;padding: 1.15rem;text-align: -webkit-center;">
                        <div class="image-container" style="width: 180px">
                            <img class="img-fluid" src="images/starclass/22.png" alt="alternative">
                        </div>
                        <div class="card-title" style="padding-top: 0rem;margin-bottom:0rem;font-size: 1.47rem;">Kelas TOPIK</div>
                        <img src="images/divider.svg" style="width: 170px;">
                        <div class="card-subtitle" style="margin-top: 0rem;margin-bottom: 0rem;">
                            <p class="brown" style="font-size: 90%;">Pilihan kelas yang cocok bagi kamu yang membutuhkan bimbingan untuk mengikuti ujian TOPIK! Dalam Kelas TOPIK, kamu akan dapat pembahasan tuntas TOPIK I dan TOPIK II!</p>
                        </div>
                        <details style="padding-top:1.4rem">
                            <summary style="color:#fff">
                                Kurikulum
                            </summary>
                            <div class="details-content">
                                <div class="row">
                                    <div class="col-lg-12" style="text-align:center">
                                        <div class="text-container" style="margin-top:1rem">
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;font-size:smaller;">
                                                    <thead>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                        <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                                        <th scope="col" style="border-color:white; border-top:0px">Materi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="border-color:transparent; border-top:0px">
                                                            <td scope="row" rowspan="2" style="vertical-align: middle;">1</th>
                                                            <td>Strategi Menjawab Soal</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reading: Kosa Kata</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" rowspan="2" style="vertical-align: middle;">2</th>
                                                            <td>Reading: Tata Bahasa</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reading: Anaisis Cerita & Gambar</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" colspan="2">Simulasi 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" rowspan="2" style="vertical-align: middle;">3</th>
                                                            <td>Listening: Menjawab Percakapan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Listening: Menentukan Topik Percakapan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" rowspan="2" style="vertical-align: middle;">4</th>
                                                            <td>Listening: Mencocokkan Gambar</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Listening: Analisis Isi Percakapan</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" colspan="2">Simulasi 2</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" rowspan="2" style="vertical-align: middle;">5</th>
                                                            <td>Listening: Menjawab Pertanyaan dari Percakapan</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reading: Melengkapi Kalimat</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" rowspan="2" style="vertical-align: middle;">6</th>
                                                            <td>Reading: Melengkapi Cerita Rumpang</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reading: Anaisis Teks Pengumuman</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row" colspan="2">Simulasi 3</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end of text-container -->
                                    </div> <!-- end of col -->
                                </div>
                            </div>
                        </details>
                    </div>
                </div> <!-- end of card -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of kelas -->

<!-- Why Kkuljaem -->
<div id="reasons" class="basic-1" style="background-size: cover;background-color: #f8bd6d">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <div class="text-container" style="margin-top:1rem;margin-right:1rem">
                    <h2 style="font-family: Avocado;color:#6E4B1F;font-size:300%">Why Kkuljaem Korean?</h2>
                    <div class="row" style="place-items:center">
                        <div class="col-lg-2">
                            <img class="img-fluid" src="images/starclass/1.png" alt="alternative" style="margin-bottom: 1rem;width: 120px;">
                            <p style="color:#6E4B1F;font-family:Montserrat_Black;font-size:140%">Rencana Belajar yang terarah</p>
                            <p style="color:#B77A2C;font-family:Montserrat_Bold;font-size: 100%;">Kamu akan mendapatkan rencana belajar (study plan) sehingga belajar lebih teratur</p>
                        </div>
                        <div class="col-lg-2">
                            <img class="img-fluid" src="images/starclass/10.png" alt="alternative" style="width: 130px;">
                            <p style="color:#6E4B1F;font-family:Montserrat_Black;font-size:140%">Live Session setiap minggunya</p>
                            <p style="color:#B77A2C;font-family:Montserrat_Bold;font-size: 100%;">Belajar langsung dengan guru dan teman sekelas melalui Zoom setiap minggu</p>
                        </div>
                        <div class="col-lg-2">
                            <img class="img-fluid" src="images/starclass/6.png" alt="alternative" style="margin-bottom: 1rem;width: 120px;">
                            <p style="color:#6E4B1F;font-family:Montserrat_Black;font-size:140%">Diskusi langsung dengan Guru</p>
                            <p style="color:#B77A2C;font-family:Montserrat_Bold;font-size: 100%;">Tanyakan atau diskusikan materi dengan asisten guru kapanpun</p>
                        </div>
                        <div class="col-lg-2">
                            <img class="img-fluid" src="images/starclass/3.png" alt="alternative" style="width: 130px;">
                            <p style="color:#6E4B1F;font-family:Montserrat_Black;font-size:140%">Dapat sertifikat sebagai tanda apresiasi</p>
                            <p style="color:#B77A2C;font-family:Montserrat_Bold;font-size: 100%;">Setelah ujian akhir, dapatkan sertifikat kelulusan (tidak resmi) dari Kkuljaem Korean</p>
                        </div>
                        <div class="col-lg-2">
                            <img class="img-fluid" src="images/starclass/9.png" alt="alternative" style="width: 130px;">
                            <p style="color:#6E4B1F;font-family:Montserrat_Black;font-size:140%">Belajar bersama teman sekelas</p>
                            <p style="color:#B77A2C;font-family:Montserrat_Bold;font-size: 100%;">Seperti belajar kelompok, ada teman-teman yang bisa diajak berdiskusi</p>
                        </div>
                        <div class="col-lg-2"> 
                            <img class="img-fluid" src="images/starclass/4.png" alt="alternative" style="width: 130px;">
                            <p style="color:#6E4B1F;font-family:Montserrat_Black;font-size:140%">Semua dalam satu aplikasi</p>
                            <p style="color:#B77A2C;font-family:Montserrat_Bold;font-size: 100%;">Video dan rangkuman materi semua level kelas bisa diakses di aplikasi</p>
                        </div>
                    </div>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of Table 1 -->


<!-- Video -->
<div id="testimony" class="basic-3" style="padding-bottom: 0rem;padding-top: 2rem;">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2>Check Out The Video</h2>
            </div> 
        </div>  -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Video Preview -->
                <div class="image-container">
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=h6RFBj1n7eM" data-effect="fadeIn">
                            <img class="img-fluid" src="images/video/testimoni.png" alt="alternative">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div> <!-- end of video-wrapper -->
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

                <!-- <p>This video will show you a case study for one of our <strong>Major Customers</strong> and will help you understand why your startup needs Evolo in this highly competitive market</p> -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of video -->


<!-- Testimoni -->
<div class="slider-2" style="padding-top:2rem;padding-bottom:2rem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="brown" style="font-family:Avocado;font-size:50px">Apa kata <strong class="darkbrown">Mereka</strong>?</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card" style="background: transparent">
                                    <div class="row" style="align-items:center;padding-bottom:1rem">
                                        <div class="col-lg-12">
                                            <p class="brown" style="text-align:left;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Di kelas percakapan lebih seru karena benar-benar belajar percakapan bahasa Korea yang bisa dipraktekkan sehari hari. Tugas shadowing suara di kkuljaem Korean juga menurut saya unik dan membantu murid untuk berlatih."</p>
                                            <p class="darkbrown" style="margin-bottom:0rem;text-align:left;font-family:Montserrat_Black"><span style="font-size:150%">REZIA AULIANNISAA</span></p>
                                            <p class="darkbrown" style="line-height:1;text-align:left;font-family:Montserrat_Black"> 30 thn, Karyawan Swasta - Kelas Percakapan Gangnam 4B</p>
                                        </div>  
                                    </div>
                                    <div class="row" style="align-items:center;padding-bottom:1rem">
                                        <div class="col-lg-12">
                                            <p class="brown" style="text-align:right;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Selama belajar disini aku bisa menyesuaikan waktu kuliah dan les dengan baik. Untuk yang mengambil kelas gangnam dan menurutku worth it banget. Ketika kelas live guru-gurunya on time banget jadi aku gak merasa rugi waktu."</p>
                                            <p class="darkbrown" style="margin-bottom:0rem;text-align:right;font-family:Montserrat_Black"><span style="font-size:150%">LUCIA ADILLA MARIBETH PALANDA (PANDA)</span></p>
                                            <p class="darkbrown" style="line-height:1;text-align:right;font-family:Montserrat_Black"> 23 thn, Mahasiswa S2 - Kelas Dasar Gangnam 3E</p>
                                        </div>  
                                    </div>
                                  
                                    
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card" style="background:transparent">
                                    <div class="row" style="align-items:center;padding-bottom:1rem">
                                        <div class="col-lg-12">
                                            <p class="brown" style="text-align:justify;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Walaupun sistem online, asisten gurunya fast respon banget, penjelasan dari asisten guru pun dapat dimengerti. Pelafalan saya yg awalnya kurang bagus, sedikit demi sedikit membaik karena dibimbing oleh guru dan asisten guru."</p>
                                            <p class="darkbrown" style="margin-bottom:0rem;text-align:left;font-family:Montserrat_Black"><span style="font-size:150%">TERESA</span></p>
                                            <p class="darkbrown" style="line-height:1;text-align:left;font-family:Montserrat_Black"> 34 thn, Karyawan Swasta - Kelas Intensif 2 (Gangnam)</p>
                                        </div>  
                                    </div>
                                    <div class="row" style="align-items:center;padding-bottom:1rem">
                                        <div class="col-lg-12">
                                            <p class="brown" style="text-align:right;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Harga kelas menurut saya sudah sangat worth it, materi yang diberikan pun sangat nyaman, mudah dipelajari dan dipahami. Tidak akan menyesal belajar di Kkuljaem Korean karena benar-benar ngebantu kalau ingin belajar bahasa korea dengan baik dan benar."</p>
                                            <p class="darkbrown" style="margin-bottom:0rem;text-align:right;font-family:Montserrat_Black"><span style="font-size:150%">GUSTI FATIMAH AZ ZAHRA</span></p>
                                            <p class="darkbrown" style="line-height:1;text-align:right;font-family:Montserrat_Black"> 18 thn, Pelajar/Mahasiswa - Kelas Percakapan Itaewon 4-A</p>
                                        </div>  
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->
    
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->
    
                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-2 -->
<!-- end of testimonials -->       

<div class="basic-2" style="background-color: #fff;">
    <div class="container">
        <div class="row">

            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="text-align:center">
                <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:2rem;">Mulai belajar bahasa Korea di Kkuljaem Korean</h1>
                {{-- <p class="brown">Mulai perjalanan bahasa Korea-mu dari mempelajari Hangeul! Di Kelas Dasar, kamu akan menguasai 
                huruf Hangeul, tata bahasa dasar bahasa Korea, dan bisa mengerti kata-kata yang sering keluar 
                dalam percakapan sehari-hari! Setelah lulus dari Kelas Dasar, kamu akan bisa membaca Hangeul 
                dengan lancar dan bisa melanjutkan ke jenjang selanjutnya, yaitu Kelas Percakapan! Tersedia kelas 
                Han River, Itaewon, dan Gangnam dengan periode belajar 1 bulan dan 3 bulan! </p> --}}
                <a class="btn-solid-reg page-scroll" href="{{$clock->link}}" style="font-size: 20px;width:100%;text-align:center;">Daftar Sekarang</a>
            </div> <!-- end of col -->
            <div class="col-lg-1"></div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->


@include('templates.footer')