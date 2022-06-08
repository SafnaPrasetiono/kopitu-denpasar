<?php

namespace App\Http\Livewire\Pages\News;

use App\Models\news;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $src;

    public function mount($post)
    {
        $this->src = $post;
    }
    public function render()
    {
        $data = news::where('title', 'like', '%' . $this->src .'%')->orderBy('created_at', 'desc')->paginate(2);
        // dd($data);
        return view('livewire.pages.news.search', ['data' => $data]);
    }
}
