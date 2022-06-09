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
    <link rel="stylesheet" href="{{ asset('/assets/owl/css/owl.carousel.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('/assets/videosjs/css/video.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('/assets/splide/css/splide.min.css') }}">
    @livewireStyles
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ url('/images/logo/kopitu.png') }}" alt="" height="46px"
                    style="margin-top: -4px; margin-bottom: -4px">
                <span class="px-2">KOPITU<span class="text-primary">DENPASAR</span></span>
            </a>
            <button class="btn d-inline d-lg-none btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#sliderNavbar">
                <i class="fas fa-bars fa-lg fa-fw"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navigate">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" aria-current="page" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('member') }}">Keangotaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('gallery') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('aboutme') }}">Tentang Kami</a>
                    </li>
                    {{-- @auth('user')
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
                        <a class="nav-link link-primary" href="{{ route('register') }}">Daftar</a>
                    </li>
                    <li class="nav-item d-inline d-lg-none">
                        <a class="nav-link link-primary" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}"
                            class="btn btn-outline-primary rounded-pill d-none d-lg-inline-block px-4 mx-2">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="btn btn-primary rounded-pill d-none d-lg-inline-block px-4">Masuk</a>
                    </li>
                    @endauth --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="slider offcanvas offcanvas-end" tabindex="-1" id="sliderNavbar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sliderNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0 py-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('member') }}">Keanggotaan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('news') }}">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('gallery') }}">Galeri</a>
                </li>
              </ul>
        </div>
    </div>

    <section>
        @yield('pages')
    </section>


    <footer class="footer">
        <div class="footer-head py-5">
            <div class="container mb-5 py-3">
                <div class="row gy-4">
                    <div class="col-12 col-lg-8">
                        <div class="text-white pe-0 pe-lg-5">
                            <p class="fw-bold fs-5 mb-3">Tentang Website</p>
                            <hr class="soft text-white" width="50px">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi consequuntur tenetur
                                eum esse! Repudiandae tenetur fuga, doloribus aliquam, quae dolorum nesciunt magni optio
                                ducimus maiores quibusdam! Enim deserunt distinctio porro!</p>
                            <div class="pe-0 pe-md-5">
                                <div class="d-flex align-items-start mb-2">
                                    <i class="fas fa-phone fa-fw me-2"></i>
                                    <p class="mb-0">+62 882-2988-5435</p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-envelope fa-fw me-2"></i>
                                    <p class="mb-0">info@kopitudenpasar.com</p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-map-marked fa-fw me-2"></i>
                                    <p class="mb-0">Jl. Tukad Yeh Aya No.116, Dauh Puri Klod, Denpasar Selatan, Kota
                                        Denpasar, Bali 80234</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="text-white">
                            <p class="fw-bold fs-5 mb-3">Terbaru</p>
                            <hr class="soft text-white" width="50px">
                            <nav class="nav flex-column nav-footer">
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://balisanitya.com/">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Bali Sanitiya
                                </a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://lumbungdeso.id/">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Kopitu E-Store
                                </a>
                                <a class="nav-link link-light px-0 py-1 mb-2 active" aria-current="page" href="#">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Kopitu Preneur
                                </a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="#">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Tentang Kami
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="text-white">
                            <p class="fw-bold fs-5 mb-3">Link Lainnya</p>
                            <hr class="soft text-white" width="50px">
                            <nav class="nav flex-column nav-footer">
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://balisanitya.com/">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Cara Mendaftar
                                </a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="https://lumbungdeso.id/">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Kebijakan Privasi
                                </a>
                                <a class="nav-link link-light px-0 py-1 mb-2 active" aria-current="page" href="#">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Syarat Ketenturan
                                </a>
                                <a class="nav-link link-light px-0 py-1 mb-2" href="#">
                                    <i class="fas fa-angle-double-right fa-sm nav-icons "></i>Daftar dan Masuk
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center">
                    <div class="text-white text-center text-md-start mb-5 mb-md-0">
                        <span class="fw-bold fs-5 fw-bold">Social Media</span>
                        <hr class="soft mx-auto mx-md-0 text-white" width="50px">
                        <nav class="nav">
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/facebook.png') }}" alt="facebook" class="rounded-circle"
                                    width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/twitter.png') }}" alt="twitter" class="rounded-circle"
                                    width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/instagram.png') }}" alt="instagram"
                                    class="rounded-circle" width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/tiktok.png') }}" alt="facebook" class="rounded-circle"
                                    width="42px" height="42px">
                            </a>
                            <a class="nav-link py-0 px-0 me-3" target="balnk" href="#">
                                <img src="{{ url('/images/icons/youtube.png') }}" alt="youtube" class="rounded-circle"
                                    width="42px" height="42px">
                            </a>
                        </nav>
                    </div>
                    <div class="mt-0 mt-lg-auto">
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
        <div class="cc">
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
    <script src="{{ asset('/assets/splide/js/splide.min.js') }}"></script>
    @livewireScripts
    @yield('script')

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
        })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
        })
    </script>
    @endif
</body>

</html>