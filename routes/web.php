<?php

use App\Livewire\CreateCurso;
use App\Livewire\Cursos;
use App\Livewire\EditCurso;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', Cursos::class)->name('cursos');

Route::get('/curso/create', CreateCurso::class)->name('curso.create');

Route::get('/curso/{curso}/edit', EditCurso::class)->name('curso.edit');
