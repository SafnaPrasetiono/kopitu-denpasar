<div>
    <div class="d-flex mb-3">
        <a href="{{ route('admin.news.create') }}" class="btn btn-outline-secondary">Tambah</a>
        <div class="ms-auto">
            <input type="text" class="form-control" placeholder="Cari Transaksi...">
        </div>
    </div>
    @if ($data->count() != 0)
    <div class="d-block table-responsive">
        <table class="table table-borderless">
            <thead class="border">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Images</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>
                        <img src="{{ url('/images/news/' . $item->images ) }}" class="rounded" width="100px">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <div class="text-nowrap">{{ date("d F Y", strtotime($item->created_at))}}</div>
                    </td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.news.edit', ['id' => $item->id_news]) }}" class="btn btn-outline-secondary btn-sm me-1">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                        </a>
                        <button wire:click="removed({{ $item->id_news }})" type="button"
                            class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex align-items-center">
        <p class="mb-0 border py-1 px-2 rounded">
            <span class="fw-bold">{{ $data->count() }}</span>
        </p>
        @if ($data->hasPages())
        <nav class="ms-auto">
            {{ $data->links('livewire.layouts.paginations') }}
        </nav>
        @endif
    </div>
    @else
        <div class="d-block rounded-3 border text-center p-5">
            <i class="fas fa-newspaper fa-4x  fa-fw"></i>
            <div>
                <p class="mb-0 fs-3">Data Berita</p>
                <p class="mb-0 fs-5">Oops, Belum terdapat data berita!!!</p>
            </div>
        </div>
    @endif


    <script>
        document.addEventListener('deleteConfrimed', function() {
            Swal.fire({
                    title: "Hapus?",
                    text: "Kamu yakin ingin menghapus berita ini?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'Tidak',
                })
                .then((next) => {
                    if (next.isConfirmed) {
                        Livewire.emit('deleteAction');
                    } else {
                        Swal.fire("Data Berita tetap aman!");
                    }
                });
        })
    </script>

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
            showConfirmButton: false,
            timer: 2500
        })
        location.reload();
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @endif
</div>