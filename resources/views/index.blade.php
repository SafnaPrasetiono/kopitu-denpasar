@extends('layouts.panel')

@section('head')
<title>Kopitu Denpasar - Selamat datang di website Kopitu Denpasar</title>
<style>
    .elementor {
        position: relative;
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    @media(max-width: 768px) {
        .elementor {
            padding-top: 2rem;
            padding-bottom: 4rem;
        }
    }
</style>
@endsection

@section('pages')
<div class="py-0 pb-lg-0 pt-lg-5">
    <div class="elementor">
        <img src="{{ url('/images/wallpaper/yoyok.png') }}" alt="yoyok-pitoyo"
            class="d-none d-lg-block position-absolute bottom-0 start-0 animate__animated animate__fadeIn animate__slow"
            height="100%">
        <div class="container">
            <div class="row justify-content-md-center align-items-center gy-5">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6">
                    <img src="{{ url('/images/wallpaper/yoyok.png') }}" alt="yoyok-pitoyo"
                        class="img-fluid d-block d-lg-none w-100 animate__animated animate__fadeIn animate__slow">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-start mb-3">
                        <h2 class="mb-3 fw-bold animate__animated animate__fadeInUp">KOPITU DENPASAR</h2>
                        <p class="mb-5 animate__animated animate__fadeInUp animate__fast">KOPITU hadir untuk melakukan
                            pendampingan dan bantuan kepada UMKM dan UKM untuk
                            meningkatkan kesejahteraan UMKM dan UKM dalam pasar dalam negeri maupun ekspor dalam bentuk
                            fasilitasi pelatihan, alih teknologi, pemasaran , bantuan hukum serta penguatan modal usaha
                            dan
                            pembiayaan.</p>
                        <p class="fw-bold text-uppercase animate__animated animate__fadeInUp animate__fast">Ni Nyoman Junianti, <br> Ketua DPD KOPITU DENPASAR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-blue-5 rounded-0 py-5 px-0 m-0">
    <div class="container py-5">
        <div class="row justify-content-center g-4">

            <div class="col-12 col-md-6 col-lg-4">
                <a class="card-active rounded-3 shadow-sm p-3" href="#">
                    <img src="{{ url('/images/vector/business.jpg') }}" alt="busines" width="120px">
                    <div class="ms-auto px-2">
                        <p class="text-card fw-light fs-3 mb-0">Bisnis Inkubator</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a class="card-active rounded-3 shadow-sm p-3" href="#">
                    <img src="{{ url('/images/logo/kopitu-estore.png') }}" alt="busines" width="120px">
                    <div class="ms-auto px-2">
                        <p class="text-card fw-light fs-3 mb-0">Kopitu E-Store</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a class="card-active rounded-3 shadow-sm p-3" href="#">
                    <img src="{{ url('/images/wallpaper/kopitu-preneur.png') }}" alt="busines" width="120px">
                    <div class="ms-auto px-2">
                        <p class="text-card fw-light fs-3 mb-0">Kopitu Preneur</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="d-block mb-5 pb-5">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="text-center text-lg-start">
                        <h2 class="mb-0">Bergabunglah Besama Kami</h2>
                        <hr class="soft mx-auto ms-lg-0" style="width: 100px;">
                        <p class="fs-5 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsam et maxime
                            enim
                            expedita vero distinctio doloribus quidem quas odit id, praesentium quasi dolores dolor facilis
                            eaque a iste itaque.</p>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-6 order-1 order-lg-2">
                    <img src="{{ url('/images/vector/join2.jpg') }}" alt="Join" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="d-block mb-5">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <img src="{{ url('/images/vector/akses1.jpg') }}" alt="Join" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-start">
                        <h2 class="mb-0">Kemudahan Dengan Satu Akses</h2>
                        <hr class="soft mx-auto ms-lg-0" style="width: 100px;">
                        <p class="fs-5 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsam et maxime
                            enim
                            expedita vero distinctio doloribus quidem quas odit id, praesentium quasi dolores dolor facilis
                            eaque a iste itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-custom-3 py-5">
    <div class="container">
        <div class="d-block rounded-3 shadow-sm bg-custom-4 py-5 text-center">
            <h3 class="text-blue-1">KAPAN LAGI AYO GABUNG SEKARANG</h3>
            <p class="fs-5 text-blue-2">Dapatkan semua kemudahan dan jadilah sebagain bagian angota dari kami</p>
            <a href="#" class="btn btn-outline-primary btn-lg px-5">Gabung</a>
        </div>
    </div>
</div>

<div class="bg-custom-4 pt-5 pb-4">
    <div class="container pt-3 pb-4">
        <div class="d-block mb-4">
            <h3 class="fw-bold">Keanggotaan Terbaik</h3>
            <p class="mb-0 text-secondary fs-5">Berikut ini merupakan member terbaik KOPITU Denpasar</p>
        </div>
        <div class="d-block mb-3">
            <section class="splide" aria-label="banners sliders">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php for($x=0; $x<=6; $x++) : ?>
                        <div class="splide__slide" data-splide-interval="1000">
                            <div class="mb-5 mt-3">
                                <div class="d-block text-center">
                                    <img src="{{ url('/images/members/avatar.png') }}" alt="username"
                                        class="rounded-circle" width="120px" height="120px">
                                </div>
                                <div class="card-body text-center bg-blue-5 mx-4 pt-5 pb-5"
                                    style="margin-top: -3.5rem; border-radius: 18px;">
                                    <div class="py-3"></div>
                                    <p class="fs-5 mb-0 text-primary">Username</p>
                                    <small class="d-block text-dark mb-2">Email</small>
                                    <div class="d-flex justify-content-center">
                                        <?php for($y=1; $y<=5;$y++) : ?>
                                        <i class="fas fa-star fa-sm fa-fw"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="p-3">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quod neque
                                        sapiente aspernatur exercitationem ab omnis! Ullam quasi dolor praesentium
                                        ratione, obcaecati incidunt dignissimos natus a voluptatibus consequatur amet
                                        tenetur!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    var splide = new Splide( '.splide', {
        type   : 'loop',
        perMove: 1,
        perPage: 3,
        breakpoints: {
            768: {
            perPage: 1,
            },
            999: {
            perPage: 2,
            },
        },
    } );

splide.mount();
</script>
@endsection