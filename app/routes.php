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

// Route::get('/', function()
// {
// 	return View::make('html.index');
// });
 Route::get('/',array('as'=>'index','uses'=>'PageController@showindex'));
Route::resource('admin','AdminController');
Route::get('faq',array('as'=>'faq','uses'=>'PageController@faq'));
Route::get('privacy',array('as'=>'privacy','uses'=>'PageController@privacy'));
Route::get('committee',array('as'=>'committee','uses'=>'PageController@committee'));
Route::get('credit',array('as'=>'credit','uses'=>'PageController@credit'));
Route::get('faq',array('as'=>'faq','uses'=>'PageController@faq'));
Route::get('team',array('as'=>'team','uses'=>'PageController@team'));
//gallery
Route::get('gallery',array('as'=>'gallery','uses'=>'PageController@gallery'));
//archive
Route::get('archive',array('as'=>'archive','uses'=>'ArchiveController@index'));
Route::post('archive',array('as'=>'archive','uses'=>'ArchiveController@filter'));

//Admin
Route::get('login',array('as'=>'login','uses'=>'AdminController@login'));
Route::get('logout', array('uses' => 'AdminController@doLogout'));
Route::post('login', array('uses' => 'AdminController@doLogin'));
Route::group(array('before' => 'auth'), function()

{
// Route::get('admin',array('as'=>'adminteam','uses'=>'AdminController@show_admin_panel'));
Route::get('adminschedule',array('as'=>'adminschedule','uses'=>'AdminController@adminschedule'));
Route::get('adminpanel',array('as'=>'adminpanel','uses'=>'AdminController@show_admin_panel'));
Route::get('managesgallery',array('managesgallery','uses'=>'AdminController@managesgallery'));
Route::get('uploadphoto',array('as'=>'uploadphoto','uses'=>'AdminController@showupload'));
Route::post('uploadphoto','AdminController@upload_photo');
Route::get('managephotos',array('as'=>'managephotos','uses'=>'AdminController@showphotos'));
Route::post('managephotos',array('as'=>'managephotos','uses'=>'AdminController@deletephoto'));
Route::get('managenotif',array('as'=>'managenotif','uses'=>'AdminController@showmanagenotif'));
Route::post('managenotif',array('as'=>'managenotif','uses'=>'AdminController@managenotif'));
Route::get('addnotif',array('as'=>'managenotif','uses'=>'AdminController@showaddnotif'));
Route::post('addnotif',array('as'=>'managenotif','uses'=>'AdminController@addnotif'));
Route::get('managearchive',array('as'=>'managearchive','uses'=>'AdminController@managearchive'));
Route::get('managearchive',array('as'=>'managearchive','uses'=>'AdminController@managearchive'));
});
