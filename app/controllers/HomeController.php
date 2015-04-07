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
	
	/*Message Save*/
	public function messageSave(){
			
		$rules = array(
			'name' 		=> 'required|min:5',
			'email' 	=> 'required|email',
			'phone' 	=> 'required|numeric',
			'message' 	=> 'required',
			);
				
		$v = Validator::make( Input::all(), $rules );
		if( $v->fails()){
				return Redirect::back()
						->withErrors( $v )
						->withInput();
		}
		
		$table = new ContactMessage();
		
		$table->name 			=	Input::get('name');
		$table->email 			=	Input::get('email');
		$table->phone_number		=	Input::get('phone');
		$table->message 		=	Input::get('message');
		if($table->save()){
			 Session::flash('conformetion', 'Successfully send your message.');
			return Redirect::back();
		}
		
	
	}

}
