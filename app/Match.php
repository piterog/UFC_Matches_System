<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['fighter_1', 'fighter_2', 'type_match', 'rank', 'weight'];
}
