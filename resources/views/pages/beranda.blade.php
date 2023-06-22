@extends('layouts.master')

@section('title', 'Page 1')
@section('content')

<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade bottom-element" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators mb-5">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
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
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container text-center my-3 carousel-multi-image">
    <h2 style="font-weight:bolder">Himbauan Penting</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://cdn.antaranews.com/cache/800x533/2019/11/26/Maria-Ozawa-Menonton-Pertandingan-Timnas-261119-sgd-3_1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <a class="card-block stretched-link text-decoration-none"
                                    style="text-decoration: none; color: inherit;" href="{{route('himbauan-detail')}}">
                                    <p class="card-text">tanggal</p>
                                    <h5 class="card-title">Card title</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>



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
<div class="container-fluid">
    <div class="row py-5 gx-5">
        <div class="col-md-4 text-end ">
            {{-- <img src="https://img2.lokercepat.id/files/2023-03-17/telu-doeloer-68.png" alt="" width="100px"> --}}
            <img src={{asset('storage/images/app-review.png')}} alt="" width="300px" class="ml-5">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="card border-0" style="background-color: #E7F4FF;color :black">
                <div class="card-body text-center">
                    <h3>Download Aplikasi Safe Travel</h3>
                    <div class="detail-app">
                        <p class="text-start">Download dan install Safe Travel di Android atau iPhone untuk dapat
                            mengakses fitur lengkap dan manfaat Iainnya:</p>
                        <ul class="text-start">
                            <li>Mengakses tombol darurat</li>
                            <li>Mendapatkan poin, level, dan badge</li>
                            <li>Fitur-fitur menarik Iainnya</li>
                        </ul>
                    </div>
                    <div class="image-row">
                        <img src={{asset('storage/images/play-store.png')}} alt="" width="100px"
                            style="margin-right: 10px;">
                        <img src={{asset('storage/images/app-store.png')}} alt="" width="100px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>



@endsection