<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
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
            'match_id'          => new MatchResource($this->match),
            'result_method'     => $this->resultMethod->description,
            'winner'            => new FighterResource($this->winnerFighter),
            'loser'             => new FighterResource($this->loserFighter),
            'round'             => 'R'.$this->round,
            'time'              => (new Carbon($this->time))->format('H:i'),
        ];
    }
}
