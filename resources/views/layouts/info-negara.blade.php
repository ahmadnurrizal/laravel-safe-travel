@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail" style="background-image: url('{{ asset('storage/images/inggris-raya.png') }}');">
        <div class="country-name text-center mb-9 pt-5">
            <h1 class="pt-5 text-white"><b>Inggris Raya</b></h1>
        </div>

        <div class="card pt-4" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
            <div class="row p-3">
                <div class="card-group card-country-list justify-content-center text-center p-3"
                    style="background-color: #2071B8;border-radius: 30px">
                    <div class="card card-text-center border-0 p-1 "
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white text-white"
                            href="{{route('informasi-umum')}}">
                            <img src={{asset('storage/images/icons/i.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Informasi Umum</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0 "
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white text-white"
                            href="{{route('persyaratan')}}">
                            <img src={{asset('storage/images/icons/visa.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Persyaratan masuk/keluar</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('keselamatan-keamanan')}}">
                            <img src={{asset('storage/images/icons/shield.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Keselamatan dan Keamanan</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('hukum-kebiasaan')}}">
                            <img src={{asset('storage/images/icons/timbangan.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Hukum dan Kebiasaan Setempat</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('mata-uang')}}">
                            <img src={{asset('storage/images/icons/uang.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Mata Uang dan Penukaran</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('asuransi-kesehatan')}}">
                            <img src={{asset('storage/images/icons/asuransi.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Asuransi dan Kesehatan</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('telekomunikasi')}}">
                            <img src={{asset('storage/images/icons/telepon.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Telekomunikasi</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('tempat-ibadah')}}">
                            <img src={{asset('storage/images/icons/ibadah.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Tempat Ibadah</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('fasilitas-kesehatan')}}">
                            <img src={{asset('storage/images/icons/hospital.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Fasilitas Kesehatan</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ;margin-right: 10px; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('kuliner')}}">
                            <img src={{asset('storage/images/icons/kuliner.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Kuliner</span>
                        </a>
                    </div>
                    <div class="card card-text-center border-0"
                        style="border-radius:10px ; font-size:11px;font-weight: bold;background-color:#2071B8">
                        <a class="card-block stretched-link text-decoration-none text-white"
                            href="{{route('tempat-wisata')}}">
                            <img src={{asset('storage/images/icons/koper.png')}} alt="" width="20px">
                            <br>
                            <span class="card-title pt-2">Tempat Wisata</span>
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