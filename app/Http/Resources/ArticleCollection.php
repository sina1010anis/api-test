<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            $this->collection->map(function ($item){
                return [
                    'Name Article' => $item->name,
                    'Data' => (string) $item->created_at
                ];
            })
        ];
    }
}
