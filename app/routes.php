<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@index');
Route::get('about','HomeController@about');
Route::get('post/{id?}','HomeController@post');
Route::get('contact','HomeController@contact');
Route::post('/contact/message','HomeController@messageSave');

Route::get('admin','AuthController@loginView');
Route::get('login','AuthController@loginView');

/* Auth */
Route::group(array('prefix' => 'auth'),function(){
	Route::post('login','AuthController@login');
});

/* Admin Dashboard View*/
Route::group(array('prefix' => 'admin','before'=>'auth'),function(){
	
		Route::get('dashboard','AdminController@adminDashboardView');
		Route::get('about','AdminController@aboutView');
		Route::post('updateabout','AdminController@updateabout');
		Route::get('contact','AdminController@contactView');
		Route::post('contact/addupdate','AdminController@addUpdateContact');
		Route::get('contact/message','AdminController@messageView');
		Route::get('samplepost','AdminController@samplePostView');
	});


/* Logout */
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('/');
	
	});
