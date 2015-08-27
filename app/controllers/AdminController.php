<?php

class AdminController extends \BaseController {

	public function show_admin_panel()
	{
		return View::make('admin.index');
	}
	public function login()
	{
		return View::make('admin.login');
	}
	public function doLogin()
	{
		$rules = array('username'    => 'required','password' => 'required|alphaNum|min:3');
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {return Redirect::to('login')->withErrors($validator) ->withInput(Input::except('password'));} 
		else {$userdata = array('username'=> Input::get('username'),'password'  => Input::get('password'));}
		if (Auth::attempt($userdata)) {
		return Redirect::route('adminpanel');
	} 
	else {

		
		return Redirect::to('login');}
	}


	public function doLogout()
	{
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('login'); // redirect the user to the login screen
	}
	//Functionality

	public function managegallery()
	{
		return View::make('admin.gallery');
	}
	public function showupload()
	{
		return View::make('admin.photoupload');
	}
	public function upload_photo()
	{
		ini_set('memory_limit', '-1');
		$table="gallery";
		$image = Input::file('image');
		$caption=Input::get('caption');
	     $ext = $image->getClientOriginalExtension();
	     $filename = $image->getClientOriginalName();

	     
	     Image::make($image)->save('galleryphotos/'.$filename);
	     Image::make($image)->resize(100,100)->save('galleryphotosthumbnail/'.$filename);	     
	     DB::table($table)->insert(array('photoname'=>$filename,'caption'=>$caption));
	     return Redirect::to('gallery');


	}
	public function showphotos()
	{

  
		  $array= DB::table('gallery')->get(array('photoname'));
		  $arrayData = array('data' => $array);

		  return View::make('admin.managephotos')->with($arrayData);;

	}
	public function deletephoto()
	{
	 
	  $table ='gallery';
	  $photo_name = Input::get('photo_name');
	  foreach ($photo_name as $i) {
	    # code...
	   // File::delete($path); path .
	    DB::table($table)->where('photoname',$i)->delete();
	  }
	   return Redirect::back();
	}
	public function showaddnotif()
	{
		
		return View::make('admin.showaddnotif');
	}
	public function addnotif()
	{
				$notif = Input::get('notification');
		$link= Input::get('url');
		DB::table('notifications')->insert(array('notification' => $notif, 'link' => $link));
		return Redirect::back();
	}
	public function showmanagenotif()
	{
		$a= DB::table('notifications')->get();
		return View::make('admin.managenotif')->with(array('a'=>$a));
	}
	public function managenotif()
	{
		# code...
	}
	public function managearchive()
	{
		return View::make('admin.managearchive');
	}
}