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

Route::post('login', 'Api\Auth\LoginController@login');
Route::get('client','Api\Client\ClientController@client');
Route::get('client/{id}','Api\Client\ClientController@clientById');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('refresh', 'Api\Auth\LoginController@refresh');
    Route::post('client','Api\Client\ClientController@clientSave');
    Route::put('client/{id}','Api\Client\ClientController@clientEdit');
    Route::delete('client/{id}','Api\Client\ClientController@clientDelete');
});

