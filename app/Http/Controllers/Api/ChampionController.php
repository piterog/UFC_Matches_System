<?php

namespace App\Http\Controllers\Api;

use App\Champion;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChampionResource;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    public function index()
    {
        return ChampionResource::collection(Champion::all());
    }
}
