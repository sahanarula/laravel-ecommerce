<?php

class Brand extends \Eloquent {
	public function subcategory()
	{
		return $this->belongsTo('Subcategory');
	}
	protected $fillable = ['brands', 'subcategory_id'];
	public static $rules = array(
			'brand'				=>	'required|unique:brands|alpha',
			'subcategory_id'	=>	'required|integer'
		);
}