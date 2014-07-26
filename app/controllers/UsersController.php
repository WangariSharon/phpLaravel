<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// pull all users from database
		$users = User::all();
		return View::make('users.index', compact('users'));
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
<<<<<<< HEAD
	{	
=======
	{
		
		$dob = Input::get('dob');
		$datestring = $dob['year'] .' - '. $dob['month'] .' - '. $dob['day'];
		
		// Merge new date string back to input
		Input::merge(['dob' => $datestring]);
		
>>>>>>> origin/master
		// Capture form data
		$payload = Input::except('_token');
		
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
<<<<<<< HEAD
		
		$user = User::find($id);
		return View::make('users.show', compact('user'));
=======
     	// return View::find(1);
     	// return User::find(1);
     	// picking the user with set id, cause it's what's unique
     	$user = User::find($id);

     	return View::make('users.show', compact('user'));
>>>>>>> origin/master
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
<<<<<<< HEAD
		$user = User::find($id);
		return View::make('users.edit', compact('user'));
=======
		//Fetch record
		$user = User::find($id);
		$marital_status = array('Single', 'Divorced', 'Enagaged', 'Complicated', 'Married');

		return View::make('users.edit', compact('user', 'marital_status'));

>>>>>>> origin/master
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
<<<<<<< HEAD
		
=======

		$user = User::find($id);
		//Format dob 
		$dob = Input::get('dob');
		$datestring = $dob['year'] .' - '. $dob['month'] .' - '. $dob['day'];
		
		// Merge new date string back to input
		Input::merge(['dob' => $datestring]);
		
		// Capture form data
		$payload = Input::except('_token');
		
		// validate data and return errors if any
		$validator = Validator::make($payload, User::$updateRules);

		if($validator->passes())
		{
			// $user =  User::find($id);
			$user->update($payload);
			{
				return Redirect::route('users.show', array($user->id))->with('alert', 'Record Updated');
			}
		}
		else
		{
			// Redirect user back to the form 
			return Redirect::back()->withErrors($validator);
		}

>>>>>>> origin/master
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
<<<<<<< HEAD
		User::find($id)->delete();
        return Redirect::route('users.index');
=======
		 User::find($id)->delete();
        	 return Redirect::route('users.index');
>>>>>>> origin/master
	}

// 	public function funpage()
// 	{
// 		$user = User::find($id);
// 		return View::make('users.funpage', compact('user'));	}


}
