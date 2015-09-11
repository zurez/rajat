<?php

class ArchiveController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$archive = Archive::all();
		return View::make('html.sub.archive');
	}
	public function filter()
	{
		if (Input::get('education')) {
			return $this->education();
		}

		if (Input::get('entertainment')) {
			return $this->entertainment();
		}

		if (Input::get('information')) {
			return $this->information();
		}

		if (Input::get('date')) {
			return $this->date();
		}

		if (Input::get('misc')) {
			return $this->misc();
		}

		if (Input::get('all')) {
			return $this->all();
		}
	}

	public function education ()
	{
		$data= Archive::where('tag','education')->get();

		return View::make('html.sub.archivef',compact('data'));
	}
	public function entertainment ()
	{
		$data= Archive::where('tag','entertainment')->get();
		return View::make('html.sub.archivef',compact('data'));
	}
	public function information ()
	{
		$data= Archive::where('tag','information')->get();
		return View::make('html.sub.archivef',compact('data'));
	}
	public function date ()
	{
		
	}
	public function misc ()
	{	
		$data= Archive::where('tag','misc')->get();
		return View::make('html.sub.archivef',compact('data'));
	}
	public function all ()
	{	//$data= Archive::all()->get();
		$data= DB::table('archive')->get();
		return View::make('html.sub.archivef',compact('data'));
	}
}