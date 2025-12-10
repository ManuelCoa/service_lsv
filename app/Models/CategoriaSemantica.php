<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaSemantica extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_categoria';

    public function señas()
    {
        return $this->hasMany(Seña::class, 'id_categoria_semanticas');
    }

    public function relacionadas()
    {
        return $this->belongsToMany(Seña::class, 'relacion_seña_categorias', 'id_categoria', 'id_seña');
    }
}


