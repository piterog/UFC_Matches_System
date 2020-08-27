<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['fighter_1', 'fighter_2', 'type_match', 'rank', 'played_with', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function firstFighter()
    {
        return $this->belongsTo('App\Fighter', 'fighter_1');
    }

    public function secondFighter()
    {
        return $this->belongsTo('App\Fighter', 'fighter_2');
    }

}
