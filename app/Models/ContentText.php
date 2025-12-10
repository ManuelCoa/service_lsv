<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentText extends Model
{
    protected $fillable = ['id', 'preguntas', 'instrucciones', 'descripcion', 'id_leccion' ];
}
