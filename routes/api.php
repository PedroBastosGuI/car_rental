<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
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




Route::get('/cars','App\Http\Controllers\CategoriesController@getList');
Route::get('/cars/{id}','App\Http\Controllers\CategoriesController@get');
Route::put('/cars/{id}','App\Http\Controllers\CategoriesController@update');
Route::post('/cars','App\Http\Controllers\CategoriesController@store');
Route::delete('/cars/{id}','App\Http\Controllers\CategoriesController@delete');

