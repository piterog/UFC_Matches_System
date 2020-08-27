<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MatchResource extends JsonResource
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
            'id'            => $this->id,
            'red_corner'    => new FighterResource($this->firstFighter),
            'blue_corner'   => new FighterResource($this->secondFighter),
            'type_match'    => $this->type_match,
            'rank'          => $this->rank,
            'human_player'  => $this->played_with,
            'category'      => new CategoryResource($this->category)
        ];
    }
}
