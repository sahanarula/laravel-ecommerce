<?php

class BrandsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('main.brands')->with('brands', Brand::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Brand::$rules);
		if($validator->passes())
		{
			$brand = new Brand;
			$brand->brand = Input::get('brand');
			$brand->subcategory_id = Input::get('subcategory_id');
			$brand->save();
			return Redirect::back()->with('success', 'Brand added successfully.');
		}
		else
			return Redirect::back()->withErrors($validator);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function getRemove($id)
	{
		$brand = Brand::find($id);
		$brand->delete();
		return Redirect::back()->with('success', 'Brand removed successfully.');
	}

}