<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('users/login');
	}
	public function getIndex()
	{
		return View::make('main.users')->with('users', User::all());
	}

	public function getLogin()
	{
		if(Auth::user()) return Redirect::to('/admin');
		return View::make('main.login');
	}

	public function getJoin()
	{
		if(Auth::user()) return Redirect::to('/admin');
		return View::make('main.join');
	}

	public function postLogin()
	{
		$validator = Validator::make(Input::all(), User::$login_rules);
		if($validator->passes())
		{
			$credentials = array(
				'username' => Input::get('username'),
				'password' => Input::get('password'),
				'title'	   => Input::get('title'),
				);
			if(Input::get('remember')=='on')
			{
				if(Auth::attempt($credentials, true))
					return Redirect::to('/admin');
			
				else return Redirect::to('users/login')
			            ->with('error', 'Please enter a valid username/password.');	
			}	
			else
				if(Auth::attempt($credentials))
					return Redirect::to('/admin');
				
				else return Redirect::to('users/login')
			            ->with('error', 'Please enter a valid username/password.');	
		}
		else
			return Redirect::to('users/login')
					->withErrors($validator);
	}

	public function postJoin()
	{
		$validator = Validator::make(Input::all(), User::$join_rules);
		if($validator->passes())
		{
			$user = new User;
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->contact = Input::get('contact');
			$user->title = Input::get('title');
			$user->password =Hash::make(Input::get('password'));
			$user->save();
			return Redirect::to('users/login')
			->with('success', 'Account created successfully.');
		}
		else return Redirect::to('users/join')->withErrors($validator);
	}

	public function getRemove($id)
	{
		$user = User::find($id);
		$user->delete();
		return Redirect::to('/users');
	}

	public function getAccount()
	{
		return View::make('main.account')->with('user', Auth::user());
	}
	public function postUpdate()
	{
		$user = User::find(Auth::user()->id);
		$validator = Validator::make(Input::all(), User::$update_rules);
		if($validator->passes())
		{
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->contact = Input::get('contact');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			return Redirect::back()->with('success', 'Account updated successfully');
		}
		else return Redirect::back()->withErrors($validator);
	}

}