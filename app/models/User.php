<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $join_rules=array(
			'first_name' => 'required',
			'last_name' => 'required',
			'username' => 'required|unique:users',
			'email' => 'required|email',
			'contact' => 'required|numeric',
			'title' => 'required',
			'password' => 'required',
			're-password' => 'required|same:password'
		);

	public static $login_rules=array(
			'username' => 'required',
			'password' => 'required'
		);
	public static $update_rules = array(
			'first_name'	=>	'required',
			'last_name'		=>	'required',
			'email'			=>	'email|required',
			'contact'		=>	'required|numeric',
			'password'		=>	'required',
			're-password'	=>	'required|same:password'
		);
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}