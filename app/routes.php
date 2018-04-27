<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('pages.points');
});
Route::get('/game', function () {
    return View::make('pages.game');
});


Route::get('points', 'RaspController@getRelayData');
Route::post('setpoint', 'RaspController@getAjaxRequest');
Route::get('puller', 'RaspController@puller');
Route::post('fetchData', 'RaspController@fetchData');
Route::post('switchAllOn', 'RaspController@switchallOn');
Route::post('switchAllOff', 'RaspController@switchallOff');
Route::post('pulpitOn', 'RaspController@pulpitOn');
Route::post('pulpitOff', 'RaspController@pulpitOff');
Route::get('send', 'RaspController@_sendDataToExternal');

Route::get('recive', 'RaspController@_getDataFromExternal');

//test

Route::get('array', 'RaspController@prepExternalData');


//wywołanie externala: