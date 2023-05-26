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
                <a class="navbar-brand" href="#">
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20"
                        alt="MDB Logo" loading="lazy" />
                </a>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-lg-5 ">
                        <a class="nav-link" aria-current="page" href="#">Info Negara</a>
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

    <!--Section: Design Block-->
    {{-- <section>
        <div id="intro" class="bg-image" style="
          background-image: url('https://mdbootstrap.com/img/Photos/new-templates/craftsman/img(1).jpg');
          height: 100vh;
        ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                <div class="container d-flex justify-content-center align-items-center h-100">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h1 class="mb-0 text-white display-1">Studio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Section: Design Block-->
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade bottom-element" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators mb-10">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100"
                    alt="Sunset Over the City" />

            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                    alt="Canyon at Nigh" />

            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                    alt="Cliff Above a Stormy Sea" />

            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
</header>
