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

/*
 * Use next routes as free microservices
 */

Route::get('publications',                 'Api\PublicationsController@index');
Route::get('publications/{id}',                 'Api\PublicationsController@find');

Route::post('publications',                'Api\PublicationsController@post');