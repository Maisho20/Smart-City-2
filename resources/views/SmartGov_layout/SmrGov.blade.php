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
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
                <img src="{{ asset('img/logo.png') }}" alt="">
                <span>Smart Governence</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#features">Features</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Smart City</a></li>
                    <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Gov/Gov1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Values Section ======= -->
        {{-- <section id="values" class="values" name="Our Web Design Company’s Values">

            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>We blend creativity with technical precision to deliver results that exceed expectations. </p>
                </header>
                <p>Whether you're a business seeking a captivating online storefront or an organization in need of
                    insightful mapping solutions, we tailor our expertise to meet your goals</p>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('img/values-1.png') }}" class="img-fluid" alt="">
                            <h3>Friendly</h3>
                            <p>Our approach is down-to-earth and just plain friendly. We love our clients, we love
                                seeing you succeed, and we’re here to help..</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{ asset('img/values-2.png') }}" class="img-fluid" alt="">
                            <h3>Client-Centric</h3>
                            <p>We believe in partnerships. Our process involves listening closely to your vision,
                                understanding your objectives, and collaborating closely at every step to ensure the end
                                result not only meets but surpasses your expectations.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <img src="{{ asset('img/values-3.png') }}" class="img-fluid" alt="">
                            <h3>Intuitive</h3>
                            <p>Technology can be frustratingly complex. We aim to keep things as painless as possible.
                                Our goal is that your experience will be simple and enjoyable..</p>
                        </div>
                    </div>

                </div>

            </div>

        </section> --}}
        <!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="51" data-purecounter-duration="1"
                                    data-purecounter-suffix="%" class="purecounter"></span>


                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Years Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="5"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

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
        <!-- ======= Features Section ======= -->
        <section id="services" class="features">

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

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Services</h2>
                    <p>Website and Web Application Development</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-layout-masonry-line icon"></i>
                            <h3>Responsive Design</h3>
                            <p>

                                Client-focused, customer-centric solutions.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-coins-line icon"></i>
                            <h3>E-Commerce</h3>
                            <p>Start selling right away!</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-user-follow-line icon"></i>
                            <h3>User Experience</h3>
                            <p>Your customer will love it!</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-rocket-line icon"></i>
                            <h3>Fast Page Loading</h3>
                            <p>We don’t make our customers wait.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-wheelchair-line icon"></i>
                            <h3>Aim for accessibility.</h3>
                            <p>Contrast and background effectiveness, all text responsive</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-device-line icon"></i>
                            <h3>Mobile solutions</h3>
                            <p>Added value to mobile solutions for society, industries, organizations, and
                                administrative departments.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section> --}}
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #07d5c0;">Free Quote</h3>
                            <div class="price"><sup>$</sup>0<span> / mo</span></div>
                            <img src="{{ asset('img/pricing-free.png') }}" class="img-fluid" alt="">
                            <ul>
                                <li>Web site app quote</li>
                                <li>Revisions</li>
                                <li class="na">Installation</li>
                                <li class="na">Database design</li>
                                <li class="na">Web Design</li>
                            </ul>
                            <a href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com (Free Quote)&body=I need you to ..."
                                class="btn-buy">Contact Us</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Software Installation</h3>
                            <div class="price"><sup>$</sup>150<span>/Domain</span></div>
                            <img src="{{ asset('img/pricing-starter.png') }}" class="img-fluid" alt="">
                            <ul>
                                <li>Software Upload</li>
                                <li>Installation</li>
                                <li>Database setup + migr</li>
                                <li class="na">Upgrades</li>
                                <li class="na">Bug fixes</li>
                            </ul>
                            <a href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com (Installation)&body=I need you to ..."
                                class="btn-buy">Contact Us</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <h3 style="color: #ff901c;">Website/ app Creation</h3>
                            <div class="price">From <sup>$</sup>199<span> +</span></div>
                            <img src="{{ asset('img/pricing-business.png') }}" class="img-fluid" alt="">
                            <ul>
                                <li>Home page</li>
                                <li>3 pages</li>
                                <li>Contact form</li>
                                <li>10 revisions</li>
                                <li>Installation</li>
                            </ul>
                            <a href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com (Website/ app Creation)&body=I need you to ..."
                                class="btn-buy">Contact Us</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;">Full Stack service</h3>
                            <div class="price"><sup>$</sup>100<span> / h</span></div>
                            <img src="{{ asset('img/pricing-ultimate.png') }}" class="img-fluid" alt="">
                            <ul>
                                <li>Website/ app Creation</li>
                                <li>Hosting/Cloud/ installation</li>
                                <li>Unlimited upgrades</li>
                                <li>Unlimited updates</li>
                                <li>Unlimited revisions</li>
                            </ul>
                            <a href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com (Full Stack service)&body=I need you to ..."
                                class="btn-buy">Contact Us</a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        How much does a new website cost?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        There’s not one single answer to this question. A website design is quoted based
                                        on the needs of each individual project. Every website is unique and requires
                                        different components; we design and develop custom websites specifically for
                                        your small business.
                                        We’ll ask a lot of questions, assess your needs, and give you a quote based on
                                        that assessment. Most of our sites run in the $3,000 – $5,000 range, but can be
                                        more or less depending on needs.
                                    </div>
                                </div>
                            </div>




                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        How long will it take to get a new website?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        On average, we shoot for a six to eight week turnaround, but the pace of any
                                        project is set by each client. How much input you can provide during the initial
                                        stages, your availability with feedback, how soon the content is ready – all
                                        this affects the
                                        speed of completion. The functionality needs may also play a role – more complex
                                        sites will take more time to develop.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        Why <b>Web</b>Wonders & <b>Carto</b>Craft?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Discover <b>Web</b>Wonders & <b>Carto</b>Craft, your gateway to transformative
                                        web design and innovative mapping solutions. Our skilled team seamlessly blends
                                        artistic creativity with cutting-edge technology to construct visually
                                        captivating websites that engage and convert. Beyond web design, we excel in
                                        dynamic map integration, leveraging geospatial insights to empower your digital
                                        presence. Whether you're a business aiming to dominate online markets or an
                                        organization seeking insightful mapping solutions, we tailor strategies that
                                        drive results. Partner with us to unlock new digital horizons and lead with
                                        innovation.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                        What if I need help on my site down the road?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        We are only an email away! We’re here to help you as much or as little as you
                                        need, and we won’t disappear once the site is launched. We’ve been doing this
                                        for many years, so we aren’t going anywhere anytime soon.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                        When do I pay?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        For most projects, equal payments are made at the start, midway, and the end of
                                        the project, but we can work with you to set up a schedule that meets your
                                        needs. We understand that this is a big investment and want to help you budget
                                        for the expense in
                                        whatever way possible.<br> We accept checks, PayPal, and all major credit cards.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Absolutely! Having a mobile-friendly website is more important than ever! We
                                        work hard to ensure your website looks great on a variety of devices.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Smart City</h2>
                    <p>Check our latest work</p>
                    <p>Smart City</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('Portfolio/img/Medilab-bootstrap-website-template.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Smart Environment</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('Portfolio/img/Medilab-bootstrap-website-template.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Medilab"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Demo" target="_Blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('Portfolio/img/OnePage-bootstrap-website-template.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Smart Governance</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('Portfolio/img/OnePage-bootstrap-website-template.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"
                                        title="One Page"><i class="bi bi-plus"></i></a>
                                    <a href="#" title="Demo" target="_Blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Smart Branding</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Smart Economy</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('Portfolio/img/Company-bootstrap-website-template.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Smart Living</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('Portfolio/img/Company-bootstrap-website-template.png') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Company"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Demo" target="_Blank"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Smart Society</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimonials</h2>
                    <p>What our clients are saying about us</p>
                </header>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    @tn76com my best experience ever.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    My website built using WordPress Divi theme is SO GOOD 100/10.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>3F Founder</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    We're running all ticketing trough their awesome platform for our event #fwssummit
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Event manager</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    @tn76com I love my @pizzagotn :) Easy platform to use, fantastic staff and nothing
                                    but great results!
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Restaurant owner </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    @tn76com So glad to work with you.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <!-- End Testimonials Section -->



        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Clients</h2>
                    <p>Committed to reshaping their organizations and driving lasting value</p>
                </header>

                <div class="clients-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>
        <!-- End Clients Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts from our Blog</p>
                </header>

                <div class="row">



                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <span id="date1" name="date1"></span>
                            <h3 class="post-title">5 Secrets to Becoming a More Innovative Business Owner</h3>
                            <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <span id="date2" name="date2"></span>
                            <h3 class="post-title">How companies use Square Root Costing</h3>
                            <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-recent-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <span id="date3" name="date3"></span>
                            <h3 class="post-title">The new landscape of growth strategy</h3>
                            <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <script>
                    const today = new Date()
                    const date1 = new Date(today)
                    const date2 = new Date(today)
                    const date3 = new Date(today)
                    date1.setDate(date1.getDate() - 1)
                    date2.setDate(date2.getDate() - 1)
                    date3.setDate(date3.getDate() - 2)
                    document.getElementById("date1").innerHTML = date1.toDateString();
                    document.getElementById("date2").innerHTML = date2.toDateString();
                    document.getElementById("date3").innerHTML = date3.toDateString();
                </script>

            </div>

        </section>
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>
                                        San Marcos<br> California USA <br><br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-chat-text"></i>

                                    <h3>Text Us</h3>
                                    <p>
                                        <a class="whatsapp" href="https://wa.me/+17604814120/?text=Hello, Please ">
                                            <i class="bi bi-whatsapp"></i> WhatsApp
                                        </a>
                                    </p>
                                    <p>
                                        <a href="tel:+17604814120 "><i class="bi-telephone"></i> +1 (760) 481-4120
                                        </a>
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p><a
                                            href="mailto:tounsils@gmail.com?subject=Contacting throu tn76.com&body=I need you to ...">tounsils@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9 a.m. to 6 p.m</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

            </div>

            </div>

        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

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
