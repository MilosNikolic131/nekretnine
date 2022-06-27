<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NekretnineResource extends JsonResource
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
            'id' => $this->resource->id_nekretnine,
            'Adresa' => $this->resource->Adresa,
            'cena_po_kvadratu' => $this->resource->cena_po_kvadratu,
            'tip_nekretnine' => $this->resource->tipNekretnine,
            'Agent' => $this->resource->zaduzenAgent,
            'Zakazan obilazak' => $this->resource->zakazanObilazak
        ];
    }
}
