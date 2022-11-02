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
Route::get('/slider' , function () {
    return "this is for test text";
});
Route::get('/slider/create' , function (){
    return "<h1>this is create page</h1>";
});
Route::get('/post/{id?}/{user?}' , function($id = null,$user = null){
    return "this is test for post page.$id and $user";
});
Route::redirect('/slider/redirect', '/slider', 302);
