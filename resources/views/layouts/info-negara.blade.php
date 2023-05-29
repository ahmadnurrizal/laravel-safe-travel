@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail">
        <div class="country-name text-center mb-10 pt-5">
            <h1>Inggris Raya</h1>
        </div>

        <div class="card pt-4" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
            <div class="row p-3">
                <div class="card-group card-country-list justify-content-center text-center ">
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('informasi-umum')}}">
                            <p class="card-title pt-2">Informasi Umum</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('persyaratan')}}">
                            <p class="card-title pt-2">Persyaratan masuk/keluar</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none"
                            href="{{route('keselamatan-keamanan')}}">
                            <p class="card-title pt-2">Keselamatan dan Keamanan</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('hukum-kebiasaan')}}">
                            <p class="card-title pt-2">Hukum dan Kebiasaan Setempat</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('mata-uang')}}">
                            <p class="card-title pt-2">Mata Uang dan Penukaran</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none"
                            href="{{route('asuransi-kesehatan')}}">
                            <p class="card-title pt-2">Asuransi dan Kesehatan</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('telekomunikasi')}}">
                            <p class="card-title pt-2">Telekomunikasi</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('tempat-ibadah')}}">
                            <p class="card-title pt-2">Tempat Ibadah</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none"
                            href="{{route('fasilitas-kesehatan')}}">
                            <p class="card-title pt-2">Fasilitas Kesehatan</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('kuliner')}}">
                            <p class="card-title pt-2">Kuliner</p>
                        </a>
                    </div>
                    <div class="card card-text-center"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <a class="card-block stretched-link text-decoration-none" href="{{route('tempat-wisata')}}">
                            <p class="card-title pt-2">Tempat Wisata</p>
                        </a>
                    </div>







                </div>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>

    </div>

</div>

@endsection