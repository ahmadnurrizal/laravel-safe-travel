@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail">
        <div class="country-name text-center mb-10 pt-5">
            <h1>KBRI Inggris Raya</h1>
        </div>
        <div class="card" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
            <div class="row justify-content-end p-lg-5">
                <div class="col-4 text-center">
                    <h2 class="text-center"><b>KBRI London</b> </h2>
                </div>
                <div class="col-4 text-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm  btn-secondary dropdown-toggle"
                            data-mdb-toggle="dropdown" data-mdb-display="static" aria-expanded="false">
                            Informasi Pelayanan Umum
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#">Pembuatan Paspor Baru</a></li>
                            <li><a class="dropdown-item" href="#">Pembuatan SPLP</a></li>
                            <li><a class="dropdown-item" href="#">Legalisasi Dokumen</a></li>
                            <li><a class="dropdown-item" href="#">Pelayanan Lain</a></li>
                            <li><a class="dropdown-item" href="#">Lapor Diri </a></li>
                            <li><a class="dropdown-item" href="#">Tourist/Social Visa</a></li>
                            <li><a class="dropdown-item" href="#">Diplomatic and Service Visa</a></li>
                            <li><a class="dropdown-item" href="#">Journalistic Visa</a></li>
                            <li><a class="dropdown-item" href="#">Perlindungan Hukum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <h3>Alamat KBRI</h3>
                <img src="https://vatvostudio.vn/wp-content/uploads/2022/09/Google-Maps-Traffic2.jpg"
                    class="rounded rounded-xxl mx-auto d-block mb-1" alt="maps" height="300px">
                <p>Kungsbroplan 1, Lantai 4, 112 27 Stockholm, Sweden (P.O.BOX 130 62)</p>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection