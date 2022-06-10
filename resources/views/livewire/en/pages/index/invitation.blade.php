<div>
    <div class="overflow-hidden py-5">
        <div class="container pt-5">
            <div class="d-block mb-5 pb-5">
                <div class="invitation-1 opacity-0 row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="el-1 text-center text-lg-start">
                            <h2 class="mb-0">Join Us With Kopitu</h2>
                            <hr class="soft mx-auto ms-lg-0" style="width: 100px;">
                            <p class="fs-5 mb-4">DPD KOPITU DENPASAR is here to provide assistance and assistance to MSMEs and SMEs to improve welfare in the domestic and export markets by facilitating training, technology transfer, marketing, legal assistance as well as strengthening business capital and financing.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6 order-1 order-lg-2">
                        <img src="{{ url('/images/vector/join2.jpg') }}" alt="Join" class="ei-1 img-fluid">
                    </div>
                </div>
            </div>
            <div class="d-block mb-5">
                <div class="invitation-2 opacity-0 row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <img src="{{ url('/images/vector/akses1.jpg') }}" alt="Join" class="ei-2 img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="el-2 text-center text-lg-start">
                            <h2 class="mb-0">Convenience With One Access</h2>
                            <hr class="soft mx-auto ms-lg-0" style="width: 100px;">
                            <p class="fs-5 mb-4">We provide convenience in the form of access on one platform for permit processing, financing assistance and incubator business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-custom-3 py-5">
        <div class="container">
            <div class="d-block rounded-3 shadow-sm bg-custom-4 py-5 text-center">
                <h3 class="text-blue-1">WHEN ELSE TO JOIN NOW</h3>
                <p class="fs-5 text-blue-2">Get all the conveniences and be a part of our members</p>
                <a href="{{ route('en.member') }}" class="btn btn-outline-primary btn-lg px-5">Join Now</a>
            </div>
        </div>
    </div>

    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script>
        $(window).scroll(() => {
            var wScroller = $(this).scrollTop();
            if (wScroller > $('.invitation-1').offset().top - 400) {
                $('.invitation-1').removeClass('opacity-0');
                $('.el-1').addClass('animate__animated animate__fadeInLeft');
                $('.ei-1').addClass('animate__animated animate__fadeInRight');
            }
            if (wScroller > $('.invitation-2').offset().top - 400) {
                $('.invitation-2').removeClass('opacity-0');
                $('.el-2').addClass('animate__animated animate__fadeInRight');
                $('.ei-2').addClass('animate__animated animate__fadeInLeft');
            }
        });
    </script>
</div>
