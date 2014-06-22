<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function getIndex()
	{
		return View::make('main.categories')->with('categories', Category::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Category::$rules);
		if($validator->passes())
		{
			$category = new Category;
			$category->category = Input::get('category');
			$category->save();
			return Redirect::back()->with('success', 'Category Added Successfully');
		}
		else
			return Redirect::back()->withErrors($validator);
	}

	public function getRemove($id)
	{
		$category = Category::find($id);
		$category->delete();
		return Redirect::back()->with('success', 'Category removed successfully.');
	}
}