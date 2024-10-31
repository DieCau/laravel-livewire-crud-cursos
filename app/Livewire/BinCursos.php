<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Attributes\On;
use Livewire\Component;

class BinCursos extends Component
{
    public $cursos_bin;

    public $CursoId;

    public function mount()
    {
        $this->showCursosBin();
    }
    private function showCursosBin()
    {
        $this->cursos_bin = Curso::onlyTrashed()->get();
    }

    // Metodo para confirmar antes del borrado
    public function confirmDel($id, $cursoName)
    {
        $this->CursoId = $id;
        $this->dispatch('confirm-Delete','Estas seguro de eliminar el curso ' . $cursoName . '?');
    }

    // Metodo de eliminar el curso de la BD
    #[On('ok-delete')]
    public function delete()
    {
        $curso = Curso::onlyTrashed()->find($this->CursoId);

        $curso->forceDelete();

        $this->reset("CursoId");

        $this->dispatch('success-delete', 'Curso eliminado correctamente!');

        $this->showCursosBin();
    }

    public function render()
    {
        return view('livewire.bin-cursos');
    }
}
