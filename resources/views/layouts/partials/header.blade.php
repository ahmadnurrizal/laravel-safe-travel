<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2071B8">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center text-white" id="navbarCenteredExample">
                <!-- Left links -->
                <a class="navbar-brand" href="{{route('beranda')}}">
                    <img src={{asset('storage/images/logo.png')}} height="40" alt="Safe Travel Logo" loading="lazy" />
                </a>
                <ul class="navbar-nav mb-2 mb-lg-0 text-white">
                    <li class="nav-item mx-lg-5 text-white">
                        <a class="nav-link text-white" aria-current="page" href="{{route('info-negara')}}">Info
                            Negara</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item mx-lg-5 dropdown text-white">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Pelayanan
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item text-white" href="{{route('pelayanan-umum')}}">Umum</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('pelayanan-dinas')}}">Dinas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link text-white" href="{{route('himbauan')}}">Himbauan</a>
                    </li>
                    <li class="nav-item mx-lg-5 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Asuransi
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item text-white" href="{{route('asuransi-perjalanan')}}">Asuransi
                                    Perjalanan</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('asuransi-perjalanan')}}">Asuransi
                                    Perjalanan
                                    Kartu Kredit</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('infografis')}}">Infografis Asuransi
                                    Perjalanan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link text-white" href="{{route('fun-fact')}}">Fun Fact</a>
                    </li>
                    <li class="nav-item mx-lg-5 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Tips
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">

                            <li>
                                <a class="dropdown-item text-white" href="{{route('tips-umrah')}}">
                                    Umrah</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('tips-tki')}}">
                                    TKI</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="#">
                                    Wisatawan</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('infografis-tips')}}">Infografis
                                    Tips</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>