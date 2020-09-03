<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'subtitle', 'number_fights', 'order'];

    public function matches()
    {
        return $this->hasMany('App\Match');
    }
}
