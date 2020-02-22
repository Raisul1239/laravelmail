<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Ai_applcationsController;
use App\Http\Controllers\NaturalhazardController;


Route::get('/about', 'TeamController@show');

Route::get('/products', 'ProductsController@show');
Route::get('/project', 'ProjectController@show');
Route::get('/research', 'ResearchController@show');
Route::get('/contact', 'ContactController@show');
Route::post('/sendemail/send', 'ContactController@send')->name('sendemail.send');


Route::prefix('/services')->group(function () {

    Route::get('/ai_applications', 'Ai_applcationsController@show');
    Route::get('/engine_services', 'EngineServicesController@show');
    Route::get('/enviro_services', 'EnviroservicesController@show');
    Route::get('/management', 'ManagementController@show');
    Route::get('/Natural_hazard', 'NaturalhazardController@show');
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/about', function () {
//     return view('about');
// });