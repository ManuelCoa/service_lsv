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
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'url_img' => $this->url_img,
            'categoria' => new CategoriaSemanticaResource($this->categoriaSemantica),
            'categorias_relacionadas' => CategoriaSemanticaResource::collection($this->categorias),
        ];
    }
}

