<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Living</title>

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
                <span>Smart Living</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Inovasi-inovasi</a></li>
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
                    <h1 data-aos="fade-up">Smart Health</h1>
                    <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up"
                        data-aos-delay="400">
                        <b>Smart Health</b>
                        adalah inovasi pelayanan kesehatan yang memanfaatkan teknologi informasi dan komunikasi
                        untuk meningkatkan kualitas pelayanan kesehatan masyarakat. Smart Health merupakan
                        bagian dari Smart Governance yang bertujuan untuk memberikan pelayanan kesehatan yang
                        lebih baik dan efisien bagi masyarakat. Smart Health juga memungkinkan masyarakat
                        untuk mendapatkan pelayanan kesehatan tanpa harus datang ke fasilitas kesehatan.
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
                    <img src="{{ asset('img/Smart/Liv/Liv1.png') }}" class="img-fluid" alt="">
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
                <h3>Inovasi-inovasi Pelayanan</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/features-3.png') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">


                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-heart-pulse-fill"></i>
                                <div>
                                    <h4>Pertama</h4>
                                    <p>
                                        Screening Penyakit Oleh Kader Kesehatan.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-survey-fill"></i>
                                <div>
                                    <h4>Kedua</h4>
                                    <p>
                                        Sistem Penanggulangan Gawat Darurat Terpadu, dan KLB
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-customer-service-fill"></i>
                                <div>
                                    <h4>Ketiga</h4>
                                    <p>
                                        Layanan eBooking, Riwayat Kesehatan dan Kepesertaan BPJS.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-folder-shield-fill"></i>
                                <div>
                                    <h4>Keempat</h4>
                                    <p>
                                        Telekonsultasi, Rujukan Terintegrasi.
                                    </p>
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
                        Kendala <b>V/S</b> Penyelesaian Smart Governance
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
                            <p style="text-indent: 45px!important;">
                                Kendala yang dalam memberikan Standart Pelayanan Minimal bidang Kesehatan kepada
                                2,65Juta Penduduk Kabupaten Malang, Jumlah Sumberdaya Manusia Tenaga Kesehatan masih
                                sangat kurang, Integrasi Program serta Inovasi sangat diperlukan, terutama pemerintah
                                Desa / Kelurahan upaya melatih Kader menjadi Kader Kesehatan telah dilakukan, tentunya
                                masih sangat perlu dukungan dari Lintas OPD dalam menyelesaikan Target dan Capaian
                                Program dan Visi Misi Daerah
                            </p>
                        </div>
                        <!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <p style="text-indent: 45px!important;">
                                Integrasi Program dan Peran Aktif Litas Sektor dalam Penyelesaian masalah pada Smart
                                Living serta Fokus Daerah :
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-dot"></i>
                                <h4>Integrasi Program Dengan Lintas Sektor Dalam Penanggulangan Stunting</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-dot"></i>
                                <h4>Peningkatan peran serta Dinas Sosial dalam pengajuan data DTKS ke dalam usulan PBIN
                                    dan mendorong Kepesertaan mandiri untuk peserta non Miskin</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-dot"></i>
                                <h4>Peningkatan Peran Desa dan Kecamatan dalam pendataan di aplikasi SIK-NG DINSOS.</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-dot"></i>
                                <h4>Pelayanan Administrasi Kependudukan PBIN/ PBID belum punya NIK dan verifikasi data
                                    pasien meninggal dunia / pindah</h4>
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
