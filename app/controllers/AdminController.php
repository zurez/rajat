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
		
		return View::make('admin.addnotif');
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
	public function deletenotif($id)
	{
		DB::table('notifications')->where('id',$id)->delete();
		return Redirect::route('adminpanel');
	}
	public function showmanagearchive()
	{
		$data= Archive::all();
		return View::make('admin.archivemanager',compact('data'));
	}
	public function managearchive()
	{
		# code...
	}
	public function showaddarchiveform()
	{
		return View::make('admin.fileupload');
	}
	public function deletearchive($id)
	{
		DB::table('archive')->where('id',$id)->delete();
		return Redirect::route('adminpanel');
	}
	public function addarchive()
	{
		
		DB::transaction(function(){
		$file = Input::file('file');
		$ext=$file->getClientOriginalExtension();
		$filename= str_random(10).$ext;//Input::file('file')->getClientOriginalName();
		$destinationpath= 'audio';
		DB::table('archive')->insert(array('filename'=>$filename,'tag'=>Input::get('tag'),'description'=>Input::get('desc'),'team'=>Input::get('team'),'time'=>time()));
		Input::file('file')->move($destinationpath, $filename);
	});//transaction ends
		return  Redirect::route('adminpanel');
	}
	public function showaddteam()
	{
		# code...''
		return View::make('admin.addteam');
	}
	public function addteam()
	{	
		DB::transaction(function(){
			$file= Input::file('file');
			$ext= $file->getClientOriginalExtension();

			$filename=str_random(10).$ext;
			$destinationpath='team';
			
			Image::make(Input::file('file'))->resize(100,100)->save('team/'.$filename."_thumbnail");	
			$file->move($destinationpath,$filename);
			$member= new Team;
			$member->name= Input::get('name');
			$member->bio=Input::get('desc');
			$member->position=Input::get('posit');
			$member->tag=Input::get('tag');
			$member->image_path=$filename;
			$member->image_thumb_path=$filename."_thumbnail";
			$member->link=Input::get('link');
			$member->save();
		});
		
		return Redirect::route('adminpanel'); 
	}


}
