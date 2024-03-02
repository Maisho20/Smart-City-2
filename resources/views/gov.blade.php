@extends('SmartGov_layout.SmrGov')

@section('hero')
    <section id="about" class="hero d-flex align-items-center">
        <div id="hero" class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">DESAKU TUNTAS</h1>
                    <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up" data-aos-delay="400">
                        <b>Desaku Tuntas,</b>
                        program administrasi kependudukan Dinas Kependudukan dan Pencatatan Sipil Kabupaten Malang,
                        memudahkan masyarakat dengan layanan gratis melalui aplikasi website. Diluncurkan pada 9 Maret 2021,
                        kini melibatkan 298
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
@endsection

@section('alur')
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
                                    <p>Berkas dibawa ke kantor desa setempat.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-device-line"></i>
                                <div>
                                    <h4>Langkah Kedua</h4>
                                    <p>Petugas desa akan memeriksa berkas dan mengajukan ke Dinas Kependudukan dan
                                        Pencatatan Sipil melalui
                                        sistem <b>DESAKU TUNTAS</b>.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-user-follow-line"></i>
                                <div>
                                    <h4>Langkah Ketiga</h4>
                                    <p>Berkas diproses di Dinas Kependudukan dan Pencatatan Sipil.</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-collage-line"></i>
                                <div>
                                    <h4>Langkah Keempat</h4>
                                    <p>Dokumen bisa diambil di kantor desa detempat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Feature Icons -->
        </div>
    </section>
@endsection

@section('kendala')
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
                                operator Dinas Kependudukan dan Pencatatan Sipil, pemberian bimbingan teknis kepada
                                Petugas Registrasi Desa
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
@endsection
