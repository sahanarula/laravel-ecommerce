<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('invoice/outgoing/print/{num}', function($num){
	return $num;
});
Route::get('invoice/incoming/print/{num}', function($num){
	return $num;
});
Route::get('hash/{pass?}', function($pass){
	return Hash::make('pass');
});
Route::get('subcat/{id}', function($id){
	$subcategories = Subcategory::where('category_id', '=', $id)->get();
	return $subcategories;
});
Route::controller('admin', 'AdminController');
Route::controller('titles', 'TitlesController');
Route::controller('users', 'UsersController');
Route::controller('invoice', 'InvoiceController');
Route::controller('categories', 'CategoryController');
Route::controller('subcategories', 'SubcategoryController');
Route::controller('brands', 'BrandsController');
Route::controller('products', 'ProductsController');