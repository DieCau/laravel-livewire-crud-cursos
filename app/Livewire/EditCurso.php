<?php

namespace App\Livewire;

use App\Livewire\Forms\editCurso as FormsEditCurso;
use App\Models\Curso;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class EditCurso extends Component
{
    public $curso;
    public FormsEditCurso $cursoedit;
    public function mount(Curso $curso)
    {
        $this->curso = $curso;
        $this->cursoedit->IdCurso = $this->curso->id_curso;
        $this->cursoedit->name_curso = $this->curso->name_curso;
        $this->cursoedit->description_curso = $this->curso->description_curso;
        $this->cursoedit->price_curso = $this->curso->price_curso;
    }
    public function render()
    {
        return view('livewire.edit-curso');
    }

    public function updateDataCurso()
    {
        $this->validate();
        $this->cursoedit->updateCurso();
        $this->reset();
        Session::flash('success', 'Curso actualizado correctamente!');
        $this->redirect('/cursos', true);
    }
}
