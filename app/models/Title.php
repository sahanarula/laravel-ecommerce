<?php

class Title extends \Eloquent {
	protected $fillable = ['title'];
	public static $rules = array(
		'title'	=>	'required|unique:titles|alpha'
		);
}