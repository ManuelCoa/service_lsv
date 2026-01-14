<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    protected $fillable = [
        'id_usuario',
        'id_leccion',
        'puntaje',
    ];
}
