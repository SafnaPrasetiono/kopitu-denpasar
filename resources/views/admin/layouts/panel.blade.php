<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" href="{{ url('/assets/dist/css/color.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/animated.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/admin/panel.css') }}">
    @livewireStyles
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2 overflow-hidden text-truncate" href="#">
                                <p class="lh-1 mb-0 fw-bold">Sample</p>
                                <small class="content-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Quia sint laboriosam in architecto earum.</small>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="{{ url('/images/avatar/' . auth('admin')->user()->avatar) }}" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="{{ url('/images/avatar/' . auth('admin')->user()->avatar) }}" alt="user"
                                    class="img-user me-2">
                                <div class="d-block mt-1">
                                    <p class="fw-bold m-0 lh-1">Username</p>
                                    <small>Email@gmail.com</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="btnLogout dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block p-3">
                    <img src="{{ url('/images/avatar/' . auth('admin')->user()->avatar) }}" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">{{ auth('admin')->user()->username }}</p>
                    <small class="text-light">{{ auth('admin')->user()->email }}</small>
                </div>
            </div>
            <div class="slider-body px-1 pb-4">
                <nav class="nav flex-column" id="nav-accordion">
                    <a class="nav-link active" href="{{ route('admin.index') }}">
                        <i class="fa fa-home box-icon" aria-hidden="true"></i>Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-user box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 text-white">
                    <a class="nav-link px-3" href="#">
                        <i class="far fa-users box-icon fa-fw"></i>User
                    </a>
                    <a class="nav-link collapsed" href="#services" type="button" data-bs-toggle="collapse"
                    data-bs-target="#services">
                    <i class="fas fa-users box-icon fa-fw "></i>Keanggotaan
                    <span class="indications">
                        <i class="fas fa-angle-up fa-sm fa-fw"></i>
                    </span>
                    </a>
                    <div id="services" class="accordion-collapse collapse" data-bs-parent="#nav-accordion">
                        <a class="nav-link nav-link-child ps-5" href="{{ route('admin.category') }}">
                            <i class="fas fa-list-alt box-icon"></i>Jenis Usaha
                        </a>
                        <a class="nav-link nav-link-child ps-5" href="{{ route('admin.member') }}">
                            <i class="fas fa-database box-icon fa-fw "></i>Data Anggota
                        </a>
                    </div>
                    <hr class="soft my-1 text-white">
                    <a class="nav-link" href="{{ route('admin.news') }}">
                        <i class="fas fa-newspaper box-icon" aria-hidden="true"></i>Berita
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-image box-icon" aria-hidden="true"></i>Galery
                    </a>
                    <hr class="soft my-1 text-white">
                    <a class="btnLogout nav-link px-3" href="#">
                        <i class="fas fa-sign-out-alt box-icon"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            @yield('pages')
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ url('/assets/dist/js/popper.js') }}"></script>
    <script src="{{ url('/assets/app/js/app.js') }}"></script>
    <script src="{{ url('/assets/dist/js/alert.js') }}"></script>
    <script src="{{ url('/assets/dist/js/admin/panel.js') }}"></script>
    <script src="{{ asset('/assets/owl/owl.carousel.min.js') }}"></script>
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