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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile','ProfileController@store');
Route::get('/profile','ProfileController@index');
Route::get('/createposts','PostController@create');
Route::post('/posts1','PostController@store');
Route::get('/posts','PostController@index');
Route::get('/viewpost/{id}','PostController@show');
Route::post('/comments','CommentController@store');