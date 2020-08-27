<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResultResource;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return ResultResource::collection(Result::all());
    }
}
