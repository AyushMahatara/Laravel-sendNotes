<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class HeartReact extends Component
{
    public Note $note;
    public $heratCount;
    public function mount(Note $note)
    {
        $this->note = $note;
        $this->heratCount = $note->herat_count;
    }

    public function increaseHeartCount()
    {
        $this->note->heart_count += $this->heratCount;
        $this->note->save();
    }

    public function render()
    {
        $heratCount = $this->note->heart_count;
        return view('livewire.heart-react', compact('heartCount'));
    }
}
