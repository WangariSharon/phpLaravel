<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	protected $guarded = array('password', 'remember_token');

	// deffine the user profile
	public static $rules = array(
		'names' 		 => 'required',
		'phone' 		 => 'required|numeric|unique:users',
		'marital_status' => 'required',
		'gender' 		 => 'required',
		);

		// update rules
	public static $updateRules = array(
		'names' 		 => 'required',
		'phone' 		 => 'required|numeric',
		'marital_status' => 'required',
		'gender' 		 => 'required',
		);
}
