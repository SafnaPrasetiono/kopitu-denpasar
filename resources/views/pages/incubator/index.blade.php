@extends('layouts.panel')

@section('head')
<title>Kopitu Denpasar - Bisnis Inkubator</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/index.css') }}">
@endsection

@section('pages')
<div class="position-relative overflow-hidden py-5">
    <div class="d-block" style="height: 70px;"></div>
    <div class="background-left"></div>
    <div class="container py-3">
        <div class="row justify-content-md-center align-items-center gy-5">
            <div class="col-12 col-lg-6">
                <div class="text-center text-lg-start mb-3 pe-lg-4">
                    <h1 class="mb-3 fw-bold animate__animated animate__fadeInUp">KOPITU DENPASAR</h1>
                    <p class="mb-5 animate__animated animate__fadeInUp animate__fast">KOPITU hadir untuk melakukan
                        pendampingan dan bantuan kepada UMKM dan UKM untuk
                        meningkatkan kesejahteraan UMKM dan UKM dalam pasar dalam negeri maupun ekspor dalam bentuk
                        fasilitasi pelatihan, alih teknologi, pemasaran , bantuan hukum serta penguatan modal usaha
                        dan
                        pembiayaan.</p>
                </div>
            </div>
            <div class="col-12 col-sm-9 col-md-8 col-lg-6">
                <img src="{{ url('/images/wallpaper/yoyok.png') }}" alt="yoyok-pitoyo"
                    class="img-fluid animate__animated animate__fadeIn animate__slow">
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection