<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="safna prasetiono">
    <meta name="description"
        content="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu (KOPITU) dibentuk sebagai wadah di tingkat nasional yang menyatukan pelaku usaha dan pemangku kepentingan lain baik pemerintah maupun non pemerintah lintas sectoral dan multi sectoral untuk bersinergi meningkatkan kemampuan bersaing UMKM Indonesia.">
    <meta name="keywords" content="kopitu, kopitu umkm, komite, komite umkm, komite-umkm, umkm"
        type="application/rss+xml" title="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu » Feed">
    <link rel="alternate" type="application/rss+xml"
        title="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu » Comments Feed">

    <meta name="msapplication-navbutton-color" content="#dd894c" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#dd894c" />
    <link rel="icon" type="image/png" href="{{asset('/images/logo/kopitu.png')}}" />

    @yield('head')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/index.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/color.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/animated.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('/assets/owl/css/owl.carousel.min.css') }}"> --}}
    {{--
    <link rel="stylesheet" href="{{ asset('/assets/videosjs/css/video.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('/assets/splide/css/splide.min.css') }}">
    @livewireStyles
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container py-1">
            <a class="navbar-brand fw-bold" href="#">KOPITU<span class="text-primary">DENPASAR</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    @auth('user')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle"
                                src="{{ url('/images/avatar/user/' . auth('user')->user()->avatar) }}" alt="user"
                                width="28px" height="28px">
                            <span class="text-capitalize">
                                {{ auth('user')->user()->username }}
                            </span>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.lamaran') }}">Lamaran Saya</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.setting') }}">Peraturan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="btnLogout dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item d-inline d-lg-none">
                        <a class="nav-link link-primary" href="#">Daftar</a>
                    </li>
                    <li class="nav-item d-inline d-lg-none">
                        <a class="nav-link link-primary" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-primary d-none d-lg-inline-block px-4 mx-2">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-primary d-none d-lg-inline-block px-4">Masuk</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <section>
        @yield('pages')
    </section>


    <footer>
        <div class="py-5 bg-primary">
            <div class="container">
                <div class="row gy-4 mb-5">
                    <div class="col-12 col-lg-8">
                        <div class="text-white pe-0 pe-lg-5">
                            <p class="fw-bold fs-5 mb-3">Tentang Website</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi consequuntur tenetur
                                eum esse! Repudiandae tenetur fuga, doloribus aliquam, quae dolorum nesciunt magni optio
                                ducimus maiores quibusdam! Enim deserunt distinctio porro!</p>
                            <div class="pe-0 pe-md-5">
                                <div class="d-flex mb-2">
                                    <i class="fas fa-phone fa-fw"></i>
                                    <p class="mb-0 ms-2">+62 882-2988-5435</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <p class="mb-0 ms-2">info@kopitudenpasar.com</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-map-marked fa-fw"></i>
                                    <p class="mb-0 ms-2">Jl. Moh. Besar, Dusun II Prompong, Kutasari, Kec. Baturaden,
                                        Kabupaten Banyumas, Jawa Tengah 53151</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="text-white">
                            <p class="fw-bold fs-5 mb-3">Terbaru</p>
                            <nav class="nav flex-column">
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://balisanitya.com/">Bali
                                    Sanitiya</a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://lumbungdeso.id/">Kopitu E-Store</a>
                                <a class="nav-link link-light px-0 py-1 mb-2 active" aria-current="page" href="#">Kopitu Preneur</a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="#">Tentang Kami</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="text-white">
                            <p class="fw-bold fs-5 mb-3">Link Lainnya</p>
                            <nav class="nav flex-column">
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://balisanitya.com/">Cara
                                    Mendaftar</a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://lumbungdeso.id/">Kebijakan Privasi</a>
                                <a class="nav-link link-light px-0 py-1 mb-2 active" aria-current="page" href="#">Syarat Ketenturan</a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="#">Daftar dan Masuk</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-lg-between align-items-center">
                    <div class="text-white">
                        <span class="fw-bold fs-5 fw-bold">Social Media</span>
                        <hr class="soft" width="50px">
                        <nav class="nav">
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/facebook.png') }}" alt="facebook"
                                    class="rounded-circle" width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/twitter.png') }}" alt="twitter"
                                    class="rounded-circle" width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/instagram.png') }}" alt="instagram"
                                    class="rounded-circle" width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/tiktok.png') }}" alt="facebook"
                                    class="rounded-circle" width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/youtube.png') }}" alt="youtube"
                                    class="rounded-circle" width="42px" height="42px">
                            </a>
                        </nav>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center text-white">
                            <i class="fas fa-phone fa-2x fa-fw"></i>
                            <div class="d-block ms-2">
                                <p class="fw-bold mb-0">Layanan Teknisi</p>
                                <p class="m-0">+62 877-7833-5325</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2" style="background-color: #0d5ed6">
            <div class="container">
                <div class="text-center text-white">
                    <small>Suported by komite pengusaha mikro kecil menengah indonesia bersatu (KOPITU)</small>
                </div>
            </div>
        </div>
    </footer>



    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ url('/assets/dist/js/popper.js') }}"></script>
    <script src="{{ url('/assets/app/js/app.js') }}"></script>
    <script src="{{ url('/assets/dist/js/alert.js') }}"></script>
    <script src="{{ url('/assets/dist/js/index.js') }}"></script>
    <script src="{{ asset('/assets/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/videosjs/js/video.min.js') }}"></script>
    <script src="{{ asset('/assets/splide/js/splide.min.js') }}"></script>
    @livewireScripts
    @yield('script')
</body>

</html>