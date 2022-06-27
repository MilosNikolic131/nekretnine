<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
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
            'id' => $this->resource->id,
            'ime_i_prezime' => $this->resource->ime_i_prezime,
            'JMBG' => $this->resource->JMBG,
            'odgovoran za' => $this->resource->zaduzenZaNekretninu,
            'obilazi' => $this->resource->zakazanObilazak
        ];
    }
}
