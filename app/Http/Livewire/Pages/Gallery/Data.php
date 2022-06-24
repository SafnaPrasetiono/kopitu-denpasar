<?php

namespace App\Http\Livewire\Pages\Gallery;

use App\Models\galleries;
use App\Models\galleries_contents;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $detail;

    public function modal($id)
    {
        $this->detail = galleries::find($id);
        $this->dispatchBrowserEvent('showModals');
    }
    public function render()
    {
        $data = galleries::orderBy('created_at')->paginate(11);
        return view('livewire.pages.gallery.data', ['data' => $data]);
    }
}
