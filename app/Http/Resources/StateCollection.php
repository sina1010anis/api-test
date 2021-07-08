<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Support\Collection
     */
    public function toArray($request)
    {
        return
            $this->collection->map(function ($item){
                return [
                    'Name State' => $item->name,
                    'Data' => (string) $item->created_at
                ];
            })
        ;
    }
}
