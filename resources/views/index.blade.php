@extends('layouts.panel')

@section('head')
<title>Kopitu Denpasar - Selamat datang di website Kopitu Denpasar</title>
<style>
    .elementor {
        position: relative;
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    @media(max-width: 992px) {
        .elementor {
            padding-top: 2rem;
            padding-bottom: 4rem;
        }
    }
</style>
@endsection

@section('pages')
<div class="position-relative py-0 py-lg-5" style="background-color: #ffffff">
    {{-- <img src="{{ url('/images/wallpaper/top.png') }}" alt="landing-top" class="position-absolute h-100 top-0 end-0"> --}}
    <div class="d-block" style="height: 70px;"></div>
    <div class="elementor">
        <img src="{{ url('/images/wallpaper/yoyok.png') }}" alt="yoyok-pitoyo"
            class="d-none d-lg-block position-absolute bottom-0 start-0 animate__animated animate__fadeIn animate__slow"
            height="90%">
        <div class="container">
            <div class="row justify-content-md-center align-items-center gy-5">
                <div class="col-12 col-sm-9 col-md-8 col-lg-5">
                    <img src="{{ url('/images/wallpaper/yoyok.png') }}" alt="yoyok-pitoyo"
                        class="img-fluid d-inline d-lg-none w-100 animate__animated animate__fadeIn animate__slow">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-start mb-3 pe-lg-4">
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
@livewire('pages.index.links')
@livewire('pages.index.invitation')

<div class="py-5">
    @livewire('pages.index.news')
</div>
@livewire('pages.index.count-members')
@livewire('pages.index.members')

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