<?php

class ArtikelController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		// $artikel = artikel::all();
		$artikel = artikel::paginate(5);

		return View::make('admin/dashboard')->with('artikeldata', $artikel);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules =  array(
			'title' => 'required',
			'isi'	=> 'required',
			'author'=> 'required'
			);
		$validator = Validator::make(Input::all(),$rules);
	//var_dump();
		if ($validator->fails())
		{
			return Redirect::to('create')->withErrors($validator);
		}else{
			$artikels = new artikel;
			$artikels->title = Input::get('title');
			$artikels->author = Input::get('author');
			$artikels->isi = Input::get('isi');
			$artikels->save();
			Session::flash('success', 'Successfully stored in db');
			return Redirect::to('create');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$artikel = artikel::find($id);
		return View::make('admin/edit')->with('data',$artikel);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
