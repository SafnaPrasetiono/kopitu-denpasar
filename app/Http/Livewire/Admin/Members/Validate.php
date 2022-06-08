<?php

namespace App\Http\Livewire\Admin\Members;

use Livewire\Component;

class Validate extends Component
{
    public $id_members;
    public function mount($post)
    {
        $this->id_members = $post;
    }
    public function render()
    {
        return view('livewire.admin.members.validate');
    }
}
