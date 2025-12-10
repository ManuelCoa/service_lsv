<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivele extends Model
{
    use HasFactory;
     protected $fillable = ['nombre'];

    public function lecciones()
    {
        return $this->hasMany(Leccione::class, 'id_nivel');
    }
}
