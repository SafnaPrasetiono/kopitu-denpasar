<?php

namespace App\Http\Livewire\en\Pages\Gallery;

use App\Models\galleries;
use App\Models\galleries_contents;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        if($this->search){
            $data = galleries_contents::where('publish', 1)->orderBy('created_at', 'desc')->where('title', $this->search)->paginate(12);
        }else {
            $data = galleries_contents::where('publish', 1)->orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.en.pages.gallery.data', ['data' => $data]);
    }
}
