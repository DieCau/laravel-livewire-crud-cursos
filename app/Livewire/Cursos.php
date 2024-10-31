<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Attributes\On;
use Livewire\Component;

class Cursos extends Component
{
    public $cursos;
    public $IdCurso;
    #[On('borrado')]
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
        $this->dispatch('confirmDelete', 'Estas seguro de eliminar el curso ' . $cursoName . '?');
    }

    // Realizar el proceso de eliminado
    #[On('delete')]
    Public function deleteCurso()
    {
        $curso = Curso::find($this->IdCurso);

        $curso->delete();

        $this->reset("IdCurso");
        $this->dispatch('borrado', 'Curso eliminado correctamente!');
    }
}
