<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class CreateNote extends Component
{

    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        $validate = $this->validate([
            "noteTitle" => ["required", "string"],
            "noteBody" => ["required", "string"],
            "noteRecipient" => ["required", "email"],
            "noteSendDate" => ["required", "date"],
        ]);

        auth()->user()->notes()->create(
            'title' => $this->noteTitle,
            'body' => $this->noteBody,
            'recipient' => $this->noteRecipient,
        );
    }

    public function render()
    {
        return view('livewire.notes.create-note');
    }
}
