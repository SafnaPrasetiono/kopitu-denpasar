@extends('layouts.panel')

@section('head')
<title>Kopitu Denpasar - Selamat datang di website Kopitu Denpasar</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/index.css') }}">
@endsection

@section('pages')
<div class="position-relative overflow-hidden">
    <div class="d-block" style="height: 70px;"></div>
    <div class="background-left"></div>
    <div class="background-right"></div>
    <div class="elementor">
        <img src="{{ url('/images/wallpaper/umkm-bali.png') }}" alt="umkm-balis"
            class="d-none d-lg-block position-absolute bottom-0 start-0 animate__animated animate__fadeIn animate__slow"
            height="98%">
        <div class="container">
            <div class="row justify-content-md-center align-items-center gy-5">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6 mt-0">
                    <img src="{{ url('/images/wallpaper/umkm-bali.png') }}" alt="umkm-balis"
                        class="img-fluid d-inline d-lg-none w-100 animate__animated animate__fadeIn animate__slow">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-start mb-3 pe-lg-4">
                        <h1 class="mb-3 fw-bold animate__animated animate__fadeInUp">KOPITU DENPASAR</h1>
                        <p class="mb-5 animate__animated animate__fadeInUp animate__fast">KOPITU hadir untuk melakukan
                            pendampingan dan bantuan kepada UMKM dan UKM untuk
                            meningkatkan kesejahteraan UMKM dan UKM dalam pasar dalam negeri maupun ekspor dalam bentuk
                            fasilitasi pelatihan, alih teknologi, pemasaran , bantuan hukum serta penguatan modal usaha
                            dan
                            pembiayaan.</p>
                        <p class="fw-bold text-uppercase animate__animated animate__fadeInUp animate__fast">Ni Nyoman
                            Junianti, <br> Ketua DPD KOPITU DENPASAR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@livewire('pages.index.links')
@livewire('pages.index.invitation')
@livewire('pages.index.news')
@livewire('pages.index.count-members')
@livewire('pages.index.members')
@endsection

@section('script')

@endsection