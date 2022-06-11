@extends('en.layouts.panel')

@section('head')
<title>kopitu denpasar - Membership kopitu denpasar</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/index.css') }}">
@endsection

@section('pages')
<div style="height: 70px;"></div>
<div class="elementor py-5">
    <div class="container pb-5">
        <div class="row justify-content-center align-items-center gy-4">
            <div class="col-12 col-lg-6 col-xl-6 order-2 order-lg-1">
                <div class="text-center text-md-start">
                    <h1 class="display-6 fw-bold">Membership</h1>
                    <hr class="soft mx-auto mx-md-0" style="width: 100px">
                    <p class="mb-5 fs-5">Register immediately yourself and your business as a member of Kopitu Denpasar and get several conveniences including business assistance including assistance in managing permits, capital assistance, and incubator business. In just one platform only</p>
                    <a href="{{ route('member.register') }}" class="btn btn-outline-primary rounded-0 btn-lg px-5 d-none d-md-inline">Register Now</a>
                    <a href="{{ route('member.register') }}" class="btn btn-outline-danger rounded-0 btn-lg px-5 d-inline d-md-none">Register Now</a>
                </div>

            </div>
            <div class="col-10 col-md-8 col-lg-6 col-xl-6 order-1 order-lg-2">
                <img src="{{ url('/images/vector/members.jpg') }}" alt="about-kopitu" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@livewire('en.pages.index.count-members')
@livewire('en.pages.members.members')

<div class="py-5">
    <div class="container py-5">
        <div class="d-block mb-4">
            <p class="mb-0 fs-3 fw-bold">MEMBERSHIP TYPES</p>
            <p class="mb-0">join us and get the benefits form kopitu denpasar</p>
        </div>
        <div class="row justify-content-center align-items-center mb-3 py-3">
            <div class="col-10 col-md-8 col-lg-6">
                <img src="{{ url('/images/vector/MIKRO.png') }}" alt="about-logo" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="fw-bold">MICRO</h3>
                <hr class="soft" style="width: 100px">
                <p class="text-capitalize">Micro Is Defined As A Productive Economic Business Owned By Individuals And Business Entities In Accordance With The Criteria Of Micro-Enterprises. Businesses That Are Included In The Criteria For Micro-Enterprises Are Businesses That Have A Net Worth Of Rp. 50,000,000, - And Do Not Include Buildings And Land For Business Premises. The Proceeds From The Sale Of Micro-Enterprises Every Year Are At Most RP 300,000,000</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-3 py-3">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <h3 class="fw-bold">SMALL</h3>
                <hr class="soft" style="width: 100px">
                <p class="text-capitalize">A Small Business Is An Independent Or Stand-Alone Business Either Individually Or In A Group And Not As A Branch Business Entity Of The Main Company. Businesses That Are Included In The Criteria For Small Businesses Are Businesses That Have A Net Worth Of Rp. 50,000,000, - With The Maximum Required Reaching Rp. 500,000,000,-. The Results Of Business Sales Every Year Are Between Rp. 300,000,000 To A Maximum Of Rp. 2,5,000,000,000,-.</p>
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
                <h3 class="fw-bold">INTERMEDIATE</h3>
                <hr class="soft" style="width: 100px">
                <p class="text-capitalize">Medium-Sized Businesses Are Often Categorized As Large Businesses With Net Worth Criteria Owned By Business Owners Reaching More Than Rp. 500,000,000 To Rp. 10,000,000,000, - And Excluding Buildings And Land For Business Premises. The Annual Sales Reached IDR 2.5,000,000 Billion To IDR 50,000,000,000,-.</p>
            </div>
        </div>
    </div>
</div>

@livewire('pages.members.checking')

<div class="py-4 bg-blue-4">
    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">How to Apply</h4>
                <p class="mb-0 text-secondary">Let's see how to register for a membership card</p>
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
                            Click or select the registered of this page above button on the membership page 
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
                            Fill in the information form related to your personal data and choose the type of business you have 
                        </p>
                    </div>
                    <div class="py-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">2</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/vector/validate.png') }}" alt="6" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">CONFIRMATION</p>
                        <p class="card-text">
                            We will confirm the membership registration that you have registered 
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
                        <p class="fs-5 fw-bold text-center">CARDS</p>
                        <p class="card-text">
                            You will get an access card as a membership from kopitu 
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
                        <p class="fs-5 fw-bold text-center">FINISH</p>
                        <p class="card-text">
                            Success, congratulations you have become a member of our part. 
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