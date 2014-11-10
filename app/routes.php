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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('dashboard', 'ArtikelController@dashboard');

Route::get('create', function()
{
	
	
	return View::make('content/create');

	// if (Input::all()== null);
	// 	return Redirect::to('user/login')->with('message', 'TIdak Boleh Ada Yang Kosong');
	// endif;
});

Route::get('edit/{id}', 'ArtikelController@edit');

Route::post('store','ArtikelController@store');
Route::post('artikel/delete/{id}','ArtikelController@delete');
Route::post('artikel/update', 'ArtikelController@update');





Route::get('artikel/{name}', function($name=null)
{
	return View::make('artikel');
});
