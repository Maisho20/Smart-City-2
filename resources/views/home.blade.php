@extends('layouts.home_layouts')

@section('content')
    {{-- konten 1 --}}
    <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/environment.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="{{ route('SmartEnv') }}">
                    <h4>Smart Environment</h4>
                </a>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque et at dolorum sunt commodi vel delectus
                    reprehenderit perspiciatis perferendis qui. Beatae distinctio delectus quasi consectetur nulla. Sapiente
                    quo nam adipisci.</p>
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
                <a href="{{ route('SmartBrand') }}">
                    <h4>Smart Governance</h4>
                </a>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus maiores iste blanditiis labore id
                    quos illo quae eligendi possimus, earum at eum ducimus, iusto alias repellendus molestiae tenetur quo
                    error.</p>
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
                <a href="{{ route('SmartBrand') }}">
                    <h4>Smart Branding</h4>
                </a>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quasi facilis neque, rem fuga sint quod
                    nulla, quos, voluptas magni harum? Hic vel consequuntur, nostrum eveniet suscipit asperiores corrupti
                    rerum.</p>
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
            <img src="{{ asset('img/portfolio/eco.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <a href="">
                    <h4>Smart Economy</h4>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, delectus quidem aut alias deleniti sequi
                    ad dolores deserunt sed voluptate accusantium, fugit quam iste totam ut qui doloribus. Et, sapiente.</p>
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
                <a href="">
                    <h4>Smart Living</h4>
                </a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque fugiat alias hic minima aliquid!
                    Voluptatum id sunt ipsum quasi, dolores perferendis corrupti corporis ratione tenetur laudantium
                    voluptatibus itaque, pariatur et?</p>
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
                <a href="">
                    <h4>Smart Society</h4>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quod vitae dolores, facere blanditiis
                    voluptas numquam aliquam aperiam consequuntur cumque ipsam quasi, in quam? Nam veritatis ex impedit
                    repellat dolores.</p>
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
