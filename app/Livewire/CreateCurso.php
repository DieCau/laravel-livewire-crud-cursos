<?php

namespace App\Livewire;

use App\Livewire\Forms\saveCurso;
use Livewire\Component;

class CreateCurso extends Component
{
    public saveCurso $curso;

    public function render()
    {
        return view('livewire.create-curso');
    }

    // Para guardar este registro en BD
    public function save()
    {
        $this->curso->store();
        $this->dispatch('savecurso');
    }
}
