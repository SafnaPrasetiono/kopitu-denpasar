<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\members as ModelsMembers;
use Livewire\Component;

class Members extends Component
{
    public function render()
    {
        return view('livewire.pages.index.members');
    }
}
