@extends('layouts.master')

@section('title', 'Info Negara')
@section('content')

<div class="center container datatable-card mb-5">
    <div class="col-md-5 mx-auto search-box my-5">
        <div class="large fw-light">Cari Negara</div>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded"
                placeholder="Masukan nama negara yang ingin kamu cari informasinya" aria-label="Search"
                aria-describedby="search-addon" id="searchInput" />
            <span class="input-group-append">
                <span class="input-group-text border-0">
                    <i class="fas fa-search"></i>
                </span>
            </span>

        </div>
    </div>

    <div class="datatable" id="pelayanan">
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/inggris.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Inggris Raya</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3 border-0" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/amerika-serikat.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Amerika Serikat</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/arab-saudi.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Arab Saudi</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/australia.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Australia</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/belanda.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Belanda</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/belgia.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Belgia</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/brazil.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Brazil</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/brunei.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Brunei darussalam</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/philipina.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Fhilipina</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/ghana.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Ghana</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/guinea.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Guinea</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/india.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>India</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/irak.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Irak</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/iran.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Iran</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/italia.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Italia</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/jepang.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Jepang</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/jerman.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Jerman</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/kamboja.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Kamboja</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/canada.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Kanada</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/spanyol.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Kerajaan Spanyol</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/colombia.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Kolombia</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/kroasia.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Kroasia</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/korea.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Korea Selatan</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-3" style="max-width: 400px;background-color:#2D81CB">
            <a href="{{route('informasi-umum')}}">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/images/negara/iran.png')}}" alt="" height="40px">
                    </div>
                    <div class="col-10 d-flex align-items-center justify-content-center text-white">
                        <span>Iran</span>
                    </div>
                </div>
            </a>
        </div>



    </div>
</div>

{{-- <div class="center container datatable-card">
    <div class="col-md-5 mx-auto search-box">
        <div class="large fw-light">Cari Negara</div>
        <div class="input-group">
            <input class="form-control form-control-lg border-end-0 border rounded-pill col-md-8" type="search"
                id="searchInput" placeholder="Masukan nama negara yang ingin kamu cari informasinya">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5 btn-lg"
                    type="button">
                    <i class="fa fa-search fa-lg"></i>
                </button>
            </span>
        </div>
    </div>
    <div class="datatable" id="datatable">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/03/27/1607473002.jpg"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a class="card-block stretched-link text-decoration-none"
                            style="text-decoration: none; color: inherit;" href="{{route('informasi-umum')}}">
                            <h5 class="card-title">Inggris Raya</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/03/27/1607473002.jpg"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Jerman</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/03/27/1607473002.jpg"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Italia</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/03/27/1607473002.jpg"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Indonesia</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/03/27/1607473002.jpg"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Thailand</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/03/27/1607473002.jpg"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Argentina</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection