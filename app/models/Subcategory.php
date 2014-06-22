<?php

class Subcategory extends \Eloquent {
	public function category()
	{
		return $this->belongsTo('Category');
	}
	public function brands()
	{
		return $this->hasMany('Brand');
	}
	public function products()
	{
		return $this->hasMany('Product');
	}
	protected $fillable = ['subcategory', 'category_id'];
	public static $rules = array(
			'subcategory'   =>  'required|alpha',
			'category_id'	=>	'required|numeric'
		);
}