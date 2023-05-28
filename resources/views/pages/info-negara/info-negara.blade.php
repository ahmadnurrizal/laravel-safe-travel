@extends('layouts.master')

@section('title', 'Info Negara')
@section('content')
<div class="row">




    <div class="center">
        <div class="col-md-5 mx-auto search-box">
            <div class="large fw-light">Cari Negara</div>
            <div class="input-group">
                <input class="form-control form-control-lg border-end-0 border rounded-pill col-md-8" type="search"
                    id="example-search-input" placeholder="Masukan nama negara yang ingin kamu cari informasinya">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5 btn-lg"
                        type="button">
                        <i class="fa fa-search fa-lg"></i>
                    </button>
                </span>
            </div>

        </div>
    </div>



</div>
@endsection