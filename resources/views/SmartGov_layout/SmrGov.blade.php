<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Governance</title>

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
                <span>Smart Governence</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Alur Program</a></li>
                    <li><a class="nav-link scrollto" href="#services">Kendala V/S Penyelesaian</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Smart City</a></li>
                    <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    {{-- <li><a class="getstarted scrollto"
                            href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com&body=I need you to ...">Get
                            Started</a></li> --}}
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
                    <h1 data-aos="fade-up">DESAKU TUNTAS</h1>
                    <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up"
                        data-aos-delay="400">
                        <b>Desaku Tuntas,</b>
                        program administrasi kependudukan Dinas Dukcapil Kabupaten Malang, memudahkan masyarakat dengan
                        layanan gratis melalui aplikasi website. Diluncurkan pada 9 Maret 2021, kini melibatkan 298
                        Desa/Kelurahan. Aplikasi baru diperkenalkan pada 7 Juli 2022, menunjukkan komitmen perbaikan.
                        Hingga September 2022, tercatat rata-rata 500 pengajuan per hari, dengan jaminan penyelesaian
                        dokumen adminduk dalam 5 hari kerja. Program ini terus berupaya meningkatkan aksesibilitas dan
                        efisiensi pelayanan administrasi kependudukan.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="http://sipeduli.malangkab.go.id/login" target="_blank"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Gov/Gov1.png') }}" class="img-fluid" alt="">
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
                <h3>Alur <b>DESAKU TUNTAS</b></h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/features-3.png') }}" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">


                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-customer-service-2-line"></i>
                                <div>
                                    <h4>Langkah Pertama</h4>
                                    <p>Berkas Dibawa ke kantor Desa setempat.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-device-line"></i>
                                <div>
                                    <h4>Langkah Kedua</h4>
                                    <p>Petugas desa memeriksa berkas dan mengajukan ke Dinas DukcapilL melalui
                                        sistem <b>DESAKU TUNTAS</b>.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-user-follow-line"></i>
                                <div>
                                    <h4>Langkah Ketiga</h4>
                                    <p>Berkas diroses di Dinas Dukcapil.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-collage-line"></i>
                                <div>
                                    <h4>Langkah Keempat</h4>
                                    <p>Dokumen diambil di Kantor Desa Setempat.</p>
                                </div>
                            </div>

                            {{-- <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-text-wrap"></i>
                                <div>
                                    <h4>Users’ contexts</h4>
                                    <p>Prioritize and hide content to suit users’ contexts.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-pencil-ruler-line"></i>
                                <div>
                                    <h4>Design patterns</h4>
                                    <p>Ease of use for users, quicken their familiarity.</p>
                                </div>
                            </div> --}}

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
                        {{-- <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Available Apps </a>
                        </li> --}}
                    </ul>
                    <!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p style="text-indent: 45px!important;"> Kendala/kebutuhan untuk mendukung <b>DESAKU
                                    TUNTAS</b> adalah tersedianya jaringan
                                server
                                yang baik dan stabil agar dapat diakses oleh Petugas Registrasi Desa dan Operator
                                pada Dinas Kependudukan dan Pencatatan Sipil dengan lancar dan konsisten. Selain itu
                                dibutuhkan lebih banyak sosialisasi ke masyarakat tentang adanya inovasi program
                                <b>DESAKU TUNTAS</b> pada desanya masing-masing.
                            </p>
                        </div>
                        <!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <p style="text-indent: 45px!important;">
                                Rencana pelaksanaan adalah peningkatan sosialisasi adanya program <b>DESAKU
                                    TUNTAS</b>
                                kepada seluruh masyarakat, peremajaan perangkat komputer baik untuk PRD atau untuk
                                operator Dinas Dukcapil, pemberian bimbingan teknis kepada Petugas Registrasi Desa
                                serta upaya optimalisasi aplikasi dan jaringan server
                            </p>
                        </div>
                        <!-- End Tab 2 Content -->
                    </div>

                </div>

                <div class="col-lg-5">
                    <img src="{{ asset('img/Smart/Gov/Gov2.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Solution</h4>
                        <p>Ready to embark on your digital journey? Let's bring your vision to life. Reach out to us
                            today for a free consultation.</p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a class="getstarted scrollto"
                            href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com&body=I need you to ...">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- End reusable part -->


        {{-- <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>Web and Carto</span>
                        </a>
                        <p>
                            Don't be afraid! We'll walk you through the entire process, hold your hand as much as you
                            need, and help you through all the technical aspects that may seem scary. We work best with
                            clients who leave the heavy lifting to us.
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/tn76com" class="twitter">
                                <i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook">
                                <i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram">
                                <i class="bi bi-instagram bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/mohameditounsi/" class="linkedin">
                                <i class="bi bi-linkedin bx bxl-linkedin"></i></a>

                            <a class="skype" href="skype:tounsi.med.ca">
                                <i class="bi bi-skype"></i>
                            </a>

                            <a class="github" href="https://github.com/tounsils">
                                <i class="bi bi-github"></i>
                            </a>

                            <a class="whatsapp" href="https://wa.me/+17604814120/?text=Hello, Please ">
                                <i class="bi bi-whatsapp"></i>
                            </a>




                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./Documentation/">Documentation</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            San Marcos<br> California USA <br><br>
                            <strong>Phone:</strong> +1 (760) 481-4120<br>
                            <strong>Email:</strong> <a
                                href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com&body=I need you to ...">tounsils@gmail.com</a><br>

                        <div class="social-links mt-3">
                            <a href="https://twitter.com/tn76com" class="twitter">
                                <i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook">
                                <i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram">
                                <i class="bi bi-instagram bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/mohameditounsi/" class="linkedin">
                                <i class="bi bi-linkedin bx bxl-linkedin"></i></a>

                            <a class="skype" href="skype:tounsi.med.ca">
                                <i class="bi bi-skype"></i>
                            </a>

                            <a class="github" href="https://github.com/tounsils">
                                <i class="bi bi-github"></i>
                            </a>

                            <a class="whatsapp" href="https://wa.me/+17604814120/?text=Hello, Please ">
                                <i class="bi bi-whatsapp"></i>
                            </a>





                        </div>



                        </p>

                    </div>

                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Copyright <strong><span>All Rights Reserved</span></strong>.
                {{-- <br><span>Web and Carto tn76.com</span> --}}
            </div>
            {{-- <div class="credits">
                Designed with BootstrapMade <br>

                <a href="https://stackoverflow.com/users/10537019/mohamed-tounsi?tab=profile"
                    class="sb-stackoverflow">
                    Mohamed I Tounsi (Stack-Overflow)</a>

                <br>

                <a href="https://github.com/tn76com/tn76com.github.io/blob/master/index.html">
                    <span class="bi bi-github"></span> Edit this page on GitHub</a> Last update <span
                    id="current-month"></span>

            </div> --}}
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
