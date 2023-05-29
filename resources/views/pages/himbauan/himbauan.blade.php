@extends('layouts.master')

@section('title', 'Himbauan')
@section('content')



<div class="container">
    .
    <div class="alert alert-secondary my-lg-3 text-center" role="alert">
        <span style="font-size: larger; font-weight: bold;">Himbauan</span>
    </div>



    <div class="row row-cols-1 row-cols-md-1 g-1">
        <div class="col">
            <div class="card mb-3" style="max-width: 100%">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src="https://smkn8semarang.sch.id/foto_berita/9selamat%20hari%20raya%20idul%20adha.jpg"
                            class="img-fluid rounded-start" alt="..." width="200px">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Judul Himbauan</h5>
                            <p class="card-text">Tanggal</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3">
                                    <span class="px-5 text-capitalize">Lihat Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 100%">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src="https://smkn8semarang.sch.id/foto_berita/9selamat%20hari%20raya%20idul%20adha.jpg"
                            class="img-fluid rounded-start" alt="..." width="200px">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Judul Himbauan</h5>
                            <p class="card-text">Tanggal</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3">
                                    <span class="px-5 text-capitalize">Lihat Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 100%">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src="https://smkn8semarang.sch.id/foto_berita/9selamat%20hari%20raya%20idul%20adha.jpg"
                            class="img-fluid rounded-start" alt="..." width="200px">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Judul Himbauan</h5>
                            <p class="card-text">Tanggal</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3">
                                    <span class="px-5 text-capitalize">Lihat Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 100%">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src="https://smkn8semarang.sch.id/foto_berita/9selamat%20hari%20raya%20idul%20adha.jpg"
                            class="img-fluid rounded-start" alt="..." width="200px">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Judul Himbauan</h5>
                            <p class="card-text">Tanggal</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3">
                                    <span class="px-5 text-capitalize">Lihat Selengkapnya</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection