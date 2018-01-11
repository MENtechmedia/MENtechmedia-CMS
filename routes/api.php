<?php

use Illuminate\Http\Request;

$api_namespace = "App\\Http\\Controllers\\api\\";
$plugin_namespace = "App\\Plugins\\";

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



foreach (File::glob(base_path('routes/api/core/*.php')) as $filename) {
    if (isset($filename) && file_exists($filename)) {
        require $filename;
    }
}


 /**
  * Custom routes here
  */
 Route::resource('article', $api_namespace . 'ArticleController');
 Route::resource('settings',  $api_namespace . 'SettingsController');
 Route::resource('ticket',  $api_namespace . 'TicketController');
 Route::resource('musician',  $api_namespace . 'MusicianController');
 Route::resource('project',  $api_namespace . 'ProjectController');
