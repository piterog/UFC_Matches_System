<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryFighter extends Pivot
{
    protected $fillable = ['category_id', 'fighter_id'];
}
