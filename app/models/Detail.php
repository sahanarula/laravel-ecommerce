<?php

class Detail extends \Eloquent {
	protected $fillable = ['details', 'brand', 'model', 'description', 'moredescription', 'product_id'];
	public static $rules = array(
			'details'	=>	'required|alphanum',
			'moredescription'	=>	'required|alphanum',
			'model'				=>	'required|alphanum',
			'product_id'		=>	'numeric',
			'brand'				=>	'alpha|num'
		);
}