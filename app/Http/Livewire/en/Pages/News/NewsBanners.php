<?php

namespace App\Http\Livewire\en\Pages\News;

use App\Models\news;
use Livewire\Component;

class NewsBanners extends Component
{
    public function render()
    {
        $data = news::orderBy('created_at', 'desc')->limit(6)->get();
        $dataSecondary = news::orderBy('created_at', 'asc')->limit(2)->get();
        return view('livewire.en.pages.news.news-banners', [
            'data'=>$data,
            'dataSecondary'=>$dataSecondary
        ]);
    }
}
