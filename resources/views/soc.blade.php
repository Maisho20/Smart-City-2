@extends('SmartSoc_layout.SmrSoc')

@section('hero')
    <div id="hero" class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">CONTRA WAR</h1>
                <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up" data-aos-delay="400">
                    <b>CONTRA WAR</b> adalah sebuah aplikasi yang dibuat untuk mempermudah masyarakat dalam
                    mengakses layanan kesehatan. Aplikasi ini memiliki beberapa fitur yang dapat membantu masyarakat
                    dalam mengakses layanan kesehatan, seperti layanan eBooking, riwayat kesehatan, dan kepesertaan
                    BPJS. Aplikasi ini juga memiliki fitur telekonsultasi dan rujukan terintegrasi. Dengan adanya
                    aplikasi ini, diharapkan masyarakat dapat dengan mudah mengakses layanan kesehatan tanpa harus
                    datang ke fasilitas kesehatan. Aplikasi ini juga dapat membantu pemerintah dalam
                    mengintegrasikan program dan inovasi dalam pelayanan kesehatan.
                </p>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="http://contrawar.malangkab.go.id/" target="_blank"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('img/Smart/Soc/Soc1.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection

@section('alur')
    <div class="container" data-aos="fade-up">

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
            <h3>Alur <b>CONTRA WAR</b></h3>

            <div class="row">

                <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('img/features-3.png') }}" class="img-fluid p-4" alt="">
                </div>

                <div class="col-xl-8 d-flex content">
                    <div class="row align-self-center gy-4">


                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="ri-survey-line"></i>
                            <div>
                                <h4>Pertama</h4>
                                <p>
                                    Kader KB melakukan surveilans.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="ri-service-line"></i>
                            <div>
                                <h4>Kedua</h4>
                                <p>
                                    PUS RISTI ditemmukan dengan kader KB.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="ri-file-chart-line"></i>
                            <div>
                                <h4>Ketiga</h4>
                                <p>
                                    Kader KB melaporkan temuan ke PLKB.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="ri-nurse-line"></i>
                            <div>
                                <h4>Keempat</h4>
                                <p>
                                    PLKB bersama Bidan menindaklanjuti untuk melakukan <b>home visit</b>.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="ri-hospital-line"></i>
                            <div>
                                <h4>Kelima</h4>
                                <p>
                                    PUS RISTI melakukan pemerikasaan secara medis.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="ri-clipboard-line"></i>
                            <div>
                                <h4>Keenam</h4>
                                <p>
                                    PLKB mengirim laporan ke server <b>Contra War Online</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- End Feature Icons -->

    </div>
@endsection


@section('wadool')
    <div id="hero" class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">WADOOL</h1>
                <p style="font-size: 20px!important; text-indent: 45px!important;" data-aos="fade-up" data-aos-delay="400">
                    <b>WADOOL</b> merupakan aplikasi berbasis mobile dari Dinas Pemberdayaan Perempuan dan
                    Perlindungan Anak Kabupaten Malang untuk untuk menunjang pelayanan prima bagi masyarakat
                    Kabupaten Malang dalam menangani kekerasan perempuan dan anak, Dengan adanya aplikasi WADOOL
                    DP3A masyarakat dapat melapor atau konseling dengan mudah apabila mengalami/mengetahui masalah
                    kekerasan yang dialami.
                </p>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('img/Smart/Soc/Soc2.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection

@section('kendala')
    <div class="container" data-aos="fade-up">

        <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-7">
                <h3>
                    Kendala <b>V/S</b> Penyelesaian Smart Society
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
                        <div class="d-flex align-items-center mb-2">
                            <i class="ri-arrow-drop-right-line"></i>
                            <p>
                                Kendala yang dihadapi adalah masih beragam Kompetensi petugas surveilans, sehingga
                                hasil surveilans pada ibu2 resiko tinggi perlu dilakukan verifikasi lanjutan. Selain
                                itu, data hasil surveilans belum dimanfaatkan dalam penanganan penyakit penyertanya.
                            </p>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="ri-arrow-drop-right-line"></i>
                            <p>
                                Tantangan dalam membangun Smart City sangat kompleks dan dinamis. Semua pemangku
                                kepentingan harus melihatnya sebagai proyek infrastruktur jangka panjang sambil
                                menangani kebutuhan mendesak akan solusi jangka pendek untuk menyederhanakan dunia
                                kita yang semakin digital, terhubung, dan kompleks. Memaksimalkan potensi Smart City
                                hanya akan datang melalui kepercayaan warga yang dipadukan dengan bisnis dan
                                pemerintah yang mengutamakan keselamatan, efisiensi, dan keberlanjutan.
                            </p>
                        </div>
                    </div>
                    <!-- End Tab 1 Content -->

                    <div class="tab-pane fade show" id="tab2">
                        <div class="d-flex align-items-center mb-2">
                            <i class="ri-arrow-drop-right-line"></i>
                            <p>
                                Dinas Pengendalian Penduduk dan Keluarga Berencana akan terus melakukan inovasi
                                dalam mengembangkan aplikasi tersebut sehingga dapat mempermudah dalam
                                pemanfaatannya serta dapat menyajikan data dan informasi sesuai kebutuhan mengikuti
                                perkembangan waktu.
                            </p>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="ri-arrow-drop-right-line"></i>
                            <p>
                                Infrastruktur harus menjadi elemen dasar, Infrastruktur IT Smart City harus agile
                                dan fleksibel, Kota membutuhkan pemrosesan dan analisis data yang efektif dan
                                efisien, Kota harus melindungi data penduduk untuk meredakan masalah privasi,
                                Perbedaan politik bisa menjadi penghalang untuk penerapan Smart City, Organisasi
                                sektor publik dan swasta perlu berkoordinasi.
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
@endsection
