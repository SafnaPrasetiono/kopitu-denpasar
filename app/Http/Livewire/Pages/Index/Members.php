<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\members as ModelsMembers;
use Livewire\Component;

class Members extends Component
{
    public $all, $active, $pasive;
    public function render()
    {
        $this->all = ModelsMembers::count();
        $this->active = ModelsMembers::where('validate', 1)->count();
        $this->pasive = ModelsMembers::where('validate', 0)->count();
        return view('livewire.pages.index.members');
    }
}
