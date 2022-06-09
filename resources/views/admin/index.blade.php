@extends('admin.layouts.panel')

@section('head')
    <title>kopitu denpasar - Wellcome admin kopitu denpasar</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
                <p class="fs-4 fw-bold mb-0">Wellcome Admin</p>
                <p class="mb-0">Hallo, {{ auth('admin')->user()->username }}</p>
        </div>
        <div class="d-block mb-3">
            <div class="row g-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card rounded-3 border-0 p-2 shadow-sm">
                        <div class="d-flex align-items-center px-2">
                            <i class="fas fa-users fa-3x fa-fw"></i>
                            <div class="card-body text-end">
                                <p class="card-title fs-2 mb-0">{{ $members }}</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white px-1">
                            <small class="text-start fw-bold">Data Members</small>
                        </div>
                        <a href="{{ route('admin.member') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card rounded-3 border-0 p-2 shadow-sm">
                        <div class="d-flex align-items-center px-2">
                            <i class="fas fa-newspaper fa-3x"></i>
                            <div class="card-body text-end">
                                <p class="card-title fs-2 mb-0">{{ $news }}</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white px-1">
                            <small class="text-start fw-bold">Data Berita</small>
                        </div>
                        <a href="{{ route('admin.news') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card rounded-3 border-0 p-2 shadow-sm">
                        <div class="d-flex align-items-center px-2">
                            <i class="fas fa-image fa-3x fa-fw"></i>
                            <div class="card-body text-end">
                                <p class="card-title fs-2 mb-0">{{ $gallery }}</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white px-1">
                            <small class="text-start fw-bold">Data Galeri</small>
                        </div>
                        <a href="{{ route('admin.gallery') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card rounded-3 border-0 p-2 shadow-sm">
                        <div class="d-flex align-items-center px-2">
                            <i class="fas fa-list fa-3x fa-fw"></i>
                            <div class="card-body text-end">
                                <p class="card-title fs-2 mb-0">{{ $usaha }}</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white px-1">
                            <small class="text-start fw-bold">Data Jenis Usaha</small>
                        </div>
                        <a href="{{ route('admin.category') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection