<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Branding</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101587497-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-101587497-2');
    </script>

    <!-- Favicons -->
    <link href="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" rel="icon">
    <link href="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- link animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2507708786892986"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}"
                    alt="">
                <span>Smart Branding</span>
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

    <!-- start reusable part -->

    <!-- ======= Hero Section ======= -->
    <section id="about" class="hero d-flex align-items-center">

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


                        {{-- <b>MATIC,</b> merupakan aplikasi yang dikembangkan oleh Dinas Pariwisata Kabupaten Malang yang
                        berfungsi sebagai pusat informasi pariwisata di Kabupaten Malang. Aplikasi ini menyediakan
                        informasi mengenai destinasi wisata, kuliner, penginapan, dan fasilitas umum lainnya yang ada di
                        Kabupaten Malang. Selain itu, aplikasi ini juga menyediakan informasi mengenai event-event yang
                        akan diselenggarakan di Kabupaten Malang. Aplikasi ini juga dilengkapi dengan fitur navigasi
                        yang memudahkan pengguna dalam mencari lokasi destinasi wisata yang diinginkan. --}}
                    </p>
                    {{-- <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="http://agriprop.malangkab.go.id/" target="_blank"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Brand/Brand1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <!-- ======= Features Section ======= -->
    <section class="features">

        <div id="features" class="container" data-aos="fade-up">

            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>Tujuan <b>E-AGRIPROP</b></h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/features-3.png') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">


                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-customer-service-2-line"></i>
                                <div>
                                    <h4>Pertama</h4>
                                    <p>
                                        Menjaring sebanyak mungkin usulan-usulan dari daerah yang potensial untuk
                                        dikembangkan, mempercepat pengiriman data proposal dari seluruh desa/kecamatan
                                        melalui mantri tani/petugas penyuluh lapangan ke Dinas Tanaman Pangan,
                                        Hortikultura dan Perkebunan untuk diverifikasi.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-device-line"></i>
                                <div>
                                    <h4>Kedua</h4>
                                    <p>
                                        Terwujudnya proses perencanaan bottom up yang berasal dari bawah (kelompok
                                        tani/gabungan kelompok tani) dengan dukungan e-agriprop sesuai dengan peraturan
                                        perundang-undangan yang berkaitan dengan pedoman pemberian dana hibah daerah
                                        terutama pada aspek perencanaan.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-user-follow-line"></i>
                                <div>
                                    <h4>Ketiga</h4>
                                    <p>
                                        Memperkuat peran Perangkat Daerah sebagai koordinator mekanisme perencanaan satu
                                        pintu.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-collage-line"></i>
                                <div>
                                    <h4>Keempat</h4>
                                    <p>
                                        Mendukung percepatan Reformasi Birokrasi dimana usulan-usulan dari daerah akan
                                        diproses di pusat dengan transparan dan akuntabel.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-text-wrap"></i>
                                <div>
                                    <h4>Kelima</h4>
                                    <p>
                                        Mendukung upaya hemat barang persediaan (paperless) dan pengelolaan data base
                                        lebih baik.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-pencil-ruler-line"></i>
                                <div>
                                    <h4>Keenam</h4>
                                    <p>Meningkatkan efisiensi dan efektivitas pengalokasian anggaran.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!-- End Feature Icons -->

        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <section id="services" class="features">

        <div class="container" data-aos="fade-up">

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-7">
                    <h3>
                        Kendala <b>V/S</b> Penyelesaian Smart Branding
                    </h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Kendala / Kebutuhan

                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Pelaksanaan & Penyelesaian

                            </a>
                        </li>
                    </ul>
                    <!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p class="mb-1">
                                Kendala yang dihadapi dalam Smart Branding yaitu:
                            </p>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-arrow-drop-right-line"></i>
                                <p class="mb-0">
                                    Koordinasi dan kolaborasi dari berbagai pihak dalam proses perumusan city branding,
                                    mekanisme pelaksanaan smart branding.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-arrow-drop-right-line"></i>
                                <p class="mb-0">
                                    Sumber Daya Manusia yang mendukung pelaksanaan smart branding.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-arrow-drop-right-line"></i>
                                <p class="mb-0">
                                    Konsistensi dalam pelaksanaan rencana eksekusi dan evaluasi secara berkala.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-arrow-drop-right-line"></i>
                                <p class="mb-0">
                                    Pendanaan dalam melaksanakan smart branding yang digunakan untuk penyediaan sarana
                                    dan prasarana, peningkatan SDM, penyebarluasan/promosi melalui berbagai platform.
                                </p>
                            </div>
                            {{-- <p style="text-indent: 45px!important;">
                                Mulai Tahun 2022-2023 dilakukan pemindahan server dari Dinas Tanaman Pangan,
                                Hortikultura dan Perkebunan ke Dinas Komunikasi dan Informatika sehingga selama 1 tahun
                                aplikasi ini tidak dapat dioperasikan seperti sebelumnya. Pemindahan server ini
                                mengakibatkan beberapa menu ataupun fungsi dalam aplikasi tidak dapat berfungsi seperti
                                seharusnya, sehingga membutuhkan perbaikan.
                            </p> --}}
                        </div>
                        <!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-check-line"></i>
                                <p class="mb-0">
                                    Saat ini tahap pengembangan versi 0.2, yang akan dioptimalkan ke aplikasi berbasis
                                    android.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-check-line"></i>
                                <p class="mb-0">
                                    Melaksanakan koordinasi yang intensif dengan Tim Optimalisasi City Branding
                                    Kabupaten Malang.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-check-line"></i>
                                <p class="mb-0">
                                    Menggali beberapa sumber pendanaan non-pemerintah seperti CSR, pola kerjasama
                                    pemerintah dan swasta, dan sebagainya.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-check-line"></i>
                                <p class="mb-0">
                                    Mengoptimalkan platform yang sudah ada untuk mendukung city branding Kabupaten
                                    Malang.
                                </p>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <i class="ri-check-line"></i>
                                <p class="mb-0">
                                    Menyusun regulasi yang memuat kebijakan dan mekanisme pelaksanaan smart branding
                                    Kabupaten Malang.
                                </p>
                            </div>
                        </div>
                        <!-- End Tab 2 Content -->
                    </div>

                </div>

                <div class="col-lg-5">
                    <img src="{{ asset('img/Smart/Eco/Eco2.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Copyright <strong><span>All Rights Reserved</span></strong>.
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
