<?php

use App\Livewire\BinCursos;
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

Route::get('/cursos/bin', BinCursos::class)->name('curso.bin');
