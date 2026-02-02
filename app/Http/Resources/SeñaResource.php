<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeñaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id_seña,
            'id_leccion' => $this->id_leccion,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'url_img' => $this->url_img,
            'categorias_relacionadas' => CategoriaSemanticaResource::collection($this->categorias),
        ];
    }
}

