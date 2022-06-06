<div>
    <div class="d-block rounded border mb-3">
        <div class="py-2 px-3 border-bottom">
            <p class="mb-0 fw-bold">Dekripsi Usaha</p>
        </div>
        <div class="p-3">
            {{-- <label for="description" class="form-label">Dekripsi</label> --}}
            <textarea name="description" id="description" rows="4"
                class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>