<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{

    public $notes;
    public $user;
    public function allnotes()
    {
        $notes[] = Note::orderBy('id', 'desc')->get();
        $uesr[] = User::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
