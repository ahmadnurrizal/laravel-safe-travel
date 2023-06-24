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
                <p>PersyaratanWhen applying for a Journalistic Visa, you should contack the Embassy at first. After
                    consulting with the Section for Information, Cultural and Social Affairs, you need to fill out the
                    following forms:</p>
                <ul>
                    <li> Application Form for Visit Visa</li>
                    <li>Application Form for Journalistic Activity Permit</li>
                    <li> Application Form for Film / Videos Shooting Permit</li>
                </ul>
                <p>Each form should be filled out and duly, originally signed in two (2) copies, as well as enclose the
                    following:
                </p>
                <ul>
                    <li>Three (3) passport size photos;</li>
                    <li>Photocopy of passport;</li>
                    <li>Proof of paid visa fee (copy of receipt);</li>
                    <li>Letter describing the newspaper/employer;</li>
                    <li>Employment letter from the newspaper/employer.</li>
                </ul>
                <p>Visa Fee: SEK 450</p>

                <p style="margin: 0px"> PAYMENT METHOD OF CONSULAR FEES
                </p>
                <p>Please be informed that the Embassy CAN NOT ACCEPT PAYMENT BY CASH. All payment has to be done
                    through transfer to the Embassy’s SEB bank account number 5277-10-01292 and all applicants are
                    kindly requested to submit the copy of the bank transfer receipt which STATING CLEARLY THE NAME OF
                    APPLICANT, to the Embassy along with other documents required.</p>
                <p style="margin: 0px"> IMPORTANT
                </p>
                <ul>
                    <li>During banking (or internet bank) transaction, please clearly write your FAMILY NAME or PERSONAL
                        NUMBER on text/message to the recipient, for payment verification.</li>
                </ul>
                <p style="margin: 0px"> NOTIFICATION
                </p>
                <ul>
                    <li>All fees which have been paid/transfered by applicant(s) through the Embassy’s bank account for
                        its consular fees CANNOT BE RECLAIMED/RETURNED</li>
                    <li>Please check the validity of your passport before travelling to Indonesia. To secure safe
                        enterance into Indonesia, the validity of your passport must exceeds more than 6 (six) months.
                    </li>
                    <li>
                        Travel Documents, Alien Passports and Temporary Passport (Provisorisk Pass) is NOT acceptable as
                        a travel document to enter Indonesia.</li>
                </ul>

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
                <p style="margin: 0px"> Jadwal
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