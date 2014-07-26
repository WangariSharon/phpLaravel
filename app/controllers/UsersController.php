<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// $marital_status = array('Single', 'Divorced', 'Enagaged', 'Complicated', 'Married');
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		// Capture form data
		$payload = Input::all();
		
		// validate data and return errors if any
		$validator = Validator::make($payload, User::$rules);

		if($validator->passes())
		{
			$user =  User::create($payload);
			// $image = $payload['photo'];
			// var_dump($image);
			// die('here');
			if(Input::hasFile('photo')){
				$file = Input::file('photo');
				$destination = public_path().'/uploads/';
				$filename = $file->getClientOriginalName();
				$sucess = $file->move($destination, $filename);
				$payload['photo'] = $filename;
			}

			$payload['photo'] = $payload['photo'];
			if($user)
			{
				return Redirect::route('users.show', array($user->id));
			}
		}
		else
		{
			// Redirect user back to the form 
			return Redirect::back()->withErrors($validator);
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
		
		$user = User::find($id);
		return View::make('users.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('users.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::find($id)->delete();
        return Redirect::route('users.index');
	}

// 	public function funpage()
// 	{
// 		$user = User::find($id);
// 		return View::make('users.funpage', compact('user'));	}


}
