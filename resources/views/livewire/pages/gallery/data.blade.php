<div>
    <div class="d-block mb-3">
        <div class="row g-2 justify-content-center align-items-stretch">
            @foreach ($data as $index => $item)
            @if ($index == 0)
            <div class="col-6 col-md-6">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 1)
            <div class="col-6 col-md-3">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 2)
            <div class="col-6 col-md-3">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 3)
            <div class="col-6 col-md-3">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 4)
            <div class="col-6 col-md-6">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 5)
            <div class="col-6 col-md-3">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 6)
            <div class="col-6 col-md-6">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 7)
            <div class="col-6 col-md-6">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 8)
            <div class="col-6 col-md-3">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 9)
            <div class="col-6 col-md-3">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @elseif ($index == 10)
            <div class="col-6 col-md-6">
                <div class="img-height">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="d-flex align-items-center">
        <p class="mb-0 border py-1 px-2 rounded">
            <span class="fw-bold">{{ $data->count() }}</span>
        </p>
        
        <nav class="ms-auto">
            {{ $data->links('livewire.layouts.paginations') }}
        </nav>
        
    </div>
</div>