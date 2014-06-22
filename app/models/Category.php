<?php

class Category extends \Eloquent {
	public function subcategories()
	{
		return $this->hasMany('Subcategory');
	}
	public function products()
	{
		return $this->hasMany('Product');
	}

	protected $fillable = ['category'];
	public static $rules = array(
			'category'  =>  'required|unique:categories'
		);
}