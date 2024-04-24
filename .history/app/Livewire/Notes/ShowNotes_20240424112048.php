<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{

    public function delete($noteId)
    {
        $note = Note::find($noteId);
        $note->delete();
    }

    public function render()
    {
        $notes = Auth::user()
            ->notes()->orderBy("created_at", "desc")->get();
        // $notes = Note::orderBy('id', 'desc')->get();
        // $users = User::orderBy('id', 'desc')->get();

        return view('livewire.notes.show-notes', compact('notes'));
    }
}
