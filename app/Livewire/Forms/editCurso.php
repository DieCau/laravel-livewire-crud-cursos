<?php

namespace App\Livewire\Forms;

use App\Models\Curso;
use Livewire\Attributes\Validate;
use Livewire\Form;

class editCurso extends Form
{
    //
    public $IdCurso;
    #[Validate('required', message:'El Nombre es requerido')]
    public $name_curso;
    public $description_curso;
    #[Validate('required', message:'El Precio es requerido')]
    public $price_curso;

    public function updateCurso()
    {
        $curso = Curso::find($this->IdCurso)->update([

            'name_curso' => $this->name_curso,
            'description_curso' => $this->description_curso,
            'price_curso' => $this->price_curso

        ]);
    }
}
