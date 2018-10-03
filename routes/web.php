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

// Route::get('/blank', function () {
//     return view('blank');
// });


// 'middleware' 	=> 'auth',
Route::group(['middleware' 	=> 'auth','prefix' => 'backoffice','namespace' => 'Backoffice'], function() {
	
	Route::get('blank', function() {
		return view('blank');
	});

	Route::resource('application','ApplicationController',['only'=>['index','edit','update']]);

	Route::resource('roles','RoleController',['except'=>'show']);

	Route::resource('menus','MenuController',['except'=>'show']);

	Route::resource('privileges','PrivilegeController',['only'=>['index','update']]);

	Route::resource('users','UserController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
