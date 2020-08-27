<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['match_id', 'result_method_id', 'winner', 'loser', 'round', 'time', 'played_with'];
}
