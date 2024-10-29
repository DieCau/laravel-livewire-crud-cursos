<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class EditCurso extends Component
{
    public $curso;
    public function mount(Curso $curso)
    {
        $this->curso = $curso;
    }
    public function render()
    {
        return view('livewire.edit-curso');
    }
}
