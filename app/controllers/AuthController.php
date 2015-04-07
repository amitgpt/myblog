<?php

class AuthController extends BaseController {

	/* login view */
	public function loginView()
	{
		if(Auth::check()){
			return Redirect::to('/admin/dashboard');
			}
		return View::make('login');
					
	}
		
	/*users login*/	
	public function login()
	{	
		$rules = array(
				'email' 		=> 'required|email',
				'password' 		=> 'required|min:6');
		$v = Validator::make( Input::all(), $rules );
		if( $v->fails()){
				return Redirect::back()
						->withErrors( $v )
						->withInput();
		}
		else{
			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
				
				return Redirect::intended('/admin/dashboard');
				}
			else{
				$notification[]=array(
				  'message'  =>('Opps, User name or Password is wrong !'),
				  'type'   =>'error',
				  'timeout'  =>'10'
				);
				Session::flash('notification',$notification);
				return Redirect::back()->withInput();
			   }
			
		}				
	}
	
	
}
