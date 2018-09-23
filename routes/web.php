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

Route::get('/', function () {
    return view('welcome');
});
// 'middleware' 	=> 'auth',
Route::group(['prefix' 	=> 'backoffice','namespace' => 'Backoffice'], function() {
	
	Route::resource('application','ApplicationController',['only'=>['index','edit','update']]);

	Route::resource('role','RoleController',['except'=>'show']);

	Route::resource('menu','MenuController',['except'=>'show']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
