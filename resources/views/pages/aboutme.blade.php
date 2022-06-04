@extends('layouts.panel')

@section('head')
<title>kopitu denpasar - Tentang kopitu denpasar bali</title>
<style>
    .elements-skew {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        transform: skewY(-2deg);
        background-color: #bdd0fb!important;
    }

    .elements-main {
        display: block;
        position: relative;
        z-index: 9;
    }

    .my-career {
        width: 400px;
    }

    .customPrevBtn {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%) !important;
    }

    .customNextBtn {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%) !important;
    }

    .img-carer{
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
        border-radius: 4px;
    }

    @media(max-width: 576px) {
        .my-career {
            width: 100%;
        }
    }
</style>
@endsection

@section('pages')
<div class="py-5">
    <div class="container py-5 mb-3">
        <div class="row justify-content-center align-items-center g-4 pt-4 pb-5">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="text-center text-lg-start">
                    <h1>Tentang Kami</h1>
                    <hr class="soft mx-auto mx-lg-0" style="width: 24%">
                    <p class="fs-5">Kopitu preneur merupakan suatu wadah yang buat oleh Komite Pengusaha Mikro Kecil
                        Menengah Indonesia Bersatu (KOPITU) sebagai agen atau enabler untuk membantu umkm dalam
                        pengurusuan
                        perizinan serta membantu memasarkan atau menghubungkan umkm dan pembeli melalui platform B2B
                        milik Kopitu
                        yaitu Kopitu E-Store</p>
                </div>
            </div>
            <div class="col-10 col-lg-6 order-1 order-lg-2">
                <div class="text-center">
                    <img src="{{ url('/images/logo/kopitu.png') }}" alt="top-banners" class="w-50">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative py-5 mb-4 mb-lg-5">
    <div class="elements-skew"></div>
    <div class="elements-main">
        <div class="container py-5">
            <div class="d-block mb-5 pb-5">
                <div class="row g-3 gx-4 align-items-center justify-content-center">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div>
                            <p class="fw-bold fs-3 mb-1">Visi Kami</p>
                            <hr class="soft" style="width: 100px">
                            <p class="fs-5">Mempermudah para umk dan umkm dalam perurusan perusahaan baik perizinan maupun
                                pemasaran</p>
                            <p class="fs-5">KOPITU memiliki visi untuk mewujudkan UMKM naik kelas, go ekspor dan mandiri.
                            </p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 order-1 order-lg-2">
                        <img src="{{ url('/images/vector/vision.png') }}" alt="vision" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="d-block mb-4">
                <div class="row g-3 gx-4 align-items-center justify-content-center">
                    <div class="col-9 col-lg-6">
                        <img src="{{ url('/images/vector/mision.png') }}" alt="mision" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <p class="fw-bold fs-3 mb-1">Misi Kami</p>
                            <hr class="soft" style="width: 100px">
                            <ul class="fs-5 px-3">
                                <li>Mewirausahakan UMKM agar lebih professional dan berkarakter.</li>
                                <li>Memperkuat jejaring dan kerjasama dengan pemerintah dan stake holder lain untuk
                                    memperkuat peran dan koperasi dan UMKM.</li>
                                <li>Membantu koperasi dan UMKM dalam mengakses penguatan modal usaha, SDM, teknologi, dan
                                    pasar domestic dan global.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="py-5">
    <div class="container pt-3 pb-5 py-lg-5">
        <div class="d-block text-center mb-5">
            <h3 class="fw-bold text-uppercase">Perjalanan Karir</h3>
            <p class="fs-5">KOPITU mengajak berbagai pihak untuk meningkatkan pemasaran dalam negeri maupun luar negeri.
                Hal ini
                bertujuan untuk mensejahterakan UMKM dan UKM yang termasuk dalam roda utama perputaran ekonomi</p>
        </div>
        <div class="d-block position-relative">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="p-3">
                                    <div class="ratio ratio-16x9 text-center px-4">
                                        <div class="img-carer" style="background-image: url('/images/career/bpjph-2020.jpeg')"></div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="position-relative w-50 ms-auto mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-0 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2020</p>
                                        <p class="mb-0">Pertemuan dengan BPOM membahas kerja sama untuk pengurusan pbom
                                            umk dan umkm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="p-3">
                                    <div class="ratio ratio-16x9 text-center px-4">
                                        <div class="img-carer" style="background-image: url('/images/career/bpom.jpeg')"></div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="position-relative mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-50 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2021</p>
                                        <p class="mb-0">Pertemuan dengan BPOM membahas kerja sama untuk pengurusan pbom
                                            umk dan umkm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="p-3">
                                    <div class="ratio ratio-16x9 text-center px-4">
                                        <div class="img-carer" style="background-image: url('/images/career/e-store.jpg')"></div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="position-relative mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-50 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2022</p>
                                        <p class="mb-0">Pembuatan elektronik store pertama kopitu untuk mempermudah para
                                            umk dan umkm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="p-3">
                                    <div class="ratio ratio-16x9 text-center px-4">
                                        <div class="img-carer" style="background-image: url('/images/career/lkpp.jpeg')"></div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <div class="position-relative w-50 me-auto mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-100 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2022</p>
                                        <p class="mb-0">Pertemuan dengan LKPP pembahasan mengenai integrasi dengan
                                            kopitu e-store</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="owl-nav">
                    <button class="customPrevBtn btn btn-primary btn-sm p-1 me-2" type="button">
                        <i class="fas fa-angle-left fa-lg fa-fw"></i>
                    </button>
                    <button class="customNextBtn btn btn-primary btn-sm p-1" type="button">
                        <i class="fas fa-angle-right fa-lg fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-custom-4 py-5 px-0 m-0">
    <div class="container pt-3 pb-5 py-lg-5">
        <div class="row g-3 align-items-stretch">
            <div class="col-12">
                <p class="fs-3 fw-bold">Lokasi Kami</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
                    <iframe class="w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1489520874957!2d115.2349925140719!3d-8.677381790742741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240586dbd36eb%3A0xac31629ef06f1f6e!2sJl.%20Tukad%20Yeh%20Aya%20No.116%2C%20Dauh%20Puri%20Klod%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080234!5e0!3m2!1sid!2sid!4v1654314138406!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row g-3 align-items-stretch h-100 mt-0">
                    <div class="col-12 mt-0">
                        <div class="d-block h-100 rounded-3 bg-white shadow-sm p-3">
                            <p class="fw-bold mb-1">Indonesia</p>
                            <p class="mb-0"> <i class="fas fa-map-marker-alt fa-sm fa-fw"></i> Jl. Letjen S. Parman
                                No.Kav. 28, RT.3/RW.5, Tj. Duren Sel., Kec. Grogol petamburan, Kota Jakarta Barat,
                                Daerah Khusus Ibukota Jakarta 11470</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-block h-100 rounded-3 bg-white shadow-sm p-3">
                            <p class="fw-bold mb-1">Phone</p>
                            <p class="mb-0">+62 882-2988-5435</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-block h-100 rounded-3 bg-white shadow-sm p-3">
                            <p class="fw-bold mb-1">Email</p>
                            <p class="mb-0">info@kopitudenpasar.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:   false,
        nav: false,
        lazyLoad:false,
        dots: false,
        responsive: {
            0: {
                items: 1,
                autoWidth: false,
            },
            600: {
                autoWidth:  true,
            }
        }
    })
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    $('.customPrevBtn').click(function() {
        owl.trigger('prev.owl.carousel');
    })
</script>
@endsection