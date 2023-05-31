@extends('layouts.master')

@section('title', 'Pelayanan Umum')
@section('content')

<div class="center container datatable-card">
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
                            style="text-decoration: none; color: inherit;"
                            href="{{route('pelayanan-umum-inggris-raya')}}">
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
</div>


@endsection