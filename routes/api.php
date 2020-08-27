<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('category', 'Api\CategoryController@index');

Route::get('champion', 'Api\ChampionController@index');

Route::get('event', 'Api\EventController@index');

Route::get('fighter', 'Api\FighterController@index');

Route::get('category', 'Api\CategoryController@index');

Route::get('match', 'Api\MatchController@index');

Route::get('result', 'Api\ResultController@index');



