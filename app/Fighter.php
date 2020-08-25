<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    protected $fillable = ['name', 'style', 'cartel'];
}
