@extends('layouts.home_layouts')

@section('content')
    {{-- konten 1 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/environment.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="#">
                    <h4>Smart Environment</h4>
                </a>
                <p>Web</p>
                <div class="portfolio-links">
                    {{-- <a href="{{ asset('Portfolio/img/Medilab-bootstrap-website-template.png') }}"
                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Medilab"><i
                            class="bi bi-plus"></i></a>
                    <a href="#" title="Demo" target="_Blank"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- konten 2 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img\portfolio\gov.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="#"><h4>Smart Governance</h4>
                <p>Web</p>
                <div class="portfolio-links">
                    {{-- <a href="{{ asset('Portfolio/img/OnePage-bootstrap-website-template.png') }}"
                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="One Page"><i
                            class="bi bi-plus"></i></a>
                    <a href="#" title="Demo" target="_Blank"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- konten 3 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Smart Branding</h4>
                <p>App</p>
                <div class="portfolio-links">
                    {{-- <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery"
                        class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- konten 4 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Smart Economy</h4>
                <p>Card</p>
                <div class="portfolio-links">
                    {{-- <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery"
                        class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- konten 5 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('Portfolio/img/Company-bootstrap-website-template.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Smart Living</h4>
                <p>Web</p>
                <div class="portfolio-links">
                    {{-- <a href="{{ asset('Portfolio/img/Company-bootstrap-website-template.png') }}"
                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Company"><i
                            class="bi bi-plus"></i></a>
                    <a href="#" title="Demo" target="_Blank"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- konten 6 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Smart Society</h4>
                <p>App</p>
                <div class="portfolio-links">
                    {{-- <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery"
                        class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- konten 7 --}}
    {{-- <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery"
                        class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- konten 7 --}}
    {{-- <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery"
                        class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- konten 8 --}}
    {{-- <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                    <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery"
                        class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
