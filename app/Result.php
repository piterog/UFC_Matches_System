<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['match_id', 'result_method_id', 'winner', 'loser', 'round', 'time', 'bonus'];

    public function match()
    {
        return $this->belongsTo('App\Match');
    }

    public function resultMethod()
    {
        return $this->belongsTo('App\ResultType');
    }

    public function winnerFighter()
    {
        return $this->belongsTo('App\Fighter', 'winner');
    }

    public function loserFighter()
    {
        return $this->belongsTo('App\Fighter', 'loser');
    }
}
