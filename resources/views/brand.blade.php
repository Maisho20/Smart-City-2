@extends('SmartBran_layout.SmrBran')

@section('hero')
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
                    </p>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Brand/Brand1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('gambar')
    <div class="container">
        <div class="row pt-5" data-aos="fade-up">
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

        <div class="row pt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <p style="text-indent: 45px!important; padding-top: 5rem">
                    <b>Smart Branding</b> ini diharapkan dapat memberikan dampak positif bagi peningkatan kunjungan
                    wisatawan, peningkatan perekonomian masyarakat dan peningkatan kualitas hidup masyarakat Kabupaten
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
                    wisatawan, peningkatan perekonomian masyarakat dan peningkatan kualitas hidup masyarakat Kabupaten
                    Malang.
                </p>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
@endsection

@section('tujuan')
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
                                <i class="ri-profile-line"></i>
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
                                <i class="ri-account-box-line"></i>
                                <div>
                                    <h4>Ketiga</h4>
                                    <p>
                                        Memperkuat peran Perangkat Daerah sebagai koordinator mekanisme perencanaan satu
                                        pintu.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-stack-line"></i>
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
@endsection

@section('kendala')
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
@endsection
