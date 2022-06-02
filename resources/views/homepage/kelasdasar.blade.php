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
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><a href="{{ url('/lite') }}">Kelas Lite</a><i class="fa fa-angle-double-right"></i><span>Kelas Dasar</span>
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
                        <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:2rem;">Kelas Dasar</h1>
                        <h4 class="brown">Han Jongdae</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">Youtuber (Channel: Bandung Oppa)</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">Hankuk University of Foreign Studies (Jurusan Bahasa Indonesia)</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">Muslim Travelers (NET TV)</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-circle" style="font-size:20%"></i><div class="media-body" style="font-family: Montserrat_Bold">Trip to Korea (Trans 7)</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6" style="margin-top:3rem;">
                    <div class="image-container">
                        <img class="img-fluid" src="images/jongdae_dasar.png" alt="alternative">
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
                    <h1 class="darkbrown" style="font-family: Avocado;margin-bottom:2rem;">Apa itu Kelas Dasar?</h1>
                    <p class="brown">Mulai perjalanan bahasa Korea-mu dari mempelajari Hangeul! Di Kelas Dasar, kamu akan menguasai 
                    huruf Hangeul, tata bahasa dasar bahasa Korea, dan bisa mengerti kata-kata yang sering keluar 
                    dalam percakapan sehari-hari! Setelah lulus dari Kelas Dasar, kamu akan bisa membaca Hangeul 
                    dengan lancar dan bisa melanjutkan ke jenjang selanjutnya, yaitu Kelas Percakapan! Tersedia kelas 
                    Han River, Itaewon, dan Gangnam dengan periode belajar 1 bulan dan 3 bulan! </p>
                </div> <!-- end of col -->
                <div class="col-lg-1"></div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Video -->
    <div class="basic-3" style="padding-bottom: 0rem;padding-top: 2rem;">
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
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=ziKicyC3xrY" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video/kelas-dasar.png" alt="alternative">
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

    <!-- table -->
    <div class="basic-1" style="background-color: #f8c15c;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <div class="text-container" style="margin-top:1rem">
                        <h1 style="font-family: Avocado;margin-bottom:2rem;color:#fff">Weekly Study Plan</h1>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;">
                                <thead >
                                    <tr style="border-color:transparent; border-top:0px">
                                    <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                    <th scope="col" style="border-color:white; border-top:0px">Topik Pembelajaran (Materi 3x Seminggu)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-color:transparent; border-top:0px">
                                    <th scope="row">1</th>
                                        <td>Orientasi, Hangeul : Vokal dan Konsonan Dasar</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">2</th>
                                        <td>Hangeul : Vokal & Konsonan Tambahan, Batchim, Latihan</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">3</th>
                                        <td>Tata Bahasa Dasar : 입니다/까, ㅂ/습니다</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">4</th>
                                        <td>Kalimat Negatif & Interogatif, Perkenalan Diri Dasar</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <!-- <th scope="row" colspan="2" >Libur 1 Minggu</th> -->
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    <th scope="row"></th>
                                        <td>LIBUR 1 MINGGU</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">5</th>
                                        <td>Bahasa Semi Formal (이에요/예요, 어요/아요)</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">6</th>
                                        <td>Post-position (하고, 나/이나, 의, 랑/이랑, 만, 도), Tata Bahasa (-고 싶어요)</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">7</th>
                                        <td>Past Tense (았어요, 었어요, 했어요), Future Tense (-ㄹ 거예요, -을 거예요)</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">8</th>
                                        <td>Tata Bahasa (~고 있어요), Lokasi Dan Arah, 이것, 저것, 그것</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row"></th>
                                        <td>LIBUR 1 MINGGU</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">9</th>
                                        <td>Angka Sino Korea dan Asli Korea</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">10</th>
                                        <td>Kata Tanya (누구, 어디, 무엇, 왜, 언제, 어떻게)</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">11</th>
                                        <td>Partikel (에/에서, 부터, 까지, 에게, 한테, 로/으로)</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">12</th>
                                        <td>Kata Penghubung (그리고, 그러나, 그래서, ~고, ~지만, ~어서/아서)</td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <h2>Design And Plan Your Business Growth Steps</h2>
                        <p>Use our staff and our expertise to design and plan your business growth strategy. Evolo team is eager to advise you on the best opportunities that you should look into</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of Table 1 -->

    {{-- <!-- kelas -->
    <div id="kelas" class="cards-2" style="padding-bottom: 0rem;padding-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="images/harga/dasar/hanriver.png" style="width:100%;padding-bottom:1.5rem">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <img src="images/harga/dasar/itaewon.png" style="width:100%;padding-bottom:1.5rem">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <img src="images/harga/dasar/gangnam.png" style="width:100%;padding-bottom:1.5rem">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of kelas --> --}}


@include('templates.footer')