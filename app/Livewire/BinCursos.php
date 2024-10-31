<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;

class BinCursos extends Component
{
    public $cursos_bin;

    public function mount()
    {
        $this->showCursosBin();
    }
    private function showCursosBin()
    {
        $this->cursos_bin = Curso::onlyTrashed()->get();
    }
    public function render()
    {
        return view('livewire.bin-cursos');
    }
}
