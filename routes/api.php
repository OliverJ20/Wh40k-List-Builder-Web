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
Route::get('/armyList', 'ArmyListController@index');
Route::get('/armyList/{id}', 'ArmyListController@show');
Route::get('/armyIndividual/{army_id}', 'ArmyIndividualController@index');
