<?php

use Illuminate\Http\Request;

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

Route::get('heroes/show' , 'HeroesController@show')->name('api.heroes.show');

Route::get('players/{playerId}' , 'PlayerController@show')->name('api.players.show');

Route::get('/' , function(){
    dd('espinho');
});