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
                    <div class="col-lg-6 mySlides fade" data-aos="fade-right">
                        <img class="img-fluid rounded" src="{{ asset('img/florawisata.jpg') }}"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>

                    <div class="col-lg-6 mySlides fade" data-aos="fade-right">
                        <img class="img-fluid rounded" src="{{ asset('img/aboutus.jpg') }}"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>
                    {{-- gambar end --}}

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
                                    <div class="mySlides-2 fade-2">
                                        <p>
                                            Salah satu dari ciri khas Kabupaten Malang yaitu florawisata Santerra de Laponte
                                            yang menjadi
                                            brandingnya. Adapun pembahasan tentang Smart Branding dengan memberikan
                                            rekomendasi
                                            seputar
                                            wisata di Kabupaten Malang.
                                        </p>
                                        <p>
                                            Dengan menguatkan Smart Branding, Kabupaten Malang dinilai telah mampu
                                            mengembangkan
                                            wisata
                                            untuk warga lokal ataupun luar dari Kabupaten Malang. Menciptakan tempat wisata
                                            yang
                                            menarik dan
                                            harga yang terjangkau.
                                        </p>
                                        <p>
                                            Namun, bukan Santerra de Laponte saja yang dikembangkan. Jika menelaah dari
                                            Smart
                                            Branding
                                            akan lebih banyak lagi rekomendasi yang diberikan oleh pengelola wisata di
                                            Kabupaten
                                            Malang untuk warga lokal
                                            dan turis yang sedang ataupun ingin berlibur di Kabupaten Malang.
                                        </p>
                                    </div>

                                    <div class="mySlides-2 fade-2">
                                        <p>
                                            Terletak di Desa Sitiarjo, Kecamatan Sumber Manjing Wetan, Kabupaten Malang.
                                            Jarak
                                            tempuh menuju Pantai 3 Warna dari pusat Kota Malang sekitar 150 km atau sekitar
                                            3 jam
                                            dengan kendaraan roda dua maupun roda empat.
                                        </p>
                                        <p>
                                            Rute Pantai 3 Warna dari wilayah Kota Malang, wisatawan dapat menuju ke
                                            Kecamatan Bululawang kemudian Kecamatan Turen dan langsung ke area Pantai
                                            Sendang Biru.
                                            Sesampainya arah Pantai Sendang Biru, ikuti arah ke Clungup Mangrove
                                            Conservation.
                                        </p>
                                        <p>
                                            Pantai Tiga Warna terletak di Kecamatan Sumber Manjing Wetan, Kabupaten
                                            Malang, Jawa Timur. Pantai ini memiliki gradasi yang terdiri dari tiga warna,
                                            yaitu
                                            Warna biru pada bagian terdalam, hijau pada bagian terdangkal, dan cokelat
                                            kemerahan
                                            pada pasir pantai.
                                        </p>
                                        <p>Harga tiket masuk Pantai 3 Warna adalah Rp 10 ribu per orang. Pengunjung
                                            diwajibkan
                                            menyewa pemandu wisata sebesar Rp 100 ribu untuk setiap rombongan yang berjumlah
                                            10
                                            orang.
                                        </p>
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
                            <img src="{{ asset($item->smartIco) }}"
                                class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt=""
                                width="80">
                            <img src="{{ asset($item->smartIco) }}"
                                class="col-lg-3 position-absolute pt-3 ps-3 d-none d-md-block img-fluid" alt=""
                                width="200">

                            <img src="{{ asset($item->smartImg) }}" class="img-fluid" alt="">

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

            <div class="col pb-4 pt-4 align-items-center"
                style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"data-aos="fade-left">

                <ul class="nav nav-pills mb-3 gap-2 px-5 mx-3 justify-content-center">
                    <li>
                        <a class="nav-link active" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 5px;"
                            data-bs-toggle="pill" href="#tab1">
                            Tahun 2022
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 5px;" data-bs-toggle="pill"
                            href="#tab2">
                            Tahun 2023
                        </a>
                    </li>
                </ul>

                <div class="d-flex flex-column text-center p-5">
                    <div class="col pb-3" data-aos="fade-right">
                        <img class="img-fluid rounded mb-3"
                            src="{{ asset('img/penilaian/penilaian-eval-kabMalang.jpg') }}"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        </br>
                        <b class="">Evaluasi tahun 2022 dan 2023</b>
                        </br>
                        <a href="#" target="blank"> Selengkapnya </a>
                    </div>




                    <!-- Tab Content -->
                    <div class="border rounded tab-content align-items-center">
                        <div class="tab-pane fade show active" id="tab1">
                            <img class="img-fluid rounded" src="{{ asset('img/penilaian/penilaian-2023.jpg') }}"
                                alt="" srcset="">
                        </div>
                        <!-- End Tab 1 Content -->
                        <div class="tab-pane fade show" id="tab2">
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
                            <img src="{{ asset($berita['gambar']) }}" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $berita['deskripsi'] }}
                                </p>
                                <a href="{{ asset($berita['link']) }}" target="_blank"
                                    class="btn btn-primary float-end">Baca lebih
                                    lengkap</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @endfor --}}

                {{-- @for ($i = 0; $i < 8; $i++)
                    <div class="col-lg-3 col-md-5">
                        <div class="card rounded-5">
                            <img src="https://media.istockphoto.com/id/1369150014/vector/breaking-news-with-world-map-background-vector.jpg?s=612x612&w=0&k=20&c=9pR2-nDBhb7cOvvZU_VdgkMmPJXrBQ4rB1AkTXxRIKM="
                                class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.
                                </p>
                                <a href="#" class="btn btn-primary float-end">Baca lebih lengkap</a>
                            </div>
                        </div>
                    </div>
                @endfor --}}

                {{-- <div class="col-lg-3 col-md-5">
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
                </div> --}}

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

            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" data-aos="fade-up">

                @foreach ($dokumen as $doc)
                    <div class="col-lg-2 col-md-2">
                        <div class="card p-3 border-4"
                            style="border-image: linear-gradient(45deg, rgb(97, 124, 245), rgb(140, 228, 243))1;
                        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <img src="img/tampilan dokumen.jpg" class="card-img-top">
                            {{-- linear-gradient(45deg, rgb(0,143,104), rgb(250,224,66)) 1 --}}
                            <div class="p-3" {{-- style="background-color: skyblue"1 --}}>
                                {{-- <i class="ri-file-text-line" style="font-size: 3.5rem;"></i> --}}
                                <h5>
                                    <a href="{{ asset($doc['judul']) }}" target="blank">
                                        judul
                                    </a> {{-- $doc['judul'] }} --}}
                                </h5>
                            </div>
                            {{-- <div class="card-body">
                                {{-- <p class="card-text">
                                    {{ $doc['deskripsi'] }}
                                </p> --}}
                            {{-- <a href="https://www.kompas.com/tag/malang" target="blank" class="btn btn-primary float-end"> --}}
                            {{-- <a href="{{ asset($doc['file']) }}" target="blank" class="btn btn-primary-2 float-end">
                                    Lihat dokumen
                                </a>
                            </div> --}}
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col">
                    <div class="p-3 border" style="background-color: rgba(136, 235, 238, 0.74)">
                        <i class="ri-file-text-line" style="font-size: 3.5rem"></i>
                        <h4>
                            <a href="img/Dokumen berisikan tentang informasi Smart City.pdf" target="_blank">
                            <a href="{{ asset('img/Dokumen berisikan tentang informasi Smart City.pdf') }}"
                                target="_blank">
                                hai
                            </a>
                        </h4>

                    </div>
                </div> --}}

            </div>
    </section>
@endsection
