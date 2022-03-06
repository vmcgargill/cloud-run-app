<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;
use Log;

class NoteForm extends Component
{
    public $note;
    public $listeners = [
        'submit' => '$refresh',
        'delete' => '$refresh'
    ];

    protected $rules = [
        'note' => 'required'
    ];

    public function render()
    {
        return view('livewire.note-form', [
            'notes' => Note::all()
        ]);
    }

    public function submit()
    {
        $this->validate();
        Note::create(['note' => $this->note]);
    }

    public function delete($id)
    {
        Note::find($id)->delete();
    }
}
