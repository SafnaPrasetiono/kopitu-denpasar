<div>
    <div class="news-content py-5">
        <div class="container py-5">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex text-dark-blue news-title opacity-0">
                    <i class="fas fa-newspaper fa-2x fa-fw"></i>
                    <h4 class="fw-bold ms-3">News</h4>
                </div>
                <a href="{{ route('en.news') }}" class="btn btn-outline-primary rounded-pill py-1 ms-auto news-botton opacity-0">
                    All <i class="fas fa-angle-right fa-sm fa-fw"></i>
                </a>
            </div>
            <div class="row g-4 mb-4">
                @foreach ($data as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="box-news card border overflow-hidden opacity-0">
                        <div class="btn-images-news ratio ratio-16x9" style="background-image: url('/images/news/{{$item->images}}')">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                {{ $item->title }}
                            </a>
                            <small class="d-block text-secondary mb-3">Berita, {{ date('d F Y', strtotime($item->created_at) )
                                }}</small>
                            <p class="card-text text-ellipsis-4">
                                {{ $item->description }}
                            </p>
                            <a href="{{ route('news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}" class="btn link-primary px-0">Lihat detail <i
                                    class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script>
        $(window).scroll(() => {
            var wScroller = $(this).scrollTop();
            if (wScroller > $('.news-content').offset().top - 400) {
                $('.news-title').removeClass('opacity-0');
                $('.news-title').addClass('animate__animated animate__fadeInUp');
                $('.news-botton').removeClass('opacity-0');
                $('.news-botton').addClass('animate__animated animate__fadeInLeft');
                $('.box-news').each((i) => {
                    setTimeout(() => {
                        $('.box-news').eq(i).addClass('d-block');
                        $('.box-news').eq(i).removeClass('opacity-0');
                        $('.box-news').eq(i).addClass('animate__animated animate__slideInUp');
                    }, 200 * i + 1);
                });
            }
        });
    </script>
</div>