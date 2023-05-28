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
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title ">Informasi Umum</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Persyaratan masuk/keluar</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Keselamatan dan Keamanan</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Hukum dan Kebiasaan Setempat</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Hukum dan
                            Kebiasaan setempat</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Mata uang dan Penukaran</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Asuransi dan Kesehatan</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Telekomunikasi</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Tempat Ibadah</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Fasilitas Kesehatan</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold">
                        <p class="card-title">Kuliner</p>
                    </div>
                    <div class="card card-text-center p-1 pt-2"
                        style="border-radius:10px ; font-size:11px;font-weight: bold">
                        <p class="card-title">Tempat Wisata</p>
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