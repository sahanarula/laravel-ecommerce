<?php

class HomeController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
	}
	public function getIndex()
	{
		return View::make('main.dashboard');
	}

}