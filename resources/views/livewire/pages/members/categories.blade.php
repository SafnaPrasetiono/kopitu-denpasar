<div>
    <div class="d-block rounded border mb-3">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Jenis Usaha</p>
        </div>
        <div class="p-3">
            <div class="row g-2">
                <div class="col-12 col-md-6">
                    <label for="categories" class="form-label">Kategori</label>
                    {{-- <input type="text" name="categories" id="categories" class="form-control @error('categories') is-invalid @enderror"> --}}
                    <select wire:model='categories_id' name="categories_id" id="categories" class="form-select">
                        <option value="">Pilih Kategori Usaha</option>
                        @foreach ($categories as $item)
                        <option value="{{ $item->id_categories }}">{{ $item->categories }}</option>
                        @endforeach
                    </select>
                    @error('categories')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="categories_subs_id" class="form-label">Sub Kategori</label>
                    {{-- <input type="text" name="categories_subs_id" id="categories_subs_id" class="form-control @error('categories_subs_id') is-invalid @enderror"> --}}
                    <select wire:model='categories_subs_id' name="categories_subs_id" id="categories_subs_id" class="form-select" @if(!$categories_id) disabled @endif>
                        <option value="">Pilih Sub Kategori</option>
                        @if($categories_id)
                        @foreach ($getCategoriesSubs as $items)
                        <option value="{{$items->id_categories_subs}}">{{ $items->categories_subs }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('categories_subs_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
</div>
