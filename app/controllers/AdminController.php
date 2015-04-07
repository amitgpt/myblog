<?php

class AdminController extends BaseController {

	/* Dashboard view */		
	public function adminDashboardView(){
		
			$getLogoSlidet	=	Sliders::all();
			return View::make('dashboardmain')->with('page','admindashboard')->with('getLogoSlidet',$getLogoSlidet);					
	}
	/*About view*/
	public function aboutView(){
		$getAbout=Aboutus::all();
		return View::make('dashboardmain')->with('page','about')->with('getAbout',$getAbout);
	}
	
	/*About update*/
	public function updateabout(){
				
		$id=Input::get('aboutid');
		$title=Input::get('title');
		$tagline=Input::get('tagline');
		$image=Input::file('aboutimage');
		
		$rules = array(
				'aboutid' 		=> 'required',
				'title' 		=> 'required',
				'tagline' 		=> 'required');
				
		$v = Validator::make( Input::all(), $rules );
		if( $v->fails()){
				return Redirect::back()
						->withErrors( $v )
						->withInput();
		}
		if($id){
			$table=Aboutus::find($id);
			if($table){
				if(Input::hasFile('aboutimage')){
					$file            = $image;
					$destinationPath = public_path().'/assets/fileupload/about';
					$filename        = str_random(6) . '_' . $file->getClientOriginalName();
					$uploadSuccess   = $file->move($destinationPath, $filename);
					$table->about_image		=	$filename;
				}
				$table->title		=	$title;
				$table->tag_line	=	$tagline;
				$table->save();
				if($table){
					$notification[]=array('message'=> Lang::get('notifications.update_about'),'type'=>'success','timeout'=>'10');
					Session::flash('notification',$notification);
					return Redirect::back();
				}
				else
				{
					$notification[]=array('message'=> Lang::get('notifications.update_fail'),'type'=>'error','timeout'=>'10');
					Session::flash('notification',$notification);
					return Redirect::back();
				}
				
			}
			else{
				echo 'not found';
			}
		}
		
	}
	
	/*Admin contact view*/
	public function contactView(){
			$getContactSlider=ContectSlide::all();
			return View::make('dashboardmain')->with('page','contact')->with('getContactSlider',$getContactSlider);
		
	}
	
	/* Add and Update Contact  */
	
	public function addUpdateContact(){
		
		
		
		$id=Input::get('contactsliderId');
		if($id){
			$rules = array(
				'contactsliderheading' 		=> 'required',
				'contactslidersubheading' 	=> 'required',
				'contactdescription'		=> 'required',	
				);
		}
		else{
			$rules = array(
				'contactsliderimage'		=> 'required|mimes:jpeg,jpg,png,JPG,gif',
				'contactsliderheading' 		=> 'required',
				'contactslidersubheading'	=> 'required',
				'contactdescription'		=> 'required',
								
				);
		}
		$v = Validator::make( Input::all(), $rules );
			if( $v->fails()){
					return Redirect::back()
						->withErrors( $v )
						->withInput();
			}
			
		$updateOrCreate = ContectSlide::firstOrNew(array('id'=>$id));
		if(Input::hasFile('contactsliderimage')){
				$file            = Input::file('contactsliderimage');
				$destinationPath = public_path().'/assets/fileupload/contact';
				$filename        = str_random(6) . '_' . $file->getClientOriginalName();
				$uploadSuccess   = $file->move($destinationPath, $filename);
				$updateOrCreate->contact_image		=	$filename;
			}
		$updateOrCreate->title		   	=	Input::get('contactsliderheading');
		$updateOrCreate->tag_line		=	Input::get('contactsliderheading');
		$updateOrCreate->description	=	Input::get('contactsliderheading');
		if(Input::get('status')!='')
		{
			$update=ContectSlide::where('status','1')->update(array('status'=>'0'));
			$updateOrCreate->status	=	'1';
		}
		
		 if($updateOrCreate->save()){
			 Session::flash('conformetion', 'Successfully add or update your data.');
				return Redirect::back();
			
		}else{
			 Session::flash('fail', 'Add and Update fail!');
				return Redirect::back();
			
		}
		
	}
	
	
	
	/*Admin message view*/
	public function messageView(){
		$getMessage = ContactMessage::all();
		return View::make('dashboardmain')->with('page','message')->with('getMessage',$getMessage);
	}
		
	/*Admin sample post View */
	public function samplePostView(){
		$getSamplePost = Blogs::orderBy('id','DESC')->get();
		return View::make('dashboardmain')->with('page','samplepost')->with('getSamplePost',$getSamplePost);
		
	}
	
	
	
}
