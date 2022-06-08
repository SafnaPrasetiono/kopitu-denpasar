<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\members;
use Livewire\Component;

class CountMembers extends Component
{
    public $all, $active, $pasive;
    public function render()
    {
        $this->all = members::count();
        $this->active = members::where('validate', 1)->count();
        $this->pasive = members::where('validate', 0)->count();
        return view('livewire.pages.index.count-members');
    }
}
