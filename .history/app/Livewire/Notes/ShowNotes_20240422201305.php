<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class ShowNotes extends Component
{

    public function allnotes(){
        return [
            'notes' => Auth::user()
            ->notes()->orderBy('id','desc')->paginate(10);
        ]
    }

    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
