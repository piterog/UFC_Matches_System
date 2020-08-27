<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable = ['fighter_id', 'match_id', 'category_id'];
}
