@extends('Penilaian_layout.penl')

@section('hero')
    <section id="about" class="hero d-flex align-items-center">
        <div id="hero" class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">LAPORAN HASIL EVALUASI IMPLEMENTASI KOTA CERDAS (SMART CITY)
                        TAHUN 2022 KABUPATEN MALANG
                    </h1>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/penilaian/hasil perbandingan 2022.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('kendala')
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-10">
                    <h3>
                        Hasil <b>Evaluasi</b> Tahun <b>2022</b>
                    </h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">KELEMAHAN

                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">KEKUATAN

                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">REKOMENDASI

                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab4">IMPLEMENTASI KOTA CERDAS
                                (SMART CITY) KABUPATEN MALANG 2022

                            </a>
                        </li>
                    </ul>
                    <!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p style="text-indent: 45px!important;">
                            <ol>
                                <li>Saat pelaksanaan evaluasi jajaran Pemerintah Kabupaten Malang masih fokus
                                    pada penanganan Tragedi Kanjuruhan. Banyak pejabat yang tidak bisa hadir dalam
                                    proses evaluasi Smart City dan hal ini bisa di mengerti.
                                </li>
                                <li>Belum adanya Peraturan Bupati atau Peraturan Daerah untuk menetapkan Masterplan
                                    Smart City Kabupaten Malang.
                                </li>
                                <li>Dewan Smart City dan Tim Pelaksana Smart City belum melaksanakan tugasnya dengan baik.
                                </li>
                                <li>Forum Smart City belum dilaksanakan secara berkala.</li>
                                <li>Belum adanya rencana aksi pengembangan SDM</li>
                                <li>Pembiayaan program Smart City yang bersumber dari APBD masih sangat minim.</li>
                                <li>Nilai indeks SPBE masih rendah.</li>
                                <li>Komitmen Kepala Daerah dan seluruh Perangkat Daerah untuk implementasi Smart City masih
                                    kurang</li>
                                <li>Jawaban kuesioner belum disertai dengan data dukung yang valid dan lengkap</li>
                            </ol>
                            </p>
                        </div>
                        <!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <p style="text-indent: 45px!important;">
                            <ol>
                                <li>Proses pengolahan sampah di TPA Talangagung dan TPA Bamboe Petong sangat
                                    baik dan patut diapresiasi. Bisa menjadi percontohan</li>
                                <li>Program mitigasi bencana sudah bagus</li>
                                <li>Inovasi daur ulang sampah bagus</li>
                                <li>Penetapan manajemen resiko bagus</li>
                                <li>Kabupaten Malang memiliki potensi ekonomi (Pariwisata) yang besar</li>
                                <li>Kabupaten Malang mempunyai potensi yang besar untuk menjadi salah satu smart city
                                    yang berhasil, tentu saja harus disertai dengan kelengkapan berbagai aspek yang
                                    mengarahkan, mendukung, dan menjaga keberlangsungannya</li>
                            </ol>
                            </p>
                        </div>

                        <div class="tab-pane fade show" id="tab3">
                            <p style="text-indent: 45px!important;">
                            <ol>
                                <li>Mempercepat pengesahan dan penetapan Peraturan Bupati atau Peraturan Daerah
                                    untuk menetapkan Masterplan Smart City Kabupaten Malang</li>
                                <li>Meningkatkan sumber pembiayaan APBD dan non-APBD untuk pembiayaan Smart
                                    City</li>
                                <li>Perlu meningkatkan kinerja Dewan Smart City dan Tim Pelaksana Smart City</li>
                                <li>Perlunya melaksanakan forum smart city secara berkala untuk penyamaan persepsi
                                    tentang Smart City dan mereviu implementasi program Smart City</li>
                                <li>Perlu meningkatkan keterlibatan masyarakat dalam implementasi Smart City</li>
                                <li>Perlu meningkatkan sosialisasi tentang Smart City kepada seluruh jajaran ASN di
                                    Kabuapten Malang, masyarakat, dan sektor swasta</li>
                                <li>Perlu meningkatkan literasi digital dan literasi Smart City kepada masyarkaat</li>
                                <li>Perlu meningkatkan komitmen kepala daerah dan selruh pimpinan perangkat daerah
                                    untuk mengimplementasikan smart city</li>
                                <li>Perlu meningkatkan integrasi dan interoperablitas sistem dan data untuk meningkatkan
                                    nilai indeks SPBE dan mewujudkan Satu Data Indonesia</li>
                            </ol>
                            </p>
                        </div>

                        <div class="tab-pane fade show" id="tab4">
                            <embed src="{{ asset('docs/LAPORAN_EVALUASI_SC_2022_Kab Malang.pdf') }}" type="application/pdf"
                                style="width: 100%; height: 100vh">
                            {{-- <iframe src="{{ asset('docs/LAPORAN_EVALUASI_SC_2022_Kab Malang.pdf') }}"
                                style="width: 100%; height: 100vh" frameborder="0"></iframe> --}}
                            {{-- <div class="col-lg-40 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                                <img src="{{ asset('img/penilaian/pen A.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('img/penilaian/pen B.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('img/penilaian/pen C.1.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('img/penilaian/pen C.2.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('img/penilaian/pen C.3.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('img/penilaian/pen D.jpg') }}" class="img-fluid" alt="">
                                <img src="{{ asset('img/penilaian/pen E.jpg') }}" class="img-fluid" alt="">
                            </div> --}}
                        </div>
                        <!-- End Tab 2 Content -->
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
