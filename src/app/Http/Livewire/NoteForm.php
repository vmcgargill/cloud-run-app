<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;
use Log;

class NoteForm extends Component
{
    public $note;
    public $notes = [];
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
            'notes' => $this->notes
        ]);
    }

    public function submit()
    {
        $this->validate();
        array_push($this->notes, ['note' => $this->note]);
        $this->note = null;
    }

    public function delete($index)
    {
        unset($this->notes[$index]);
        $this->notes = array_values($this->notes);
    }
}
