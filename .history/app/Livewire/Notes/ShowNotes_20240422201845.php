<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{

    public function allnotes()
    {
        return [
            'notes' => Note::orderBy('id', 'desc')->get(),
        ];
    }

    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
