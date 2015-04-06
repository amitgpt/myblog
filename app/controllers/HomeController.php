<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){
		return View::make('main')->with('page','index');
	}
	public function about(){
			return View::make('main')->with('page','about');
	}
	
	public function post(){
			return View::make('main')->with('page','post');
	}
	
	public function contact(){
			return View::make('main')->with('page','contact');
	}

}
