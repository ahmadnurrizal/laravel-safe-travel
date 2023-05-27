@extends('layouts.master')

@section('title', 'Info Negara')
@section('content')

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
            <h2 class=" text-center">Informasi Umum</h2>

            <div class="card my-3">
                <div class="card-body">
                    <p> Kode Telepon:<br>
                        +44
                    </p>
                    <p>
                        Zona dan Perbedaan Waktu:<br>
                        Britania Raya berada di Zona GMT O. Waktu di Britania Raya adalah 7 jam lebih lambat dari
                        Jakarta
                        (WIB).
                        Namun, khusus pada saat
                        daylight saving time yang biasanya dimulai dari hari Minggu terakhir di bulan Maret hingga hari
                        minggu
                        terakhir di bulan Oktober,
                        perbedaan waktu antara Britania Raya dan Jakarta (WIB) adalah 6 jam.
                    </p>

                    <p>Jenis Soket/CoIokan Listrik:<br>
                        Tipe G
                    </p>

                    <p>Alamat KBRI London:<br>
                        30 Great Peter St, Westminster, London SWIP 2BU, Britania Raya
                    </p>

                </div>
            </div>
            <img src="https://vatvostudio.vn/wp-content/uploads/2022/09/Google-Maps-Traffic2.jpg"
                class="rounded rounded-xxl mx-auto d-block" alt="maps" width="100%">
            <div class="contact-person mt-3">
                <h3>Contact Person</h3>
                <p>Email : london.kbri@kemlu.go.id; kbri@btconnect.com <br>
                    No. Telp : +44 20 7499-7661, +44 20 7290 9600
                </p>

            </div>
        </div>
    </div>

</div>









@endsection