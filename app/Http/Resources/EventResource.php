<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'id'                => $this->id,
            'title'             => $this->title,
            'subtitle'          => $this->subtitle,
            'number_fights'     => $this->number_fights,
            'order'             => $this->order,
            'confirmed_fights'  => $this->matches->count()
        ];
    }
}
