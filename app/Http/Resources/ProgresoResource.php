<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgresoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'id_usuario' => $this->id_usuario,
            'id_leccion' => $this->id_leccion,
            'puntaje' => $this->puntaje,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
        //return parent::toArray($request);
    }
}
