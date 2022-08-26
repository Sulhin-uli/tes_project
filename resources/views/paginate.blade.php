@extends('layout_landing.index')
@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Movie App!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
    </div>
</header>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Now Playing</h2>
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
        </div>
        <div class="row">
            @forelse ($datas as $data)
            {{-- <a href="/detail/{{$data->id}}">
                klik detail
            </a> --}}
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link">
                            <img class="img-fluid" src="https://image.tmdb.org/t/p/w440_and_h660_face{{$data->poster_path}}" alt="..." />
                            {{-- <img class="img-fluid" src="{{ asset('template_landing_page') }}/assets/img/portfolio/1.jpg" alt="..." /> --}}
                        </a>
                        <div class="portfolio-caption">
                            {{-- <div class="portfolio-caption-heading">Threads</div> --}}
                            <div class="portfolio-caption-heading">{{$data->original_title}}</div>
                            <div class="portfolio-caption-subheading text-muted">{{$data->release_date}}</div>
                            <div class="portfolio-caption-subheading text-muted"><a href="/detail/{{$data->id}}">Detail</a></div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

            <div class="paginate">
                <a href="/next">Next</a>
            </div>
        </div>
    </div>
</section>
@endsection