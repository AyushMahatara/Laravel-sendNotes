<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class ShowNotes extends Component
{

    public function allnotices(){
        return 'not'
    }

    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
