<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['description', 'weight', 'genre'];

    public function matches()
    {
        return $this->belongsTo('App\Match');
    }
}
