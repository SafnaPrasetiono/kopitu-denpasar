<div>
    <div class="d-block mb-3">
        <div class="row g-2 justify-content-center align-items-stretch">
            @foreach ($data as $index => $item)
            @if ($index == 0)
            <div class="col-6 col-md-6">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 1)
            <div class="col-6 col-md-3">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 2)
            <div class="col-6 col-md-3">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 3)
            <div class="col-6 col-md-3">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 4)
            <div class="col-6 col-md-6">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 5)
            <div class="col-6 col-md-3">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 6)
            <div class="col-6 col-md-6">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 7)
            <div class="col-6 col-md-6">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 8)
            <div class="col-6 col-md-3">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 9)
            <div class="col-6 col-md-3">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @elseif ($index == 10)
            <div class="col-6 col-md-6">
                <button wire:click='modal({{$item->id_galleries}})' type="button" class="btn-img">
                    <div class="img-gallery" style="background-image: url('/images/galleries/{{$item->location }}')"></div>
                </button>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @if($data->hasPages())
    <div class="d-flex align-items-center">
        <nav class="ms-auto">
            {{ $data->links('livewire.layouts.paginations') }}
        </nav>
    </div>
    @endif

    @if($detail)
    <div class="modal" tabindex="-1" id="ImgModals">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detail Galeri</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <img src="{{ url('/images/galleries/' . $detail->location) }}" alt="{{$detail->name_galleries}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      @endif

      <script>
        		window.addEventListener('showModals', () => {
			$('#ImgModals').modal('show');
		});
		window.addEventListener('bannerModalExpand', () => {
			$('#ImgModals').modal('hide');
		});
      </script>
</div>