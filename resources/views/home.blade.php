@extends('layouts.home_layouts')

@section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <img src="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" alt="">
                <span>Smart City Kabupaten Malang</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#smart">Smart City</a></li>
                    <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#dokumen">Dokumen</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
@endsection

@section('about')
    <section class="pt-5">
        <div class="container-xxl py-5 pt-5" id="about">
            <div class="container">
                <div class="row g-4 align-items-end mb-4">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img class="img-fluid rounded" src="{{ asset('img/florawisata.jpg') }}"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang kami</p>
                        <h1 class="display-5 mb-4">Smart City Kabupaten Malang</h1>
                        <p class="mb-4">
                            Saat ini, Smart City (Kota Cerdas) sedang dikembangkan di beberapa daerah di Indonesia. Termasuk
                            Kabupaten Malang, Jawa Timur. Salah satu tujuannya dikembangkan sistem ini adalah untuk
                            mempermudah masyarakat khususnya yang bertempat tinggal di sekitar Kabupaten Malang.
                            Dengan adanya pengembangan Smart City, masyarakat diberikan fasilitas dengan memperhatikan
                            kebutuhan setiap harinya. Dengan demikian, masyarakat Kabupaten Malang lebih mudah mendapatkan
                            informasi seputar berita lokal.
                        </p>

                        <div class="border rounded p-4" data-aos="fade-up">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                        aria-selected="true">Deskripsi
                                    </button>
                                    {{-- <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-mission" type="button" role="tab"
                                        aria-controls="nav-mission" aria-selected="false">Lokasi
                                    </button> --}}
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                {{-- <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                    aria-labelledby="nav-mission-tab">
                                    <p class="mb-0">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5744.901536727792!2d112.67663673296389!3d-8.439488875114831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd601147042ed43%3A0x3d8b26de55357956!2sPantai%20Tiga%20Warna!5e0!3m2!1sid!2sid!4v1683266958659!5m2!1sid!2sid"
                                            width="574.4" height="264" style="border:0; position:center;"
                                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </p>
                                </div> --}}
                                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                    aria-labelledby="nav-story-tab">
                                    <p>
                                        Salah satu dari ciri khas Kabupaten Malang yaitu florawisata Santerra de Laponte
                                        yang menjadi
                                        brandingnya. Adapun pembahasan tentang Smart Branding dengan memberikan rekomendasi
                                        seputar
                                        wisata di Kabupaten Malang.
                                    </p>
                                    <p>
                                        Dengan menguatkan Smart Branding, Kabupaten Malang dinilai telah mampu mengembangkan
                                        wisata
                                        untuk warga lokal ataupun luar dari Kabupaten Malang. Menciptakan tempat wisata yang
                                        menarik dan
                                        harga yang terjangkau.
                                    </p>
                                    <p>
                                        Namun, bukan Santerra de Laponte saja yang dikembangkan. Jika menelaah dari Smart
                                        Branding
                                        akan lebih banyak lagi rekomendasi yang diberikan oleh pengelola wisata di Kabupaten
                                        Malang untuk warga lokal
                                        dan turis yang sedang ataupun ingin berlibur di Kabupaten Malang.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="smart" class="portfolio">

        <div class="container">

            <header class="section-header" data-aos="fade-down">
                <p>Smart City Kabupaten Malang</p>
            </header>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="100" id="portofolio-container">

                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="{{ asset($item['smartIco']) }}"
                                class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                                width="80">
                            <img src="{{ asset($item['smartIco']) }}"
                                class="col-lg-3 position-absolute pt-3 ps-3 d-none d-md-block img-fluid" alt=""
                                width="200">

                            <img src="{{ asset($item['smartImg']) }}" class="img-fluid" alt="">

                            <div class="portfolio-info">
                                <a href="{{ $item['routes'] }}">
                                    <h4>{{ $item['judulSmart'] }}</h4>
                                </a>
                                <p>
                                    <b>{{ $item['subJudulSmart'] }}</b>
                                    <br>
                                    {{ $item['smartDesc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/envIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/envIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 d-none d-md-block img-fluid" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/environment.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartEnv">
                                <h4>Smart Environment</h4>
                            </a>
                            <p>
                                <b>Wisata Edukasi & Edu Sampah Cipta Kerja</b>
                                <br>
                                Penerapan proyek untuk mengelola energi, pengurangan limbah, pengawasan kualitas udara,
                                dan pengembangan kota cerdas.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- konten 2 --}}
                {{-- <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/govIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/govIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img\portfolio\gov.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartGov">
                                <h4>Smart Governance</h4>
                            </a>
                            <p>
                                <b>DESAKU TUNTAS</b>
                                <br>
                                Konsep pemerintahan berbasis Teknologi yang membahas suatu tata kelola serta pelayanan.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- konten 3 --}}
                {{-- <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/brndIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/brndIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/bran.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartBrand">
                                <h4>Smart Branding</h4>
                            </a>
                            <p>
                                <b>MATIC</b>
                                <br>
                                Menampilkan identitas kota dengan mengoptimalkan pemasaran melalui teknologi
                                untuk lingkup regional dan global.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- konten 4 --}}
                {{-- <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/ecoIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/ecoIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/eco.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartEco">
                                <h4>Smart Economy</h4>
                            </a>
                            <p>
                                <b>E-AGRIPROP</b>
                                <br>
                                Perekonomian berdasarkan inovasi teknologi berkonsep sumber daya, daya saing,
                                pembayaran dan infrastruktur informasi teknologi.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- konten 5 --}}
                {{-- <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/livIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/livIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/living.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartLiv">
                                <h4>Smart Living</h4>
                            </a>
                            <p>
                                <b>SMART health</b>
                                <br>
                                Mewujudkan tempat tinggal yang nyaman, layak dan efisien dengan mengkolaborasikan
                                penggunaan teknologi dan akses fasilitas yang memadai.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- konten 6 --}}
                {{-- <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <img src="{{ asset('img/portfolio/socIcn.png') }}"
                            class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                            width="80">
                        <img src="{{ asset('img/portfolio/socIcn.png') }}"
                            class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt=""
                            width="200">

                        <img src="{{ asset('img/portfolio/p.jpg') }}" class="img-fluid" alt="">

                        <div class="portfolio-info">
                            <a href="SmartSoc">
                                <h4>Smart Society</h4>
                            </a>
                            <p>
                                <b>CONTRA WAR</b>
                                <br>
                                Pemanfaatan penggunaan teknologi untuk menghubungkan masyarakat dengan fokus
                                ekonomi, kesejahteraan dan efektivitas institusi.
                            </p>
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>

    </section>
@endsection

@section('berita')
    <section id="berita">
        <div class="container">
            <header class="section-header pb-4" data-aos="fade-down">
                <p>Berita Smart City Kabupaten Malang</p>
            </header>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-3 col-md-5">
                    <div class="card rounded-5">
                        <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.
                            </p>
                            <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5">
                    <div class="card rounded-5">
                        <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.
                            </p>
                            <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5">
                    <div class="card rounded-5">
                        <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.
                            </p>
                            <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5">
                    <div class="card rounded-5">
                        <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.
                            </p>
                            <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5">
                    <div class="card rounded-5">
                        <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.
                            </p>
                            <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5">
                    <div class="card rounded-5">
                        <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.
                            </p>
                            <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection

@section('dokumen')
    <section id="dokumen">
        <div class="container">
            <header class="section-header pb-4" data-aos="fade-down">
                <p>Dokumen Smart City Kabupaten Malang</p>
            </header>


        </div>
    </section>
    {{-- <section>
        <div class="container">
            <div class="event-section-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title-box">
                            <h2 class="section-title">DOKUMEN SMART CITY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
