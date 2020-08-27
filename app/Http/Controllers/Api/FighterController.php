<?php

namespace App\Http\Controllers\Api;

use App\Fighter;
use App\Http\Controllers\Controller;
use App\Http\Resources\FighterResource;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FighterResource::collection(Fighter::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fighter  $fighter
     * @return \Illuminate\Http\Response
     */
    public function show(Fighter $fighter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fighter  $fighter
     * @return \Illuminate\Http\Response
     */
    public function edit(Fighter $fighter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fighter  $fighter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fighter $fighter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fighter  $fighter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fighter $fighter)
    {
        //
    }
}
