@extends('SmartEco_layout.SmrEco')

@section('hero')
    <div id="hero" class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">E-AGRIPROP</h1>
                <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up" data-aos-delay="400">
                    <b>E-AGRIPROP,</b>
                    sebuah aplikasi berbasis website yang digunakan untuk mengajukan proposal
                    di bidang pertanian. Adapun penyuluhan lapangan langsung dari Dinas Tanaman Pangan, Hortikultura
                    dan Perkebunan yang nantinya memverifikasi usulan-usulan untuk dikembangkan bersama.
                </p>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="http://agriprop.malangkab.go.id/" target="_blank"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('img/Smart/Eco/Eco1.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection

@section('tujuan')
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
@endsection

@section('kendala')
    <div class="container" data-aos="fade-up">

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-7">
                <h3>
                    Kendala <b>V/S</b> Penyelesaian Smart Economyernance
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
                            Mulai Tahun 2022-2023 dilakukan pemindahan server dari Dinas Tanaman Pangan,
                            Hortikultura dan Perkebunan ke Dinas Komunikasi dan Informatika sehingga selama 1 tahun
                            aplikasi ini tidak dapat dioperasikan seperti sebelumnya. Pemindahan server ini
                            mengakibatkan beberapa menu ataupun fungsi dalam aplikasi tidak dapat berfungsi seperti
                            seharusnya, sehingga membutuhkan perbaikan.
                        </p>
                    </div>
                    <!-- End Tab 1 Content -->

                    <div class="tab-pane fade show" id="tab2">
                        <p style="text-indent: 45px!important;">
                            Di tahun 2023 telah dilakukan koordinasi dengan Dinas Kominfo terkait waktu penyelesaian
                            migrasi server beserta databasenya dan sudah dilakukan migrasi oleh Dinas Kominfo hanya
                            saja masih perlu adanya perbaikan agar menu ataupun fungsi dalam aplikasi tidak dapat
                            berfungsi seperti seharusnya.
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
@endsection
