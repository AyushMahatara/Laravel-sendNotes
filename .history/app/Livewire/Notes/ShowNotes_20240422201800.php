<?php

namespace App\Livewire\Notes;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{

    public function allnotes()
    {
        return [
            'notes' => Auth::user()->notes(Auth::user()->id),
        ];
    }

    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
