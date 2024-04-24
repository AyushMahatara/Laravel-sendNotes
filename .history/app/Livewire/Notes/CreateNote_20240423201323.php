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
        dd($this->noteTitle)
    }

    public function render()
    {
        return view('livewire.notes.create-note');
    }
}
