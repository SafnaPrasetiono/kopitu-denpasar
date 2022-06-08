<div>
    @if ($data->count() != 0)    
    @foreach ($data as $item)
    <div class="card border-0 mb-4">
        <div class="row align-items-start g-0">
            <div class="col-12 col-sm-4 col-lg-4">
                <div class="btn-images-news ratio ratio-16x9" style="background-image: url('/images/news/{{$item->images}}')">
                </div>
            </div>
            <div class="col-12 col-sm-8 col-lg-8">
                <div class="card-body px-0 px-sm-2 px-md-3 py-sm-0 py-md-0">
                    <a href="{{ route('news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}"
                        class="fs-5 link-primary text-decoration-none text-ellipsis-2 mb-0">{{ $item->title }}</a>
                    <p class="card-text mb-2 mb-sm-1"><small class="text-muted">berita, {{ date('d F Y', strtotime($item->created_at)) }}</small></p>
                    <p class="card-text text-ellipsis-4">{{ $item->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <nav class="d-block pt-4 mb-4">
        @if ($data->hasPages())
        <nav class="d-block pt-4">
            {{ $data->links('livewire.layouts.paginations') }}
        </nav>
        @endif
    </nav>
    @else
    <div class="card border-0 mb-4">
        <div class="row g-0">
            <div class="col-12">
                <div class="d-block rounded bg-white shadow p-3">
                    <div class="text-center p-3">
                        <i class="fas fa-list fa-2x fa-fw mb-4"></i>
                        <p class="mb-2 fs-5 text-secondary">Oops, Berita tidak dapat ditemukan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>