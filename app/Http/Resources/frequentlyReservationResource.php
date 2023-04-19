<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class frequentlyReservationResource extends JsonResource
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
            'id' => $this->id,
            'email' => $this->user->email,
            'route' => $this->route->pickup_station." - ".$this->route->destination_station,
        ];
    }
}
