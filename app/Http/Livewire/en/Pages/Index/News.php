<?php

namespace App\Http\Livewire\en\Pages\Index;

use App\Models\news as ModelsNews;
use Livewire\Component;

class News extends Component
{
    public function render()
    {
        $data = ModelsNews::orderBy('created_at', 'desc')->limit(6)->get();
        return view('livewire.en.pages.index.news', ['data'=> $data]);
    }
}
