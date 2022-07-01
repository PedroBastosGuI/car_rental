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




/* Route::get('/cars','App\Http\Controllers\CategoriesController@getList');
Route::get('/cars/{id}','App\Http\Controllers\CategoriesController@get');
Route::put('/cars/{id}','App\Http\Controllers\CategoriesController@update');
Route::post('/cars','App\Http\Controllers\CategoriesController@store');
Route::delete('/cars/{id}','App\Http\Controllers\CategoriesController@delete');
 */

Route::get('/cars','App\Http\Controllers\CarController@getList');
Route::get('/cars/{id}','App\Http\Controllers\CarController@get');
Route::put('/cars/{id}','App\Http\Controllers\CarController@update');
Route::post('/cars','App\Http\Controllers\CarController@store');
Route::delete('/cars/{id}','App\Http\Controllers\CarController@delete');

Route::get('/users','App\Http\Controllers\UserController@getList');
Route::get('/users/{id}','App\Http\Controllers\UserController@get');
Route::put('/users/{id}','App\Http\Controllers\UserController@update');
Route::post('/users','App\Http\Controllers\UserController@store');
Route::delete('/users/{id}','App\Http\Controllers\UserController@delete');

Route::get('/rentals','App\Http\Controllers\RentalController@getList');
Route::get('/rentals/{id}','App\Http\Controllers\RentalController@get');
Route::put('/rentals/{id}','App\Http\Controllers\RentalController@update');
Route::post('/rentals','App\Http\Controllers\RentalController@store');
Route::delete('/rentals/{id}','App\Http\Controllers\RentalController@delete');
