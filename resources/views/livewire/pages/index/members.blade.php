<div>
    <div class="bg-custom-3 pt-5 pb-4">
        <div class="container pt-3 pb-4">
            <div class="d-block mb-4">
                <h3 class="fw-bold">Keanggotaan Terbaik</h3>
                <p class="mb-0 text-secondary fs-5">Berikut ini merupakan member terbaik KOPITU Denpasar</p>
            </div>
            <div class="d-block mb-3">
                <section class="splide" aria-label="banners sliders">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($x=0; $x<=6; $x++) : ?>
                            <div class="splide__slide" data-splide-interval="1000">
                                <div class="mb-5 mt-3">
                                    <div class="d-block text-center">
                                        <img src="{{ url('/images/members/avatar.png') }}" alt="username"
                                            class="rounded-circle" width="120px" height="120px">
                                    </div>
                                    <div class="card-body text-center bg-white mx-4 pt-5 pb-5"
                                        style="margin-top: -3.5rem; border-radius: 18px;">
                                        <div class="py-3"></div>
                                        <p class="fs-5 mb-0 text-primary">Username</p>
                                        <small class="d-block text-dark mb-2">Email</small>
                                        <div class="d-flex justify-content-center">
                                            <?php for($y=1; $y<=5;$y++) : ?>
                                            <i class="fas fa-star fa-sm fa-fw"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="p-3">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quod neque
                                            sapiente aspernatur exercitationem ab omnis! Ullam quasi dolor praesentium
                                            ratione, obcaecati incidunt dignissimos natus a voluptatibus consequatur amet
                                            tenetur!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
