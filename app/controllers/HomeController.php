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
		$getBlogs=Blogs::where('status','1')->orderBy('id','DESC')->paginate('10');
		return View::make('main')->with('page','index')->with('getBlogs',$getBlogs);;
	}
	public function about(){
			$getAbout=Aboutus::all();
			return View::make('main')->with('page','about')->with('getAbout',$getAbout);;
	}
	
	public function post($id=null){
			$getSliderImage	=	PostSlider::where('status','1')->first();
			if($id){
				$getBlogById = Blogs::find($id);
				return View::make('main')->with('page','post')
												 ->with('getSliderImage',$getSliderImage)
												 ->with('getBlogById',$getBlogById);
			}
			else{
					return View::make('main')->with('page','post')->with('getSliderImage',$getSliderImage);
				}
	}
	
	public function contact(){
			$getContectSlide =	ContectSlide::where('status','1')->first();
			return View::make('main')->with('page','contact')->with('getContectSlide',$getContectSlide);;
	}

}
