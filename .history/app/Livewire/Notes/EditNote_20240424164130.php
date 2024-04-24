<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class EditNote extends Component
{
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;
    public $noteIsPublished;
    public function mount(Note $note)
    {
        $this->authorize("update", $note);
        // $this->fill($note);
        $this->noteTitle = $note->title;
        $this->noteBody = $note->body;
        $this->noteRecipient = $note->recipient;
        $this->noteSendDate = $note->send_date;
        $this->noteIsPublished = $note->is_published;
    }

    public function update(Note $note)
    {
        $validate = $this->validate([
            "noteTitle" => ["required", "string"],
            "noteBody" => ["required", "string"],
            "noteRecipient" => ["required", "email"],
            "noteSendDate" => ["required", "date"],
        ]);

        $this->note->update([
            "title" => $this->noteTitle,
            "body" => $this->noteBody,
            "recipient" => $this->noteRecipient,
            "send_date" => $this->noteSendDate,
            "is_published" => $this->noteIsPublished
        ]);
    }
    public function render(Note $note)
    {

        return view('livewire.notes.edit-note');
    }
}
