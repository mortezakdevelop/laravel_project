<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/slider/{username}/{password}', 'App\Http\Controllers\SliderController@slider')-> name("slider-page");
Route::get('/test','App\Http\Controllers\SliderController@test')-> name('test-page');
Route::get('/page/{name?}/{age?}', 'App\Http\Controllers\SliderController@page') -> name('page') -> where(['name' => '[a-zA-Z0-9]+','age' => '[0-9]+']);

