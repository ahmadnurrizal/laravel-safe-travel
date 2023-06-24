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
                        <button type="button" class="btn btn-sm dropdown-toggle text-white" data-mdb-toggle="dropdown"
                            data-mdb-display="static" aria-expanded="false" style="background-color: #2071B8">
                            Informasi Pelayanan Umum
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="{{route('pembuatan-paspor')}}">Pembuatan Paspor Baru</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('pembuatan-SPLP')}}">Pembuatan SPLP</a></li>
                            <li><a class="dropdown-item" href="{{route('legalisasi-dokumen')}}">Legalisasi Dokumen</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('pelayanan-lain')}}">Pelayanan Lain</a></li>
                            <li><a class="dropdown-item" href="{{route('lapor-diri')}}">Lapor Diri </a></li>
                            <li><a class="dropdown-item" href="{{route('tourist-visa')}}">Tourist/Social Visa</a></li>
                            <li><a class="dropdown-item" href="{{route('diplomatic-service-visa')}}">Diplomatic and
                                    Service Visa</a></li>
                            <li><a class="dropdown-item" href="{{route('journalistic-visa')}}">Journalistic Visa</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('perlindungan-hukum')}}">Perlindungan Hukum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-5">
                <p>Persyaratan Submit the folloeing documents to the Consular Section:</p>
                <ul>
                    <li>Passport valid at least six months after palnned date of entry to Indonesia</li>
                    <li>Filled-out application form from Indonesian Embassy’s website;</li>
                    <li>
                        One (1) recently taken photo, size 3x4 cm;</li>
                    <li>Copy of airline ticket or itinerary (the itinerary should proof when you will leave Indoensia);
                    </li>
                    <li> Proof of paid visa fee 450 kr (copy of receipt);</li>
                    <li> Stamped ad addressed return envelope -preferably as registered letter (rekomenderat),
                        consedering that you are sending a passport (unless you visit the Embassy in person).</li>
                </ul>

                <p style="margin: 0px"> NOTIFICATION
                </p>
                <ul>
                    <li>All fees which have been paid/transfered by applicant(s) through the Embassy’s bank account for
                        its consular fees CANNOT BE RECLAIMED/RETURNED
                        Please check the validity of your passport before travelling to Indonesia. </li>
                    <li>
                        To secure safe enterance into Indonesia, the validity of your passport must exceeds more than 6
                        (six) months.</li>
                    <li>Travel Documents, Alien Passports and Temporary Passport (Provisorisk Pass) is NOT acceptable as
                        a travel document to enter Indonesia.</li>
                    <li>All visas will be processed by the Embassy within 3 (three) working days (provided that
                        applicants have completed the requirments needed)</li>
                </ul>
                <p style="margin: 0px"> ISSUANCE
                </p>
                <p>
                    If all necessary documents have been submitted, the application will be reffered to Jakarta for
                    approval
                    and the Journalist Visa will be issued in one month. The issued visa is valid for 60 days and has to
                    used within 90 days from issuance. If an aplicant fails to enter Indonesia within the period of 90
                    days,
                    the visa will be declared invalid.
                </p>
                <p style="margin: 0px"> NOTE
                </p>
                <ul>
                    <li>Pelase note that possession of a visa does no guarantee entry to Indonesia. Permission to enter
                        Indonesia is in the authorization of the Immigration Officer at the point of entry.</li>
                    <li> The embassy will not issues visa for ’Alien Passport’, ’Travel document’ and ’Temporary
                        passport’</li>
                </ul>
                <p>
                    Please be advised that incomplete application forms or applications where necessary documents are
                    missing may cause rejection for visa provision.
                </p>

                <p style="margin: 0px"> Biaya
                </p>
                <p>
                    -
                </p>
                <p style="margin: 0px"> Waktu Pelayanan
                </p>
                <p>
                    -
                </p>
            </div>
            <div class="container py-3">
                @yield('sub-info-negara')
            </div>
        </div>
    </div>


</div>
@endsection