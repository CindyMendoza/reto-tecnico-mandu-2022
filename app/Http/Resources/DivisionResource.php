<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DivisionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Nombre_division'=>$this->nombre,
            'Nombre_super_division'=>$this->supdivision,
            'Cantidad_sub_division'=>$this->subdivision,
            'Numero_nivel'=>$this->nivel,
            'Numero_cantidad'=>$this->cantidad,
            'Nombre_embajador'=>$this->embajador,
        ];
    }
}
