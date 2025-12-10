<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leccione extends Model
{
    protected $fillable = ['titulo', 'id_nivel', 'contenido'];

    protected $casts=['contenido'=>'array'];
    public function nivel()
    {
        return $this->belongsTo(Nivele::class, 'id_nivel');
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'progreso', 'id_leccion', 'id_usuario')->withPivot('estado', 'puntaje', 'fecha_completitud', 'intentos');
    }
}
