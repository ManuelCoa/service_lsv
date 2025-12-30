<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leccione extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'titulo', 
        'id_nivel'
    ];

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
