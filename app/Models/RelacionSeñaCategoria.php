<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionSeñaCategoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_relacion';

    protected $fillable = [
        'id_seña',
        'id_categoria',
    ];
}

