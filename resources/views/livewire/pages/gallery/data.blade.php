<div>
    <div class="blue-sky py-5">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                <div class="mb-3 mb-lg-0">
                    <h3 class="fw-bold text-white">GALERI</h3>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item text-light"><a href="#" class="link-light">Beranda</a></li>
                        <li class="breadcrumb-item text-light active" aria-current="page">Galeri</li>
                    </ol>
                </div>
                <div class="d-block position-relative ms-lg-auto">
                    <input wire:model="search" type="text" name="search"
                        class="form-control border border-orange rounded-0" placeholder="Cari galeri..."
                        style="padding-right: 90px;">
                    <button class="btn btn-outline-orange rounded-0 position-absolute top-0 end-0 px-4" type="button"
                        id="button-addon2">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            @foreach ($data as $index => $item)
            <div class="card mb-5">
                <div class="box-content">
                    <div class="d-none d-md-flex">
                        <p class="fw-bold fs-5 text-capitalize text-dark pt-3 px-3">{{ $item->title }}</p>
                        <div class="ms-auto" style="margin-top: -2rem;">
                            <div class="px-3 py-3 bg-secondary fs-5 text-white">
                                @if ($item->date_start == $item->date_end)
                                {{date('d F Y', strtotime($item->date_end))}}
                                @else
                                {{date('d', strtotime($item->date_start))}}
                                <span> - </span>
                                {{date('d F Y', strtotime($item->date_end))}}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="px-3 py-3 py-lg-0">
                        <p class="mb-0 text-dark-blue">
                        <p class="fw-bold fs-5 text-dark d-block d-md-none">{{ $item->title }}</p>
                        <?php echo $item->description ?>
                        </p>
                        <p class="mb-2">
                            {{ $item->locations }}, {{ $item->venue }}
                        </p>
                    </div>
                    <div class="p-3">
                        @livewire('pages.gallery.images', ['post' => $item, 'indexs' => $index + 1])
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if ($data->hasPages())
        <div class="container">
            <div class="d-block py-3">
                <nav class="d-block pt-4">
                    {{ $data->links('livewire.layouts.paginations') }}
                </nav>
            </div>
        </div>
        @endif
    </div>
</div>