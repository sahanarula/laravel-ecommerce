<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('main.products')
				->with('products', Product::all());
	}	

	public function getAdd()
	{
		return View::make('main.add');
	}

	public function getList()
	{
		return View::make('main.list')->with('products', Product::all());
	}
	public function postImages()
	{
		$id = Input::get('product_id');
		$skuAsset = sprintf("%06s", $id);
        $sku = 'INDE'.$skuAsset;    
		$image_directory = 'public/images/products/'.$sku;
		if(!is_dir($image_directory))
		{
			mkdir($image_directory);
			$image = Input::file('file');
			$original = $image->getClientOriginalName();
			$originalArray = explode('.',$original);
			Image::make($image->getRealPath())->resize(320, 320)->save($image_directory.'/'.$id.'-'.'1.'.$originalArray[1]);
			return "image uploaded successfully";	
		} 
		else
			$image = Input::file('file');
			$original = $image->getClientOriginalName();
			$originalArray = explode('.',$original);
			$files = File::files($image_directory);
			$count = sizeof($files);
			$count++;
			Image::make($image->getRealPath())->save($image_directory.'/'.$id.'-'.$count.'.jpg', 100);
			return "image uploaded successfully";	
	}

	public function postAvailability(){
		return Input::all();
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Product::$rules);
		
		if($validator->passes())
		{
			$product = new Product;
			$product->title = Input::get('title');
			$product->description = Input::get('description');
				$id = Input::get('product_id');
				$skuAsset = sprintf("%06s", $id);
        	$product->sku = 'INDE'.$skuAsset;
        	$product->category_id = Input::get('category_id'); 
        	$product->subcategory_id = Input::get('subcategory_id'); 
        	$product->price = Input::get('price');
        	$product->weight = Input::get('weight');
        	$product->supplier_id = Auth::user()->id;
        	$product->image = 'images/products/INDE'.$skuAsset;
        	$product->save();
        	$details = new Detail;
        	$details->details = Input::get('details');
        	$details->model = Input::get('model');
        	$details->brand = Input::get('brand');
        	$details->moredescription = Input::get('moredescription');
        	$details->product_id = Input::get('product_id');
        	$details->save();
			return Response::json('success', 200);
		}
		else return $validator->errors;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}