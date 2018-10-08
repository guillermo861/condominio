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

Route::get('formats',                      'Api\FormatsController@index');
Route::get('grades',                       'Api\GradesController@index');
Route::get('languages',                    'Api\LanguagesController@index');
Route::get('publications',                 'Api\PublicationsController@index');
Route::get('publicationsToStatesGrades',   'Api\PublicationsToStateGradeControllers@index');
Route::get('states',                       'Api\StatesController@index');
Route::get('subjects',                     'Api\SubjectsController@index');
Route::get('scool_years',                  'Api\ScoolYearsController@index');

Route::post('publications',                'Api\PublicationsController@post');