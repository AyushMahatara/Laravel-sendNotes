<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class CreateNote extends Component
{

    public $notes;

    public function render()
    {
        return view('livewire.notes.create-note');
    }
}
