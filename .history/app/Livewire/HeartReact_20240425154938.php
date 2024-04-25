<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class HeartReact extends Component
{
    public Note $note;
    public int $heartCount; // Assuming heart count is an integer

    public function mount(Note $note)
    {
        $this->note = $note;
        $this->heartCount = $note->heart_count; // Corrected variable name
    }

    public function increaseHeartCount()
    {
        // Assuming $this->heratCount was intended to be a fixed value to add to heart count
        $this->note->heart_count++;
        $this->note->save();
        $this->heartCount = $this->note->heart_count;
    }

    public function render()
    {
        // Passing entire object to the view
        return view('livewire.heart-react', ['note' => $this->note]);
    }
}
