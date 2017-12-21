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


/**
 * Core routes here
 */

Route::resource('settings', 'api\SettingsController');
Route::resource('entity', 'api\EntityController');
Route::resource('navGroup', 'api\NavGroupController');
Route::resource('section', 'api\SectionController');
Route::resource('userRole', 'api\UserRoleController');
Route::resource('user', 'api\UserController');


 /**
  * Custom routes here
  */
 Route::resource('article', 'api\ArticleController');
 Route::resource('settings', 'api\SettingsController');
 Route::resource('ticket', 'api\TicketController');
 Route::resource('ticket', 'api\TicketController');
 Route::resource('musician', 'api\MusicianController');