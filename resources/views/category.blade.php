@extends('layout_landing.index')
@section('content')
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Category</h2>
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><a href="/"> Now Playing</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><a href="/category/popular"> Popular</a></div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><a href="/category/top_rated"> Top Rated</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><a href="/category/upcoming">Upcoming</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection