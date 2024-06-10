@extends('Home_layout.home_layouts')

@section('header')
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
                    <li><a class="nav-link scrollto" href="#nilai">Penilaian</a></li>
                    <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#dokumen">Dokumen</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
@endsection

@section('about')
    <section class="pt-5">
        <div class="container-xxl py-5 pt-5" id="about">
            <div class="container">
                <div class="row g-4 align-items-end mb-4">

                    {{-- gambar --}}
                    <div class="col-lg-6" data-aos="fade-right">

                        <div id="carouselGambar" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel"
                            data-bs-touch="true" data-bs-interval="5000">
                            <div class="carousel-inner">

                                {{-- gambar 1 --}}
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="{{ asset('img/about/aboutus.jpg') }}" class="d-block w-100 img-fluid rounded"
                                        alt="" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                </div>

                                {{-- gambar 2 --}}
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('img/about/BOONPRING.jpg') }}"
                                        class="d-block w-100 img-fluid rounded" alt=""
                                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                </div>

                                {{-- Gambar 3 --}}
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('img/about/Caffe Dancok.jpeg') }}"
                                        class="d-block w-100 img-fluid rounded" alt=""
                                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                </div>

                                {{-- Gambar 4 --}}
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('img/about/Tanjung Penyu.jpg') }}"
                                        class="d-block w-100 img-fluid rounded" alt=""
                                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                </div>
                            </div>
                        </div>
                        {{-- gambar end --}}
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
                                </div>
                            </nav>

                            {{-- deskripsi --}}
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                    aria-labelledby="nav-story-tab">

                                    <div id="carouselDeskripsi" class="carousel carousel-dark slide" data-bs-ride="carousel"
                                        data-bs-touch="true" data-bs-interval="5000">
                                        <div class="carousel-inner">

                                            {{-- deskripsi 1 --}}
                                            <div class="carousel-item active" data-bs-interval="5000">
                                                <p>
                                                    Terletak di Desa Sitiarjo, Kecamatan Sumber Manjing Wetan, Kabupaten
                                                    Malang. Jarak tempuh menuju Pantai 3 Warna dari pusat Kota Malang
                                                    sekitar 150 km atau sekitar 3 jam dengan kendaraan roda dua maupun roda
                                                    empat.
                                                    <br>
                                                    Rute Pantai 3 Warna dari wilayah Kota Malang, wisatawan dapat menuju ke
                                                    Kecamatan Bululawang kemudian Kecamatan Turen dan langsung ke area
                                                    Pantai Sendang Biru. Sesampainya arah Pantai Sendang Biru, ikuti arah ke
                                                    Clungup Mangrove Conservation.
                                                    <br>
                                                    Pantai Tiga Warna terletak di Kecamatan Sumber Manjing Wetan, Kabupaten
                                                    Malang, Jawa Timur. Pantai ini memiliki gradasi yang terdiri dari tiga
                                                    warna, yaitu Warna biru pada bagian terdalam, hijau pada bagian
                                                    terdangkal, dan cokelat kemerahan pada pasir pantai.
                                                    <br>
                                                </p>
                                            </div>

                                            {{-- deskripsi 2 --}}
                                            <div class="carousel-item" data-bs-interval="5000">
                                                <p>
                                                    Boonpring merupakan tempat wisata yang berada di Kabupaten Malang.
                                                    Tempat wisata ini memiliki keindahan alam yang sangat menarik. Boonpring
                                                    merupakan tempat wisata yang sangat cocok untuk berlibur bersama
                                                    keluarga ataupun teman.
                                                    <br>
                                                    Boonpring memiliki keindahan alam yang sangat menarik. Tempat ini sangat
                                                    cocok untuk berlibur bersama keluarga ataupun teman. Boonpring memiliki
                                                    keindahan alam yang sangat menarik. Tempat ini sangat cocok untuk
                                                    berlibur bersama keluarga ataupun teman.
                                                    <br>
                                                    Boonpring memiliki keindahan alam yang sangat menarik. Tempat ini sangat
                                                    cocok untuk berlibur bersama keluarga ataupun teman. Boonpring memiliki
                                                    keindahan alam yang sangat menarik. Tempat ini sangat cocok untuk
                                                    berlibur bersama keluarga ataupun teman.
                                                </p>
                                            </div>

                                            {{-- deskripsi 3 --}}
                                            <div class="carousel-item" data-bs-interval="5000">
                                                <p>
                                                    Caffe Dancok merupakan tempat wisata yang berada di Kabupaten Malang.
                                                    Tempat wisata ini memiliki keindahan alam yang sangat menarik. Caffe
                                                    Dancok merupakan tempat wisata yang sangat cocok untuk berlibur bersama
                                                    keluarga ataupun teman.
                                                    <br>
                                                    Caffe Dancok memiliki keindahan alam yang sangat menarik. Tempat ini
                                                    sangat cocok untuk berlibur bersama keluarga ataupun teman. Caffe Dancok
                                                    memiliki keindahan alam yang sangat menarik. Tempat ini sangat cocok
                                                    untuk berlibur bersama keluarga ataupun teman.
                                                </p>
                                            </div>

                                            {{-- deskripsi 4 --}}
                                            <div class="carousel-item" data-bs-interval="5000">
                                                <p>
                                                    Tanjung Penyu merupakan tempat wisata yang berada di Kabupaten Malang.
                                                    Tempat wisata ini memiliki keindahan alam yang sangat menarik. Tanjung
                                                    Penyu merupakan tempat wisata yang sangat cocok untuk berlibur bersama
                                                    keluarga ataupun teman.
                                                    <br>
                                                    Tanjung Penyu memiliki keindahan alam yang sangat menarik. Tempat ini
                                                    sangat cocok untuk berlibur bersama keluarga ataupun teman. Tanjung
                                                    Penyu memiliki keindahan alam yang sangat menarik. Tempat ini sangat
                                                    cocok untuk berlibur bersama keluarga ataupun teman.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- deskripsi end --}}
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
                        <div class="portfolio-wrap" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <img src="{{ asset('img/portfolio/' . $item->smartIco) }}"
                                class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                                width="80">
                            <img src="{{ asset('img/portfolio/' . $item->smartIco) }}"
                                class="col-lg-3 position-absolute pt-3 ps-3 d-none d-md-block img-fluid" alt=""
                                width="200">

                            <img src="{{ asset('img/portfolio/' . $item->smartImg) }}" class="img-fluid" alt="">

                            <div class="portfolio-info">
                                <a href="{{ $item->routes }}">
                                    <h4>{{ $item->judulSmart }}</h4>
                                </a>
                                <p>
                                    <b>{{ $item->subJudulSmart }}</b>
                                    <br>
                                    {{ $item->smartDesc }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>
@endsection

@section('nilai')
    <section id="nilai">
        <div class="container">

            <header class="section-header" data-aos="fade-down">
                <p>Penilaian Smart City Kabupaten Malang</p>
            </header>

            <div class="d-flex flex-column text-center p-5">

                {{-- <div class="col pb-3" data-aos="fade-right">
                    <img class="img-fluid rounded mb-3" src="{{ asset('img/penilaian/penilaian-eval-kabMalang.jpg') }}"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </br>
                    <b class="">Evaluasi tahun 2022 dan 2023</b>
                    </br>
                    <a href="#" target="blank"> Selengkapnya </a>
                </div> --}}

                <!-- Tab Content -->
                <div class="col pb-4 pt-4 align-items-center"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"data-aos="fade-left">

                    <ul class="nav nav-pills mb-3 gap-2 px-5 mx-3 justify-content-center">

                        <!-- button tahun -->
                        <li>
                            <a class="nav-link active" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 5px;"
                                data-bs-toggle="pill" href="#tab1">
                                Tahun 2022
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 5px;"
                                data-bs-toggle="pill" href="#tab2">
                                Tahun 2023
                            </a>
                        </li>
                    </ul>

                    <div class="rounded tab-content align-items-center">

                        <!-- Start Tab 1 Content -->
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="col p-3" data-aos="fade-right">
                                <img class="img-fluid rounded mb-3"
                                    src="{{ asset('img/penilaian/hasil perbandingan 2022.jpg') }}"
                                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <br>
                                <b>Evaluasi tahun 2022</b>
                                <br>
                                <a href="{{ route('penilaian_2022') }}" target="_blank"> Selengkapnya </a>
                            </div>

                            <img class="img-fluid rounded" src="{{ asset('img/penilaian/penilaian-2023.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <!-- End Tab 1 Content -->

                        <!-- Start Tab 2 Content -->
                        <div class="tab-pane fade show" id="tab2">
                            <div class="col p-3" data-aos="fade-right">
                                <img class="img-fluid rounded mb-3"
                                    src="{{ asset('img/penilaian/penilaian-eval-kabMalang.jpg') }}" alt="">
                                <br>
                                <b>Evaluasi tahun 2023</b>
                                <br>
                                <a href="penilaian_2023" target="_blank">Selengkapnya</a>
                            </div>

                            <img class="img-fluid rounded" src="{{ asset('img/penilaian/penilaian-2023.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <!-- End Tab 2 Content -->
                    </div>
                    {{-- end --}}
                </div>
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

                {{-- @for ($i = 0; $i < 8; $i++) --}}
                @foreach ($news as $berita)
                    <div class="col-lg-3 col-md-5">
                        <div class="card rounded-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $berita->deskripsi }}
                                </p>
                                <a href="{{ $berita->link }}" target="_blank" class="btn btn-primary float-end">Baca
                                    lebih
                                    lengkap</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @endfor --}}

            </div>
        </div>

    </section>
@endsection

@section('dokumen')
    <section id="dokumen">
        <div class="container">
            <header class="section-header pb-4 " data-aos="fade-down">
                <p>Dokumen Smart City Kabupaten Malang</p>
            </header>

            <div class="dokumen-container" data-aos="fade-up">
                <div class="dokumen-wrapper px-3 mx-2">
                    @foreach ($dokumen as $doc)
                        @for ($i = 0; $i < 5; $i++)
                            <div class="dokumen-item">
                                <div class="card p-3 border-4"
                                    style="border-image: linear-gradient(45deg, rgb(97, 124, 245), rgb(140, 228, 243)) 1;
                        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                    <img src="{{ asset('storage/' . $doc->image) }}" class="card-img-top">
                                    <div class="p-3">
                                        <h5>
                                            <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                                class="text-dark">
                                                {{ $doc->judul }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endforeach
                </div>
            </div>

            <div class="pagination-container">
                <button class="prev-button" onclick="prevPage()">Previous</button>
                <button class="next-button" onclick="nextPage()">Next</button>
            </div>
        </div>
    </section>

    <script>
        let currentPage = 0;
        const itemsPerPage = 5;
        const dokumenWrapper = document.querySelector('.dokumen-wrapper');
        const dokumenItems = document.querySelectorAll('.dokumen-item');
        const totalPages = Math.ceil(dokumenItems.length / itemsPerPage);

        function updatePagination() {
            const gap = parseInt(getComputedStyle(dokumenWrapper).gap) || 0;
            const offset = -currentPage * (dokumenItems[0].clientWidth + gap) * itemsPerPage;
            dokumenWrapper.style.transform = `translateX(${offset}px)`;

            document.querySelector('.prev-button').disabled = currentPage === 0;
            document.querySelector('.next-button').disabled = currentPage === totalPages - 1;
        }

        function prevPage() {
            if (currentPage > 0) {
                currentPage--;
                updatePagination();
            }
        }

        function nextPage() {
            if (currentPage < totalPages - 1) {
                currentPage++;
                updatePagination();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            dokumenWrapper.style.width =
                `${itemsPerPage * (dokumenItems[0].clientWidth + parseInt(getComputedStyle(dokumenWrapper).gap))}px`;
            dokumenItems.forEach((item) => {
                item.style.width = '200px';
            });
            updatePagination();
        });
    </script>




    {{-- <section id="dokumen">
        <div class="container">
            <header class="section-header pb-4" data-aos="fade-down">
                <p>Dokumen Smart City Kabupaten Malang</p>
            </header>

            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" data-aos="fade-up">
                @foreach ($dokumen as $doc)
                    <div class="col-lg-2 col-md-2">
                        <div class="card p-3 border-4"
                            style="border-image: linear-gradient(45deg, rgb(97, 124, 245), rgb(140, 228, 243))1;
                        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <img src="{{ asset('storage/' . $doc->image) }}" class="card-img-top">
                            <div class="p-3">
                                <h5>
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank" class="text-dark">
                                        {{ $doc->judul }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section> --}}
@endsection
