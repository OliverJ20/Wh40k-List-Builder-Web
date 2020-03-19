<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class armyIndividual extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'army_id'               => $this->army_id,
            'army_name'             => $this->army_name,
            'army_hq_units'         => $this->army_hq_units,
            'army_troops_units'     => $this->army_troops_units,
            'army_elites_units'     => $this->army_elites_units,
            'army_fast_units'       => $this->army_fast_units,
            'army_heavy_units'      => $this->army_heavy_units,
            'army_flyer_units'      => $this->army_flyer_units,
            'army_transport_units'  => $this->army_transport_units,
        ];
    }
}
