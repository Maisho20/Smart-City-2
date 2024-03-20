@extends('layouts.home_layouts')

@section('content')
    <div class="row gy-4 portfolio-container animate__animated animate__fadeInUp">
        {{-- konten 1 --}}
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

                <img src="{{ asset('img/portfolio/envIcn.png') }}"
                    class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt="" width="80">
                <img src="{{ asset('img/portfolio/envIcn.png') }}"
                    class="col-lg-3 position-absolute pt-3 ps-3 d-none d-md-block img-fluid" alt="" width="200">

                <img src="{{ asset('img/portfolio/environment.jpg') }}" class="img-fluid" alt="">

                <div class="portfolio-info">
                    <a href="{{ route('SmartEnv') }}">
                        <h4>Smart Environment</h4>
                    </a>
                    <p>
                        <b>Wisata Edukasi & Edu Sampah Cipta Kerja</b>
                        <br>
                        Wadah untuk memberikan edukasi seputar operasi pengelolaan TPA sampah dan
                        Pengendalian dan pemanfaatan Gas Methane di TPA.
                    </p>
                </div>
            </div>
        </div>

        {{-- konten 2 --}}
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

                <img src="{{ asset('img/portfolio/govIcn.png') }}"
                    class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt="" width="80">
                <img src="{{ asset('img/portfolio/govIcn.png') }}"
                    class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt="" width="200">

                <img src="{{ asset('img\portfolio\gov.jpg') }}" class="img-fluid" alt="">

                <div class="portfolio-info">
                    <a href="{{ route('SmartGov') }}">
                        <h4>Smart Governance</h4>
                    </a>
                    <p>
                        <b>DESAKU TUNTAS</b>
                        <br>
                        Desaku Tuntas adalah aplikasi yang memudahkan masyarakat dalam mengakses informasi dan
                        pelayanan pemerintah desa.
                    </p>
                </div>
            </div>
        </div>

        {{-- konten 3 --}}
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

                <img src="{{ asset('img/portfolio/brndIcn.png') }}"
                    class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt="" width="80">
                <img src="{{ asset('img/portfolio/brndIcn.png') }}"
                    class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt="" width="200">

                <img src="{{ asset('img/portfolio/bran.jpg') }}" class="img-fluid" alt="">

                <div class="portfolio-info">
                    <a href="{{ route('SmartBrand') }}">
                        <h4>Smart Branding</h4>
                    </a>
                    <p>
                        <b>MATIC</b>
                        <br>
                        MATIC adalah sebuah apilkasi promosi destinasi wisata, pelayanan dan
                        pelaku industri wisata yang mampu memberikan informasi, campaign atau
                        informasi lainnya
                    </p>
                </div>
            </div>
        </div>

        {{-- konten 4 --}}
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

                <img src="{{ asset('img/portfolio/ecoIcn.png') }}"
                    class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt="" width="80">
                <img src="{{ asset('img/portfolio/ecoIcn.png') }}"
                    class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt="" width="200">

                <img src="{{ asset('img/portfolio/eco.jpg') }}" class="img-fluid" alt="">

                <div class="portfolio-info">
                    <a href="SmartEco">
                        <h4>Smart Economy</h4>
                    </a>
                    <p>
                        <b>E-AGRIPROP</b>
                        <br>
                        E-Agriprop adalah aplikasi yang memudahkan petani dalam mengakses informasi dan pelayanan
                        pertanian.
                    </p>
                </div>
            </div>
        </div>

        {{-- konten 5 --}}
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

                <img src="{{ asset('img/portfolio/livIcn.png') }}"
                    class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt="" width="80">
                <img src="{{ asset('img/portfolio/livIcn.png') }}"
                    class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt="" width="200">

                <img src="{{ asset('img/portfolio/living.jpg') }}" class="img-fluid" alt="">

                <div class="portfolio-info">
                    <a href="SmartLiv">
                        <h4>Smart Living</h4>
                    </a>
                    <p>
                        <b>SMART health</b>
                        <br>
                        SMART health adalah aplikasi pelayanan pada bidang
                        kesehatan yang promotif, preventif dan kegawat daruratan.
                    </p>
                </div>
            </div>
        </div>

        {{-- konten 6 --}}
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

                <img src="{{ asset('img/portfolio/socIcn.png') }}"
                    class="col-lg-1 position-absolute pt-3 ps-3 img-fluid d-md-none d-block" alt="" width="80">
                <img src="{{ asset('img/portfolio/socIcn.png') }}"
                    class="col-lg-3 position-absolute pt-3 ps-3 img-fluid d-none d-md-block" alt="" width="200">

                <img src="{{ asset('img/portfolio/p.jpg') }}" class="img-fluid" alt="">

                <div class="portfolio-info">
                    <a href="SmartSoc">
                        <h4>Smart Society</h4>
                    </a>
                    <p>
                        <b>CONTRA WAR</b>
                        <br>
                        Sebuah aplikasi untuk memberikan pelayanan kontrasepsi yang tepat
                        untuk penundaan ataupun pencegahan kehamilan pada pasangan usia subur
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
