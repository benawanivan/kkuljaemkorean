    @include('templates.header')

    <!-- Website Title -->
    <title>Kkuljaem Korean - Les Bahasa Korea No.1</title>
    
    @include ('templates.header2')
    

    @include('templates.navbar')


    <div class="top-content" style="padding-top:4rem">
        <div class="row no-gutters">
            <div class="col">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    @foreach($images as $s)
                        <?php $i = ($loop->iteration)-1;?>
                        <li data-target="#carousel-example" data-slide-to="$i" class="{{ ($i == 0)? 'active' : '' }}"></li>
                    @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($images as $s)
                        <div class="carousel-item {{($loop->iteration == 1)? 'active' : ''}}">
                            <img src="data_slider/{{$s->nama}}" class="d-block w-100" alt="img{{$loop->iteration + 1}}">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content" style="padding-top:2rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="darkbrown" style="font-size:4rem">Belajar<br>Bahasa Korea</h1>
                            <img src="images/divider.svg" style="width: 170px;">
                            <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Kkuljaem Korean?</h4>

                            <p><span style="font-family: Montserrat_Black">Kkuljaem Korean</span> adalah les Bahasa Korea online yang didirikan oleh <span style="font-family: Montserrat_Black">Bandung Oppa
                            (Han Jongdae)</span>. <span style="font-family: Montserrat_Black">Kkuljaem Korean</span> sudah memiliki lebih dari 2000 murid semenjak awal berdiri dan sudah meluluskan 
                            sekitar 400 murid. Dengan konsep belajar menyenangkan dan fleksibel, <span style="font-family: Montserrat_Black">Kkuljaem 
                            Korean</span> memiliki visi untuk menjadi les bahasa Korea online terbaik bagi seluruh 
                            kalangan. Untuk menjadi yang terbaik, <span style="font-family: Montserrat_Black">Kkuljaem Korean</span> menyediakan beragam kelas dan 
                            jasa mengajar yang berkualitas dengan harga terjangkau.</p>

                            {{-- <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Kkuljaem Korean App?</h4>

                            <p>Untuk mempermudah pembelajaran bagi murid, Kkuljaem Korean akhirnya meluncurkan aplikasi dengan nama <span style="font-family: Montserrat_Black">Kkuljaem Korean App
                            </span>yang bisa diunduh di Google Play atau App Store. Kkuljaem Korean App juga bisa diakses melalui tombol <span style="font-family: Montserrat_Black">Buka Kkuljaem App
                            </span>yang terletak di ujung kanan atas laman ini. Kkuljaem Korean pun tetap mengadakan live session untuk murid yang ingin belajar langsung secara live dengan para guru. 
                            Live session kini hadir dengan nama <span style="font-family: Montserrat_Black">Kkuljaem Star Class</span>.</p>

                            <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Kkuljaem Star Class?</h4>

                            <p>Bagi murid yang ingin tambahan belajar secara tatap muka, Kkuljaem Korean juga menyediakan kelas khusus, yaitu 
                            <span style="font-family: Montserrat_Black">Kkuljaem Star Class</span>. Di kelas ini murid akan dibimbing oleh guru-guru 
                            super Kkuljaem Korean melalui kelas live session yang diadakan seminggu sekali selama 1 jam via Zoom. Dengan mendaftar 
                            Kkuljaem Star Class murid juga akan mendapatkan <span style="font-family: Montserrat_Black">Akses Premium Kkuljaem Korean App
                            </span> dan <span style="font-family: Montserrat_Black">Panduan Materi</span> sesuai periode kelas yang diikuti.</p> --}}

                            <!-- <p>Kkuljaem Korean adalah one-step solution bagi kamu yang
                            ingin les Bahasa Korea! Dengan harga yang terjangkau, kamu
                            bisa mendapatkan konten-konten video dan materi yang
                            berkualitas, feedback tugas dan pelafalan dari asisten guru,
                            dan juga live session dimana kamu bisa belajar langsung per
                            minggunya lewat Zoom dengan guru Kkuljaem Korean!</p>

                            <p>Di Kkuljaem Korean juga tersedia banyak sekali pilihan kelas, dari
                            yang paling dasar, level menengah, sampai dengan kelas TOPIK,
                            sehingga bisa mencocokan level belajar kamu! </p> -->
                            
                            {{-- <a class="btn-solid-lg page-scroll" href="https://wa.me/message/PWFNXUWC7Q7ZO1" style="font-size: 18px;">Cari Tahu Lagi!</a> --}}
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/main.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container" style="margin-top:0rem;">
                            <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Kkuljaem Korean App?</h4>

                            <p>Untuk mempermudah pembelajaran bagi murid, Kkuljaem Korean akhirnya meluncurkan aplikasi dengan nama <span style="font-family: Montserrat_Black">Kkuljaem Korean App
                            </span>yang bisa diunduh di Google Play atau App Store. Kkuljaem Korean App juga bisa diakses melalui tombol <span style="font-family: Montserrat_Black">Buka Kkuljaem App
                            </span>yang terletak di ujung kanan atas laman ini. Kkuljaem Korean pun tetap mengadakan live session untuk murid yang ingin belajar langsung secara live dengan para guru. 
                            Live session kini hadir dengan nama <span style="font-family: Montserrat_Black">Kkuljaem Star Class</span>.</p>

                            <a class="btn-solid-lg page-scroll" href="https://wa.wizard.id/a0d2fe" style="font-size: 18px;">Tanya via WhatsApp</a>

                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container" style="margin-top:0rem;">

                            <h4 class="brown" style="padding-top: 1rem;font-size: 20px;">Apa itu Kkuljaem Star Class?</h4>

                            <p>Bagi murid yang ingin tambahan belajar secara tatap muka, Kkuljaem Korean juga menyediakan kelas khusus, yaitu 
                            <span style="font-family: Montserrat_Black">Kkuljaem Star Class</span>. Di kelas ini murid akan dibimbing oleh guru-guru 
                            super Kkuljaem Korean melalui kelas live session yang diadakan seminggu sekali selama 1 jam via Zoom. Dengan mendaftar 
                            Kkuljaem Star Class murid juga akan mendapatkan <span style="font-family: Montserrat_Black">Akses Premium Kkuljaem Korean App
                            </span> dan <span style="font-family: Montserrat_Black">Panduan Materi</span> sesuai periode kelas yang diikuti.</p>
                            
                            <a class="btn-solid-lg page-scroll" href="https://wa.me/message/PWFNXUWC7Q7ZO1" style="font-size: 18px;">Tanya tentang Kkuljaem Star Class</a>

                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    
                </div> <!-- end of row -->
                {{-- <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container" style="margin-top:0rem;">
                            <a class="btn-solid-lg page-scroll" href="https://wa.me/message/PWFNXUWC7Q7ZO1" style="font-size: 18px;">Tanya tentang Kkuljaem Star Class</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row --> --}}
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    



    <!-- <div class="top-content" style="padding-top:4rem">
        <div class="row no-gutters">
            <div class="col">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="2" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="3" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="4" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slider/jongdae_slide.png" class="d-block w-100" alt="Han Jong Dae">
                        </div>
                        <div class="carousel-item   ">
                            <img src="images/slider/syafa_slide.png" class="d-block w-100" alt="Syafa Azakhra">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider/jane_slide.png" class="d-block w-100" alt="Jane Adita">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider/melly_slide.png" class="d-block w-100" alt="Mellyana Murtanu">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider/trifosa_slide.png   " class="d-block w-100" alt="Trifosa Olfi">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

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


    


    <!-- kelas -->
    <div id="kelas" class="cards-2" style="padding-bottom: 0rem;padding-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card" style="border: none">
                        <div class="card-body" style="height:528.62px;width:312px;background-image: url('images/kelas-lite.png');">
                            <div class="card-title" style="padding-top: 14rem;margin-bottom:0rem;">Pemula</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom:3.9rem">Pilihan level yang cocok untuk kamu yang baru ingin memulai belajar bahasa Korea. </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/pemula') }}" style="font-size:18px">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card-->
                    <div class="card" style="border: none">
                        <div class="card-body" style="height:528.62px;width:312px;background-image: url('images/kelas-intensif.png');">
                            <div class="card-title" style="padding-top: 14rem;margin-bottom:0rem;">Menengah</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom:2.6rem">Pilihan level untuk kamu yang ingin meningkatkan kemampuan berbicara dalam bahasa Korea.</div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/menengah') }}" style="font-size:18px">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card-->
                    <div class="card" style="border: none">
                        <div class="card-body" style="height:528.62px;width:312px;background-image: url('images/kelas-topik.png');background-size:contain">
                            <div class="card-title" style="padding-top: 14rem;margin-bottom:0rem;">Lanjutan</div>
                            <img src="images/divider.svg" style="width: 170px;">
                            <div class="card-subtitle" style="margin-top: 0rem;margin-bottom:0rem">Pilihan level yang direkomendasikan untuk kamu yang ingin memperdalam kemampuan berbahasa Korea-mu secara serius.
                            </div>
                            <a class="btn-solid-white page-scroll" href="{{ url('/lanjutan') }}" style="font-size:18px">Lebih Lanjut</a>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of kelas -->

    <!-- Table -->
    <div class="basic-1" style="background: url(../images/background-table-flip.png); background-size: cover;background-color: #f8c15c;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <div class="text-container" style="margin-top:1rem;">
                        <!-- <img src="images/logo_white.svg" style="height: 80px;padding-bottom:1rem"> -->
                        <h2 style="font-family: Avocado;color:#fff">Why Kkuljaem Korean?</h2>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                            <table class="table" style="background-color:white !important; border-radius: 15px;font-family: Montserrat_Bold;color:#6E4B1F;">
                                <!-- <thead>
                                    <tr style="border-color:transparent; border-top:0px">
                                    <th scope="col" style="border-color:white; border-top:0px">Week</th>
                                    <th scope="col" style="border-color:white; border-top:0px">Topik Pembelajaran (Materi 3x Seminggu)</th>
                                    </tr>
                                </thead> -->
                                <tbody>
                                    <tr style="border-color:transparent; border-top:0px">
                                    <th scope="row" style="border-color:white;border-top:0px;width: 50%;" >Native Teacher</th>
                                        <td style="border-color:white; border-top:0px"><i class="fas fa-check"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Waktu dan tempat fleksibel</th>
                                        <td><i class="fas fa-check"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Level kelas beragam<br>Dasar-lanjutan</th>
                                    <td><i class="fas fa-check"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Harga terjangkau</th>
                                    <td><i class="fas fa-check"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <!-- <th scope="row" colspan="2" >Libur 1 Minggu</th> -->
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    <th scope="row">Praktis</th>
                                    <td><i class="fas fa-check"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    --}}
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Bikin pusing</th>
                                    <td><i class="fas fa-times"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Membosankan</th>
                                    <td><i class="fas fa-times"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Ribet</th>
                                    <td><i class="fas fa-times"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                    <th scope="row">Kaku</th>
                                    <td><i class="fas fa-times"></i></td>
                                        <!-- <td style="border-color:#dddddd;border-top:0px;">Lorem Ipsum</td> -->
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="col-lg-1"></div>
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
                                                <p class="brown" style="text-align:justify;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Di kelas percakapan lebih seru karena benar-benar belajar percakapan bahasa Korea yang bisa dipraktekkan sehari hari. Tugas shadowing suara di kkuljaem Korean juga menurut saya unik dan membantu murid untuk berlatih."</p>
                                                <p class="darkbrown" style="margin-bottom:0rem;text-align:left;font-family:Montserrat_Black"><span style="font-size:150%">REZIA AULIANNISAA</span></p>
                                                <p class="darkbrown" style="line-height:1;text-align:left;font-family:Montserrat_Black"> 30 thn, Karyawan Swasta - Kelas Percakapan Gangnam 4B</p>
                                            </div>  
                                        </div>
                                        <div class="row" style="align-items:center;padding-bottom:1rem">
                                            <div class="col-lg-12">
                                                <p class="brown" style="text-align:justify;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Selama belajar disini aku bisa menyesuaikan waktu kuliah dan les dengan baik. Untuk yang mengambil kelas gangnam dan menurutku worth it banget. Ketika kelas live guru-gurunya on time banget jadi aku gak merasa rugi waktu."</p>
                                                <p class="darkbrown" style="margin-bottom:0rem;text-align:left;font-family:Montserrat_Black"><span style="font-size:150%">LUCIA ADILLA MARIBETH PALANDA (PANDA)</span></p>
                                                <p class="darkbrown" style="line-height:1;text-align:left;font-family:Montserrat_Black"> 23 thn, Mahasiswa S2 - Kelas Dasar Gangnam 3E</p>
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
                                                <p class="brown" style="text-align:justify;line-height:1.2;margin-bottom:0.5rem;color:;font-family:Montserrat_Bold">"Harga kelas menurut saya sudah sangat worth it, materi yang diberikan pun sangat nyaman, mudah dipelajari dan dipahami. Tidak akan menyesal belajar di Kkuljaem Korean karena benar-benar ngebantu kalau ingin belajar bahasa korea dengan baik dan benar."</p>
                                                <p class="darkbrown" style="margin-bottom:0rem;text-align:left;font-family:Montserrat_Black"><span style="font-size:150%">GUSTI FATIMAH AZ ZAHRA</span></p>
                                                <p class="darkbrown" style="line-height:1;text-align:left;font-family:Montserrat_Black"> 18 thn, Pelajar/Mahasiswa - Kelas Percakapan Itaewon 4-A</p>
                                            </div>  
                                        </div>
                                      
                                        
                                        <div class="card-body">
                                            
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

    

    @include('templates.footer')