@extends('layouts.panel')

@section('head')
<title>kopitu denpasar - keanggotaan kopitu denpasar</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/index.css') }}">
@endsection

@section('pages')
<div style="height: 70px;"></div>
<div class="elementor py-5">
    <div class="container pb-5">
        <div class="row justify-content-center align-items-center gy-4">
            <div class="col-12 col-lg-6 col-xl-6 order-2 order-lg-1">
                <div class="text-center text-md-start">
                    <h1 class="display-6 fw-bold">Keangotaan</h1>
                    <hr class="soft mx-auto mx-md-0" style="width: 100px">
                    <p class="mb-5 fs-5">Daftarkan segera diri anda dan usaha anda sebagai anggota Kopitu Denpasar dan dapatkan beberapa kemudahan diantara nya pendampingan usaha meliputi perbantuan pengurusan perizinan, pendampingan pemodalan, dan bisnis inkubator. Hanya dalam satu platform saja</p>
                    <a href="{{ route('member.register') }}" class="btn btn-outline-primary rounded-0 btn-lg px-5 d-none d-md-inline">Daftar
                        Sekarang</a>
                    <a href="{{ route('member.register') }}" class="btn btn-outline-danger rounded-0 btn-lg px-5 d-inline d-md-none">Daftar
                        Sekarang</a>
                </div>

            </div>
            <div class="col-10 col-md-8 col-lg-6 col-xl-6 order-1 order-lg-2">
                <img src="{{ url('/images/vector/members.jpg') }}" alt="about-kopitu" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@livewire('pages.index.count-members')
@livewire('pages.members.members')

<div class="py-5">
    <div class="container py-3">
        <div class="d-block mb-4">
            <p class="mb-0 fs-3 fw-bold">JENIS KEANGGOTAAN</p>
            <p class="mb-0">bergabunglah bersama kami dan dapatkan manfaatnya</p>
        </div>
    </div>
    <div class="container py-3 text-center text-lg-start">
        <div class="row justify-content-center align-items-center mb-3 py-3">
            <div class="col-10 col-md-8 col-lg-6">
                <img src="{{ url('/images/vector/MIKRO.png') }}" alt="about-logo" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="fw-bold">MIKRO</h3>
                <hr class="soft mx-auto mx-lg-0" style="width: 100px">
                <p class="text-capitalize lh-lg">Mikro diartikan sebagai usaha ekonomi produktif yang dimiliki perorangan maupun badan usaha sesuai dengan kriteria usaha mikro. Usaha yang termasuk kriteria usaha mikro adalah usaha yang memiliki kekayaan bersih mencapai Rp 50.000.000,- dan tidak termasuk bangunan dan tanah tempat usaha. Hasil penjualan usaha mikro setiap tahunnnya paling banyak Rp 300.000.000,-</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-3 py-3">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <h3 class="fw-bold">KECIL</h3>
                <hr class="soft mx-auto mx-lg-0" style="width: 100px">
                <p class="text-capitalize lh-lg">Usaha kecil merupakan suatu usaha independen atau berdiri sendiri baik perorangan atau kelompok dan bukan sebagai badan usaha cabang dari perusahaan utama. Usaha yang masuk kriteria usaha kecil adalah usaha yang memiliki kekayaan bersih Rp 50.000.000,- dengan maksimal yang dibutuhkannya mencapai Rp 500.000.000,-. Hasil penjualan bisnis setiap tahunnya antara Rp 300.000.000,- sampai paling banyak Rp 2,5.000.000.000,-.</p>
            </div>
            <div class="col-10 col-md-8 col-lg-6 order-1 order-lg-2">
                <img src="{{ url('/images/vector/KECIL.png') }}" alt="about-kopitu" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-3 py-3">
            <div class="col-10 col-md-8 col-lg-6">
                <img src="{{ url('/images/vector/MENENGAH.png') }}" alt="about-logo" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="fw-bold">MENENGAH</h3>
                <hr class="soft mx-auto mx-lg-0" style="width: 100px">
                <p class="text-capitalize lh-lg">Usaha menengah sering dikategorikan sebagai bisnis besar dengan kriteria kekayaan bersih yang dimiliki pemilik usaha mencapai lebih dari Rp500.000.000,- hingga Rp10.000.000.000,- dan tidak termasuk bangunan dan tanah tempat usaha. Hasil penjualan tahunannya mencapai Rp2,5 .000.000,- milyar sampai Rp50.000.000.000,-.</p>
            </div>
        </div>
    </div>
</div>

@livewire('pages.members.checking')

<div class="py-4 bg-blue-4" id="cara-mendaftar">
    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">Bagaimana Cara Mendaftar</h4>
                <p class="mb-0 text-secondary">Yuk simak cara mendaftar kartu keanggotaan</p>
            </div>
            <div class="d-none d-md-flex justify-content-center justify-content-md-end ms-auto">
                <button class="customPrevBtn btn btn-outline-primary p-2 me-2" type="button">
                    <i class="fas fa-angle-left fa-lg fa-fw"></i>
                </button>
                <button class="customNextBtn btn btn-outline-primary p-2" type="button">
                    <i class="fas fa-angle-right fa-lg fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/register.png') }}" alt="2" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">DAFTAR</p>
                        <p class="card-text">
                            Klik atau pilih tombol daftar daftar diatas pada halaman keanggotan
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">1</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/form.png') }}" alt="3" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">FORM</p>
                        <p class="card-text">
                            Isi form informasi terkait data diri kamu dan pemilihan jenis usaha yang kamu miliki
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">2</span>
                    </div>
                </div>
            </div>
            {{-- <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/bayar.png') }}" alt="4" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">BAYAR</p>
                        <p class="card-text">
                            Selanjutnya kamu akan dihadapkan untuk proses konfrimasi pembayaran untuk prosesi
                            pendaftaran keanggotaan
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">3</span>
                    </div>
                </div>
            </div> --}}
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/validate.png') }}" alt="6" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">KONFIRMASI</p>
                        <p class="card-text">
                            Pihak kami akan mengkonfirmasi untuk pendaftaran keanggotaan yang telah kamu
                            daftarkan
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">3</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/card.png') }}" alt="5" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">KARTU</p>
                        <p class="card-text">
                            Kamu akan mendapatkan kartu akses sebagai keanggotaan dari kopitu 
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">4</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/finish.png') }}" alt="7" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">SELESAI</p>
                        <p class="card-text">
                            Sukses, selamat kamu telah menjadi anggota bagian dari kami.
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">5</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex d-md-none justify-content-center justify-content-md-end ms-auto">
            <button class="customPrevBtn btn btn-outline-primary p-2 me-2" type="button">
                <i class="fas fa-angle-left fa-lg fa-fw"></i>
            </button>
            <button class="customNextBtn btn btn-outline-primary p-2" type="button">
                <i class="fas fa-angle-right fa-lg fa-fw"></i>
            </button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    margin:24,
    loop:false,
    autoWidth:true,
    items:4
    })
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
</script>
@endsection