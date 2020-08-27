<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['description', 'weight', 'genre'];

    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\CategoryFighter');
    }

    public function matches()
    {
        return $this->belongsTo('App\Match');
    }
}
