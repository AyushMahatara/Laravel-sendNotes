<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class EditNote extends Component
{
    public function mount(Note $note)
    {
        $this->authorize("update", $note);
    }
    public function render(Note $note)
    {
        dd($note);

        return view('livewire.notes.edit-note');
    }
}
