<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bank extends JsonResource
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
            'Bank' => $this->name,
            'Code Point' => $this->code_point,
            'Number Code' => new CardCollection($this->cards)
        ];
    }
}
