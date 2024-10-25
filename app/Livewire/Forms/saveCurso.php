<?php

namespace App\Livewire\Forms;

use App\Models\Curso;
use Livewire\Attributes\Validate;
use Livewire\Form;

class saveCurso extends Form
{
    #[Validate('required', message: 'Nombre del Curso es requerido!')]
    public $name_curso;

    public string $description_curso;

    #[Validate('required', message: 'Precio es requerido!')]
    public $price_curso;

    public function store()
    {
        $this->validate();
        Curso::create([
            'name_curso' => $this->name_curso,
            'description_curso' => $this->description_curso,
            'price_curso' => $this->price_curso
        ]);
    }

    public function render()
    {
        return view('livewire.forms.save-curso');
    }
}
