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

Route::prefix('auth')->group(function () {
	/*
	* Users do
	*/
	Route::post('login','Api\UserController@login');
	Route::post('register','Api\UserController@register');

	Route::group(['middleware'=>'auth:api'], function () {
		Route::get('logout','Api\UserController@logout');
	});
});


// use token personal
Route::group(['middleware'=>'auth:api'], function () {
	Route::get('user','Api\UserController@user');
});

// use token anonymous
Route::group(['middleware'=>'client'], function () {
	Route::get('/asd', function () {
		return 'asd';
	});
});

