@extends('en.layouts.panel')

@section('head')
<title>Kopitu Denpasar - Welcome to the website Kopitu Denpasar</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/index.css') }}">
@endsection

@section('pages')
<div class="position-relative overflow-hidden">
    <div class="d-block" style="height: 70px;"></div>
    <div class="background-left"></div>
    <div class="background-right"></div>
    <div class="elementor">
        <img src="{{ url('/images/wallpaper/umkm-bali.png') }}" alt="umkm-bali"
            class="d-none d-lg-block position-absolute bottom-0 start-0 animate__animated animate__fadeIn animate__slow"
            height="95%">
        <div class="container">
            <div class="row justify-content-md-center align-items-center gy-5">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6">
                    <img src="{{ url('/images/wallpaper/umkm-bali.png') }}" alt="umkm-bali"
                        class="img-fluid d-inline d-lg-none w-100 animate__animated animate__fadeIn animate__slow">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-start mb-3 pe-lg-4">
                        <h1 class="mb-3 fw-bold animate__animated animate__fadeInUp">KOPITU DENPASAR</h1>
                        <p class="mb-5 animate__animated animate__fadeInUp animate__fast">KOPITU is here to provide assistance and assistance to MSMEs and SMEs to improve the welfare of MSMEs and SMEs in the domestic and export markets in the form of training facilitation, technology transfer, marketing, legal assistance as well as strengthening business capital and financing.</p>
                        <p class="fw-bold text-uppercase animate__animated animate__fadeInUp animate__fast">Ni Nyoman
                            Junianti, <br> Head Of DPD KOPITU DENPASAR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@livewire('en.pages.index.links')
@livewire('en.pages.index.invitation')
@livewire('en.pages.index.news')
@livewire('en.pages.index.count-members')
@livewire('en.pages.index.members')
@endsection

@section('script')

@endsection