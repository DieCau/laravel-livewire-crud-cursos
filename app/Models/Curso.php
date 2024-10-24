<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    protected $primaryKey = 'id_curso';
    protected $fillable = ['name_curso', 'description_curso', 'price_curso'];
    use HasFactory, SoftDeletes;
}
