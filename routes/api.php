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


Route::get('userPLW', function() {
    return \App\User::all();
});

Route::get('userPLW/{id}', function($id) {
    return \App\User::find($id);
});

Route::get('stockForUser/{id}', function($id) {
    return \App\User::find($id);
});

Route::put('User1/{id}', function (Request $request) {
    echo "reqeuest is $request";
});

Route::put('User/{id}', 'API\UsersController@update');
Route::apiResource('OfficialAPI', 'API\UsersController');

