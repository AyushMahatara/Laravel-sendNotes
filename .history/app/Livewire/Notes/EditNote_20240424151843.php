<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class EditNote extends Component
{
    public function a(Note $note)
    {
        $this->authorize("update", $note);
    }
    public function render()
    {
        return view('livewire.notes.edit-note');
    }
}
