@extends('layouts.master')
@section('title', 'Info Negara')
@section('content')

<div class="konten-info-umum">
    <div class="country-detail" style="background-image: url('{{ asset('storage/images/inggris-raya.png') }}');">
        <div class="country-name text-center mb-9 pt-5">
            <h1 class="pt-5 text-white"><b>Inggris Raya</b></h1>
        </div>

        <div class="card pt-4 border-0"
            style="border-top-left-radius: 35px; border-top-right-radius: 35px;background-color: #E7F4FF">
            <h3 class="my-2  text-center"><b>St Thomas Hospital</b></h3>
            <div class="card pt-4 border-0 mt-3" style="border-top-left-radius: 35px; border-top-right-radius: 35px;">
                <div class="m-5">
                    <div class="card" style="border-radius: 30px">
                        <img src={{asset('storage/images/hospital.png')}} class="card-img">
                    </div>
                    <div class="card mt-3" style="border-radius: 30px">
                        <img src={{asset('storage/images/maps.png')}} class="card-img">
                    </div>

                    <div class="deskripsi mt-5" style="font-weight: bold;">
                        <span> St Thomas' Hospital</span><br>
                        <p><span>4.3</span>
                            <span>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>


                            </span>
                        </p>

                        <span>Jenis Tempat:</span><br>
                        <p>Rumah Sakit, Kesehatan, Tempat Menarik, BangunanNomor Telepon:+44 20 7188 7188</p>
                        <p> Website:https://www.guysandstthomas.nhs.uk</p>
                    </div>
                </div>
            </div>






        </div>
    </div>

</div>

@endsection