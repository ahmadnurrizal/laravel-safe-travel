@extends('layouts.master')

@section('title', 'Pelayanan Dinas')
@section('content')
<div class="container">
    <div class="alert alert-secondary my-lg-3 text-center" role="alert">
        <span style="font-size: larger; font-weight: bold;">Pelayanan Dinas</span>
    </div>
    <div class="px-3">
        <img src={{asset('storage/images/gedung-pancasila.png')}} alt="" class="img-fluid">
    </div>
    <div class="alert alert-secondary my-lg-3 text-center" role="alert">
        <p class="text-start mb-0">
            Paspor Diplomatik dan Paspor Dinas <br>
            Pelayanan dilakukan di loket pelayanan Direktorat Konsuler, Kementerian Luar Negeri (Jl. Taman Pejambon No.
            06, Jakarta Pusat) <br>
            Jam pelayanan : Senin s/d Jumat (09.00 – 16.00 WIB)
        </p>
    </div>
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    PELAYANAN PASPOR BARU/PENGGANTIAN PASPOR
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>
                        Pelayanan permohonan paspor baru dilakukan dalam 3 hari kerja.

                    </p>
                    <li>
                        Persyaratan
                        <ul>
                            <li>Melampirkan paspor lama (khusus penggantian paspor)*</li>
                            <li>Asli Surat Persetujuan dari Kemensetneg (bagi pemohon PNS)</li>
                            <li>Asli Surat Perintah (khusus TNI/POLRI)</li>
                            <li>Asli Surat Izin Fraksi/Komisi dan Surat dari Kesekjenan (khusus anggota DPR, DPD, MPR)
                            </li>
                            <li>Salinan Surat Keputusan Menteri Luar Negeri (khusus untuk penempatan di Perwakilan RI di
                                luar
                                negeri)</li>
                            <li>Asli Surat Pengantar dari instansi terkait kepada Direktorat Konsuler</li>
                            <li>Mengisi formulir dengan lengkap, teliti dan sebenar-benarnya.** Formulir dapat
                                diunduh.....
                                (link)</li>
                            <li>Fotokopi Kartu Pegawai/Kartu Tanda Anggota (khusus TNI/POLRI)/Surat Keputusan
                                Pengangkatan
                                Sebagai
                                Pegawai Negeri Sipil dilegalisir cap basah</li>
                            <li>
                                Fotokopi Kartu Tanda Penduduk (KTP)
                            </li>
                            <li> Pas foto terbaru ukuran 4x6 latar belakang putih sebanyak 3 lembar****) Dalam hal
                                penggantian paspor
                                disebabkan paspor hilang, diwajibkan menyertakan surat keterangan kehilangan dari
                                kepolisian.**)
                                Ketentuan terkait nama dijelaskan lebih lanjut di bawah ini***) Ketentuan terkait foto
                                dijelaskan
                                lebih lanjut di bawah ini</li>

                        </ul>
                    </li>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    PELAYANAN PASPOR LAMA
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    PELAYANAN PASPOR BARU/PENGGANTIAN PASPOR
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
