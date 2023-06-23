@extends('layouts.master')

@section('title', 'Himbauan')
@section('content')



<div class="container">
    .
    {{-- <div class="alert alert-secondary my-lg-3 text-center" role="alert">
        <span style="font-size: larger; font-weight: bold;">Himbauan</span>
    </div> --}}
    <h2 class="text-center my-5 ">
        Himbauan
    </h2>
    <div class="row row-cols-1 row-cols-md-1 g-1 mt-5">
        <div class="col">
            <div class="card mb-3 border-0" style="max-width: 100%;background-color: #E7F4FF">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa
                                titik di kota Paris
                            </h5>
                            <p class="card-text">23 Maret 2023</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                                    style="border-radius: 15px;background-color:#2071B8">
                                    <span class="text-capitalize">Lihat Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 border-0" style="max-width: 100%;background-color: #E7F4FF">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa
                                titik di kota Paris
                            </h5>
                            <p class="card-text">23 Maret 2023</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                                    style="border-radius: 15px;background-color:#2071B8">
                                    <span class="text-capitalize">Lihat Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 border-0" style="max-width: 100%;background-color: #E7F4FF">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa
                                titik di kota Paris
                            </h5>
                            <p class="card-text">23 Maret 2023</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                                    style="border-radius: 15px;background-color:#2071B8">
                                    <span class="text-capitalize">Lihat Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 border-0" style="max-width: 100%;background-color: #E7F4FF">
                <div class="row g-5">
                    <div class="col-md-2">
                        <img src={{asset('storage/images/himbauan.png')}} class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title fw-bold" style="margin: 0">Terjadi kerusuhan di beberapa
                                titik di kota Paris
                            </h5>
                            <p class="card-text">23 Maret 2023</p>
                            <div class="position-absolute bottom-0 end-0">
                                <a href="{{route('himbauan-detail')}}" class="btn btn-primary m-3 p-2 border-0"
                                    style="border-radius: 15px;background-color:#2071B8">
                                    <span class="text-capitalize">Lihat Selengkapnya</span>
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