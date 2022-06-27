<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipNekretnineResource extends JsonResource
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
            'id' => $this->resource->tip_id,
            'Naziv' => $this->resource->naziv,
            'Kvadratura' => $this->resource->kvadratura,
            'Oprema' => $this->resource->oprema,
            'Nekretnine sa ovim tipom' => $this->resource->jeNekretnina
        ];
    }
}
