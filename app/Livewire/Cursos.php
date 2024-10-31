<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class Cursos extends Component
{
    public $cursos;
    public $IdCurso;
    public function mount()
    {
        $this->showCurso();
    }

    public function showCurso()
    {
        $this->cursos = Curso::all();
    }

    public function render()
    {
        return view('livewire.cursos');
    }

    // Metodo para confirmar eliminado
    public function confirmDelete($id, $cursoName)
    {
        $this->IdCurso = $id;
        $this->emit('confirmDelete', 'Seguro de eliminar el curso ' . $cursoName . '?');
    }
}
