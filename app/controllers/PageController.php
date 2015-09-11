<?php

class PageController extends \BaseController {
	public function showindex()
	{
		$images = DB::table('gallery')->get();
		$a = DB::table('notifications')->get();
		return View::make('html.index', compact('images','a'));;
	}

	public function committee()
	{
		return View::make('html.sub.committee');
	}
	public function privacy()
	{
		return View::make('html.sub.privacy');
	}
	public function faq()
	{
		return View::make('html.sub.faq');
	}
	public function credit()
	{
		return View::make('html.sub.credit');
	}
	public function team()
	{
		$data = DB::table('team')->get();
		return View::make('html.sub.team')->with(array('teams'=>$data));
	}
	public function gallery()
	{
		$data = DB::table('gallery')->get();
		return View::make('html.sub.gallery')->with(array('images'=>$data));
	}
	
	public function archive()
	{
		$data = DB::table('archive')->get();
		return View::make('html.sub.archive')->with(array('audio'=>$data));
	}
	public function recentarchive()
	{
		
	}
}
