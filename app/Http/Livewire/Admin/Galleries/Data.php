<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\galleries;
use App\Models\galleries_contents;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;

    public function render()
    {
        $data = galleries_contents::orderBy('created_at', 'desc')->paginate(24);
        foreach ($data as $items) {
            $counter = galleries::where('id_galleries_contents', $items->id_galleries_contents)->count();
            $image[$items->id_galleries_contents] = $counter;
        }
        return view('livewire.admin.galleries.data', [
            'data' => $data,
            'img' => $image
        ]);
    }
}
