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

    public function update(Note $note)
    {
        $validate = $this->validate([
            "noteTitle" => ["required", "string"],
            "noteBody" => ["required", "string"],
            "noteRecipient" => ["required", "email"],
            "noteSendDate" => ["required", "date"],
        ]);
    }
    public function render(Note $note)
    {

        return view('livewire.notes.edit-note');
    }
}
