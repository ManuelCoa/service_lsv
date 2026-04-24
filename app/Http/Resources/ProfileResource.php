<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'cedula' => $this->cedula,
            'name' => $this->name,
            'apellido' => $this->apellido,
            'email' => $this->email,
        ];
    }
}
