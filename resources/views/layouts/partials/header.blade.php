<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <a class="navbar-brand" href="{{route('page1')}}">
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20"
                        alt="MDB Logo" loading="lazy" />
                </a>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-lg-5 ">
                        <a class="nav-link" aria-current="page" href="{{route('info-negara')}}">Info Negara</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item mx-lg-5 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Pelayanan
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Info Negara</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Pelayanan</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">Himbauan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Asuransi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Fun Fact</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Tips</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link" href="#">Himbauan</a>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link" href="#">Asuransi</a>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link" href="#">Fun Fact</a>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link" href="#">Tips</a>
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