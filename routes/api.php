<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('categories', 'Api\CategoryController@index');

Route::post('champions', 'Api\ChampionController@index');

Route::resource('events', 'Api\EventController');

Route::get('fighters', 'Api\FighterController@index');

Route::post('matches', 'Api\MatchController@index');
Route::post('matches/{id}', 'Api\MatchController@show');
Route::post('matches/event/{id}', 'Api\MatchController@matches');

Route::post('results', 'Api\ResultController@index');



