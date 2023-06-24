@extends('layouts.master')

@section('title', 'Fun Facts')
@section('content')

<h2 class="text-center my-5 ">
    <strong>Fun Facts</strong>
</h2>
<div id="funfact" class="card border-0"
    style="border-top-left-radius: 35px; border-top-right-radius: 35px;background-color: #E7F4FF">
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
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                        <span style="display: none;">afrika selatan</span>

                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0" style="max-width: 250px;">
                <div class="row g-0">
                    <div class="col">
                        <img src={{asset('storage/images/fun-facts/afrika-selatan.png')}}
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection