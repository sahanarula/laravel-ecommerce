<?php

class SubcategoryController extends \BaseController {

	public function getIndex()
	{
		return View::make('main.subcategories')->with('subcategories', Subcategory::all());
	}



	public function postCreate()
	{
		$validation = Validator::make(Input::all(), Subcategory::$rules);
		if($validation->passes())
		{
			$subcategory = new Subcategory;
			$subcategory->subcategory = Input::get('subcategory');
			$subcategory->category_id = Input::get('category_id');
			$subcategory->save();
			return Redirect::back()->with('success', 'Subcategory added successfully.');
		}
		else 
			return Redirect::back()->withErrors($validation);
	}



	public function getRemove($id)
	{
		$subcategory = Subcategory::find($id);
		$subcategory->delete();
		return Redirect::back()->with('success', 'Subcategory deleted successfully.');
	}


}