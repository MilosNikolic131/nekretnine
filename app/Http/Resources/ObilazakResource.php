<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ObilazakResource extends JsonResource
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
            'Sifra agenta' => $this->resource->agentObilazi,
            'Sifra nekretnine' => $this->resource->nekretninuObilazi,
            'Datum i vreme' => $this->resource->datum_i_vreme_obilaska
        ];
    }
}
