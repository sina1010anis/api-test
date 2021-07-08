<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Menu extends JsonResource
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
            'Name Item' => $this->name,
            'Active Item' => $this->when($this->active , 'OK' , 'NO'),
            'Article Item' =>new ArticleCollection($this->articel),
        ];
    }
}
