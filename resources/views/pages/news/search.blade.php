@extends('layouts.panel')

@section('head')
<title>Kopitu Denpasar - Pencarian Berita</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/news.css') }}">
@endsection

@section('pages')
<div style="height: 70px;"></div>
<div class="blue-sky py-5">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center">
            <div class="mb-3 mb-lg-0">
                <h3 class="fw-bold text-white">BERITA</h3>
                <p class="fs-5 mb-0 text-light">Hasil Pencarian Berita : {{ $src }}</p>
            </div>
            <div class="d-block position-relative ms-lg-auto">
                <form action="{{ route('news.search') }}" method="get">
                    <input type="text" name="search" class="form-control border border-orange rounded-0"
                        placeholder="Cari berita terbaru" style="padding-right: 90px;">
                    <button type="submit" class="btn btn-outline-orange rounded-0 position-absolute top-0 end-0 px-4"
                        id="button-addon2">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container pt-4">
        @livewire('pages.news.search', ['post' => $src])
    </div>
</div>
@endsection

@section('script')

@endsection