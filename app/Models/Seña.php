<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seña extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_seña';
    protected $fillable = [
        'id_leccion',
        'nombre',
        'descripcion',
        'url_img',
    ];

    public function categoriaSemantica()
    {
        return $this->belongsTo(CategoriaSemantica::class, 'id_categoria_semanticas');
    }

    public function categorias()
    {
        return $this->belongsToMany(CategoriaSemantica::class, 'relacion_seña_categorias', 'id_seña', 'id_categoria');
    }
}
