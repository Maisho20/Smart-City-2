<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Environment</title>

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
                <span>Smart Environment</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Konsep Program</a></li>
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
                    <h1 data-aos="fade-up">Edu Sampah Cipta Kerja</h1>
                    <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up"
                        data-aos-delay="400">
                        Edu Sampah Cipta Kerja (TPS3R Mulyoagung bersatu Dau) dan TPA Sampah Wisata Edukasi Talangagung
                        Kepanjen merupakan inovasi yang dilakukan oleh Pemerintah Kabupaten Malang dalam mengelola
                        sampah yang ada di wilayah Kabupaten Malang. Inovasi ini dilakukan dengan cara mengajak
                        masyarakat untuk peduli terhadap sampah yang ada di wilayahnya masing-masing. Dengan adanya
                        inovasi ini diharapkan masyarakat dapat memilah sampah organik dan non organik yang ada di
                        rumahnya masing-masing. Selain itu, inovasi ini juga dilakukan dengan cara mengajak masyarakat
                        untuk memanfaatkan sampah organik yang ada di rumahnya masing-masing untuk diolah menjadi
                        kompos.
                    </p>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Envi/env1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>Konsep Pengelolaan <b>TPST3R</b></h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/features-3.png') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">


                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-door-open-line"></i>
                                <div>
                                    <h4>Pelayanan pengambilan sampah <i>door to door</i></h4>
                                    <p>
                                        Pelayanan pengambilan sampah <i>door to door</i> yang dilakukan oleh petugas
                                        kebersihan yang dilengkapi dengan aplikasi <i>tracking</i> yang memudahkan dalam
                                        proses pengambilan sampah.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-delete-bin-3-line"></i>
                                <div>
                                    <h4>Proses pemilihan sampah</h4>
                                    <p>
                                        Proses pemilihan sampah yang dilakukan oleh masyarakat dengan memilah sampah
                                        organik dan non organik yang dilakukan di TPS3R Mulyoagung bersatu Dau yang
                                        nantinya akan diolah menjadi kompos dan sampah yang bisa didaur ulang kembali.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-recycle-fill"></i>
                                <div>
                                    <h4>Proses komposting</h4>
                                    <p>
                                        Proses komposting yang dilakukan oleh masyarakat dengan memilah sampah organik
                                        dan non organik yang dilakukan di TPS3R Mulyoagung bersatu Dau yang nantinya
                                        akan
                                        diolah menjadi kompos dan sampah yang bisa didaur ulang kembali.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-shopping-bag-3-line"></i>
                                <div>
                                    <h4>Pemasaran hasil pilahan dan kompos</h4>
                                    <p>
                                        Pemasaran hasil pilahan dan kompos yang dilakukan oleh masyarakat dengan
                                        memilah sampah organik dan non organik yang dilakukan di TPS3R Mulyoagung
                                        bersatu Dau yang nantinya akan diolah menjadi kompos dan sampah yang bisa didaur
                                        ulang kembali.
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
                                Kendala yang dihadapi dalam melaksanakan Smart Environment melalui inovasi Edu Sampah
                                Cipta Kerja (TPS3R Mulyoagung bersatu Dau) dan TPA Sampah Wisata Edukasi Talangagung
                                Kepanjen ini adalah bahwa inovasi ini berkaitan dengan tata kelola sampah maka perlu
                                adanya gerakan yang massif dan berkelanjutan, mengingat area Kabupaten Malang yang luas
                                dan jumlah penduduk yang yang relative besar ini menjadi tantangan tersendiri. Dengan
                                strategi edukasi yang disampaikan pada saat dilokasi, juga meneruskan manfaat edukasi
                                peduli sampah pada daerahnya merupakan upaya strategis dalam mempercepat Smart
                                Environmental ini menyebar luas, bukan hanya di wilayah Kabupaten Malang saja akan
                                tetapi sudah mencapai daerah daerah lain diluar wilayah Kabupaten Malang
                            </p>
                        </div>
                        <!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <p style="text-indent: 45px!important;">
                                Agar <b>Smart Environmetal</b> dari inovasi Edu Sampah Cipta Kerja (TPS3R Mulyoagung
                                bersatu Dau) dan TPA Sampah Wisata Edukasi Talangagung Kepanjen ini bisa berjalan terus
                                dan berkembang dalam prosesnya maka upaya yang telah dilakukan adalah melakukan
                                keterbukaan untuk dikunjungi, berdiskusi dengan pengunjung secara terbuka sehingga
                                mendapatkan masukan untuk mengembangkan inovasi ini. Seperti pada inovasi Edu Sampah
                                Cipta Kerja (TPS3R Mulyoagung bersatu Dau) sudah mendapat kunjungans sekitar 30.000
                                pengunjung yang ingin belajar untuk peduli sampah dari kabupaten malang ataupun dari
                                luar daerah. Dan saat ini telah dikembangkan digitalisasi penerimaan iuran dari
                                masyarakat yang bekerja sama dengan Bank Jatim. Mengikut sertakan Kompetisi Inovasi
                                Pelayanan Publik yang diselenggarakan oleh Kementerian PANRB dimana pada tahun 2021
                                inovasi ini telah terpilih TOP 99 inovasil pelayanan Publik.
                            </p>
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
