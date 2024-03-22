@extends('layouts.home_layouts')

@section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" alt="">
                <span>Smart City Kabupaten Malang</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Tujuan Program</a></li>
                    <li><a class="nav-link scrollto" href="#services">Kendala V/S Penyelesaian</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
@endsection

@section('about')
    {{-- <section id="about" class="hero d-flex align-items-center">
        <div id="hero" class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">MATIC</h1>
                    <h3 data-aos="fade-up" data-aos-delay="400">Malang Kabupaten Tourism Intelligence Center</h3>
                    <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up"
                        data-aos-delay="600">
                        <b>MATIC,</b> Platform Big Data & Smart Tourism yang berisikan Data Pelaku Industri Pariwisata
                        dan Ekonomi Kreatif, Data Event & Program Kegiatan, Showcase Produk dan Statistik Data Ekonomi
                        Kreatif dan Pariwisata di Kabupaten Malang. <br>
                        Platform ini juga akan menjadi media promosi destinasi wisata, desa wisata, hospitality dan
                        pelaku kreatif yang ada di Malang untuk menjual dan memberikan informasi promo, campaign atau
                        informasi lainnya.
                    </p>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Brand/Brand1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section>
        <div class="container pt-5">
            <div class="row pt-5 animate__animated animate__fadeInDown">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img class="img-fluid rounded" src="{{ asset('img/Smart/Brand/Brand2.png') }}"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                </div>
                <div class="col-md-5">
                    <p style="text-indent: 45px!important; padding-top: 5rem">
                        <b>Smart Branding</b> merupakan upaya untuk membangun citra dan identitas Kabupaten Malang
                        sebagai destinasi wisata yang unggul dan berdaya saing. Smart Branding ini diharapkan dapat
                        memberikan dampak positif bagi peningkatan kunjungan wisatawan, peningkatan perekonomian masyarakat
                        dan peningkatan kualitas hidup masyarakat Kabupaten Malang.
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row pt-5 animate__animated animate__fadeInDown">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p style="text-indent: 45px!important; padding-top: 5rem">
                        <b>Smart Branding</b> ini diharapkan dapat memberikan dampak positif bagi peningkatan kunjungan
                        wisatawan, peningkatan perekonomian masyarakat dan peningkatan kualitas hidup masyarakat
                        Kabupaten
                        Malang.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid rounded" src="{{ asset('img/Smart/Brand/Brand3.png') }}"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row pt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img class="img-fluid rounded" src="{{ asset('img/Smart/Brand/Brand4.png') }}"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                </div>
                <div class="col-md-5">
                    <p style="text-indent: 45px!important; padding-top: 5rem">
                        <b>Smart Branding</b> ini diharapkan dapat memberikan dampak positif bagi peningkatan kunjungan
                        wisatawan, peningkatan perekonomian masyarakat dan peningkatan kualitas hidup masyarakat
                        Kabupaten
                        Malang.
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        </div>
    </section> --}}

    <section class="pt-5">
        <div class="container-xxl py-5 pt-5" id="about">
            <div class="container">
                <div class="row g-4 align-items-end mb-4">
                    <div class="col-lg-6 animate__animated animate__fadeInDown">
                        <img class="img-fluid rounded" src="{{ asset('img/aboutus.jpg') }}"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>

                    <div class="col-lg-6 animate__animated animate__fadeInUp">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang kami</p>
                        <h1 class="display-5 mb-4">Smart City Kabupaten Malang</h1>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsa id, numquam at, hic aut,
                            voluptatibus vel sapiente incidunt cupiditate amet dolorem ab eum asperiores dicta mollitia
                            error nisi consequatur!
                        </p>
                        <div class="border rounded p-4">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                        aria-selected="true">Deskripsi</button>
                                    <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-mission" type="button" role="tab"
                                        aria-controls="nav-mission" aria-selected="false">Lokasi</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                    aria-labelledby="nav-mission-tab">
                                    <p class="mb-0">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5744.901536727792!2d112.67663673296389!3d-8.439488875114831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd601147042ed43%3A0x3d8b26de55357956!2sPantai%20Tiga%20Warna!5e0!3m2!1sid!2sid!4v1683266958659!5m2!1sid!2sid"
                                            width="574.4" height="264" style="border:0; position:center;"
                                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div>
                                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                    aria-labelledby="nav-story-tab">
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque ut molestiae fugit
                                        quae accusamus laborum quisquam commodi, repellendus ea corporis modi vel quo nemo
                                        perspiciatis voluptas fuga suscipit sed cumque.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates
                                        doloremque. Quisquam, voluptates doloremque.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates
                                        doloremque. Quisquam, voluptates doloremque.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates
                                        doloremque. Quisquam, voluptates doloremque.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="portfolio" class="portfolio">

        <div class="container">

            <header class="section-header" data-aos="fade-down">
                <p>Smart City Kabupaten Malang</p>
            </header>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/envIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/envIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 d-none d-md-block img-fluid" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/environment.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="{{ route('SmartEnv') }}">
                                <h4>Smart Environment</h4>
                            </a>
                            <p>
                                <b>Wisata Edukasi & Edu Sampah Cipta Kerja</b>
                                <br>
                                Wadah untuk memberikan edukasi seputar operasi pengelolaan TPA sampah dan
                                Pengendalian dan pemanfaatan Gas Methane di TPA.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- konten 2 --}}
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/govIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/govIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img\portfolio\gov.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="{{ route('SmartGov') }}">
                                <h4>Smart Governance</h4>
                            </a>
                            <p>
                                <b>DESAKU TUNTAS</b>
                                <br>
                                Desaku Tuntas adalah aplikasi yang memudahkan masyarakat dalam mengakses informasi dan
                                pelayanan pemerintah desa.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- konten 3 --}}
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/brndIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/brndIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/bran.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="{{ route('SmartBrand') }}">
                                <h4>Smart Branding</h4>
                            </a>
                            <p>
                                <b>MATIC</b>
                                <br>
                                MATIC adalah sebuah apilkasi promosi destinasi wisata, pelayanan dan
                                pelaku industri wisata yang mampu memberikan informasi, campaign atau
                                informasi lainnya
                            </p>
                        </div>
                    </div>
                </div>

                {{-- konten 4 --}}
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/ecoIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/ecoIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/eco.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartEco">
                                <h4>Smart Economy</h4>
                            </a>
                            <p>
                                <b>E-AGRIPROP</b>
                                <br>
                                E-Agriprop adalah aplikasi yang memudahkan petani dalam mengakses informasi dan
                                pelayanan
                                pertanian.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- konten 5 --}}
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/livIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/livIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/living.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartLiv">
                                <h4>Smart Living</h4>
                            </a>
                            <p>
                                <b>SMART health</b>
                                <br>
                                SMART health adalah aplikasi pelayanan pada bidang
                                kesehatan yang promotif, preventif dan kegawat daruratan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- konten 6 --}}
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/socIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/socIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/p.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartSoc">
                                <h4>Smart Society</h4>
                            </a>
                            <p>
                                <b>CONTRA WAR</b>
                                <br>
                                Sebuah aplikasi untuk memberikan pelayanan kontrasepsi yang tepat
                                untuk penundaan ataupun pencegahan kehamilan pada pasangan usia subur
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
