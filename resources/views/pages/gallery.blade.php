@extends('layouts.panel')

@section('head')
<title>Kopitu Denpasar - Galeri dan kegiatan kopitu denpasar</title>
<style>
    .img-height {
        height: 280px;
    }

    .img-gallery {
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    @media(max-width: 768px) {
        .img-height {
            height: 200px;
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px"></div>
<div class="d-block py-5 bg-danger">
    <div class="container">
        <h2 class="fw-bold text-white">Galeri Kopitu Denpasar</h2>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('index') }}"
                    class="link-light text-decoration-none">beranda</a></li>
            <li class="breadcrumb-item text-white" aria-current="page">Galeri</li>
        </ol>
    </div>
</div>
<div class="py-3">
    <div class="container">
        @livewire('pages.gallery.data')
    </div>
</div>
@endsection

@section('script')

@endsection