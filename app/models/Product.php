<?php

class Product extends \Eloquent {
	public function category(){
		return $this->belongsTo('Category');
	}
	public function subategory(){
		return $this->belongsTo('Subcategory');
	}
	protected $fillable = ['title', 'description', 'category_id', 'supplier_id', 'price', 'weight'];
	public static $rules = array(
			'title' => 'required|unique:products',
			'description'	=>	'required',
			'category_id'	=>	'required|numeric',
			'subcategory_id'=>	'required|numeric',
			'price'			=>	'required|numeric',
			'weight'		=>	'required|numeric',
		);
}