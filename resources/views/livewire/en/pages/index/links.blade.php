<div>
    <div class="link-content bg-blue-5 rounded-0 py-5 px-0 m-0">
        <div class="container py-5">
            <div class="row justify-content-center g-4">
    
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="card-active opacity-0 rounded-3 shadow-sm p-3" href="#">
                        <img src="{{ url('/images/vector/business.jpg') }}" alt="busines" width="120px">
                        <div class="ms-auto px-2">
                            <p class="text-card fw-light fs-3 mb-0">Incubator Business</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="card-active opacity-0 rounded-3 shadow-sm p-3" href="https://kopitu.com">
                        <img src="{{ url('/images/logo/kopitu-estore.png') }}" alt="busines" width="120px">
                        <div class="ms-auto px-2">
                            <p class="text-card fw-light fs-3 mb-0">Kopitu E-Store</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="card-active opacity-0 rounded-3 shadow-sm p-3" href="#">
                        <img src="{{ url('/images/wallpaper/kopitu-preneur.png') }}" alt="busines" width="120px">
                        <div class="ms-auto px-2">
                            <p class="text-card fw-light fs-3 mb-0">Kopitu Preneur</p>
                        </div>
                    </a>
                </div>
    
            </div>
        </div>
    </div>

    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script>
        $(window).scroll(() => {
            var wScroller = $(this).scrollTop();
            if (wScroller > $('.link-content').offset().top - 500) {
                $('.card-active').each((i) => {
                    setTimeout(() => {
                        $('.card-active').eq(i).addClass('d-flex');
                        $('.card-active').eq(i).removeClass('opacity-0');
                        $('.card-active').eq(i).addClass('animate__animated animate__fadeIn');
                    }, 200 * i + 1);
                });
            }
        });
    </script>
</div>
