<?php

use Illuminate\Http\Request;

$api_namespace = "app\\Http\\Controllers\\api";
$plugin_namespace = "app\\Plugins\\";

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
 Route::resource('article', 'api\ArticleController');
 Route::resource('settings', 'api\SettingsController');
 Route::resource('ticket', 'api\TicketController');
 Route::resource('musician', 'api\MusicianController');
 Route::resource('project', 'api\ProjectController');
