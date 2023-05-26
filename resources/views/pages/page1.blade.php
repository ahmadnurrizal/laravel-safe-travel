@extends('layouts.master')

@section('title', 'Page 1')
@section('content')

<div class="d-flex justify-content-center">
    <div class="card-group card-group-scroll m-lg-5">
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top"
                alt="Palm Springs Road" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top"
                alt="Los Angeles Skyscrapers" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                alt="Hollywood Sign on The Hill" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/045.webp" class="card-img-top"
                alt="Palm Springs Road" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                alt="Los Angeles Skyscrapers" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                alt="Los Angeles Skyscrapers" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                alt="Los Angeles Skyscrapers" />

            <h5 class="card-title">Card title</h5>
        </div>
        <div class="card">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                alt="Los Angeles Skyscrapers" />

            <h5 class="card-title">Card title</h5>
        </div>
    </div>
</div>


<!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade top-element slide-body" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner rounded-5 shadow-4-strong">
        <div class="overlay">
            <div class="caption-text">
                <h3>Fun Fact</h3>
                <p>Mengetahui Fakta unik dari negara yang mungkin Kamu tidak ketahui</p>
            </div>

            {{-- <p class="caption-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is a little bit longer.
            </p> --}}
        </div>
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100"
                alt="Sunset Over the City" />

        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                alt="Canyon at Nigh" />

        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                alt="Cliff Above a Stormy Sea" />

        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->



@endsection
