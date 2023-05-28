@extends('layouts.info-negara')
@section('sub-judul', 'Persyaratan Masuk/Keluar')
@section('sub-info-negara')

<h2 class=" text-center">@yield('sub-judul')</h2>
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
@endsection