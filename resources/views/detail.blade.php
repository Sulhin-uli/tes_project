@extends('layout_landing.index')
@section('content')
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{$datas->original_title}}</h2>
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
        </div>
        <div class="row">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="https://image.tmdb.org/t/p/w440_and_h660_face{{$datas->poster_path}}" alt="..." />
                        {{-- <img class="img-fluid" src="{{ asset('template_landing_page') }}/assets/img/portfolio/1.jpg" alt="..." /> --}}
                    </a>
                    <div class="portfolio-caption">
                        {{-- <div class="portfolio-caption-heading">Threads</div> --}}
                    </div>

                    <p>Release Date {{$datas->release_date}}</p>
                    <p>Popularity {{$datas->popularity}}</p>
                    <p> {{$datas->overview}}</p>
                </div>
        </div>   
    </div>
</section>
@endsection