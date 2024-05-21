@extends('SmartLiv_layout.SmrLiv')

@section('hero')
    <section id="about" class="hero d-flex align-items-center">
        <div id="hero" class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Smart Health</h1>
                    <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up" data-aos-delay="400">
                        <b>Smart Health</b>
                        adalah inovasi pelayanan kesehatan yang memanfaatkan teknologi informasi dan komunikasi
                        untuk meningkatkan kualitas pelayanan kesehatan masyarakat. Smart Health merupakan
                        bagian dari Smart Governance yang bertujuan untuk memberikan pelayanan kesehatan yang
                        lebih baik dan efisien bagi masyarakat. Smart Health juga memungkinkan masyarakat
                        untuk mendapatkan pelayanan kesehatan tanpa harus datang ke fasilitas kesehatan.
                    </p>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/Smart/Liv/Liv1.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('inovasi')
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
@endsection

@section('kendala')
    <section id="services" class="features">
        <div class="container" data-aos="fade-up">
            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-7">
                    <h3>
                        Kendala <b>V/S</b> Penyelesaian Smart Living
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
                    {{-- end --}}
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('img/Smart/Eco/Eco2.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
