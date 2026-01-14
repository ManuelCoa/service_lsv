<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContentTextResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /*
        return parent::toArray($request);
        */
        return [
            'id' => $this->id,
            'preguntas' => $this->preguntas,
            'instucciones' => $this->instrucciones,
            'descriccion' => $this->descriccion,
            'id_leccion' => $this->id_leccion,
        ];
    }
}
