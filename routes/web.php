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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/', 'FrontendController');

Route::resource('/blog', 'BlogController');
Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as' => 'category']);

Route::resource('/team', 'TeamController');
Route::resource('/player', 'PlayerController');
Route::resource('/fixture', 'FixturesController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
