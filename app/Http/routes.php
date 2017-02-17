<?php

/*
|----------------------------------|
| Front Routes			   |
|----------------------------------|
*/


Route::get('/','Front\ProductController@index');
Route::get('all-products/{id}','Front\ProductController@allProducts');
Route::get('singles/{pid}/{cid}','Front\ProductController@singles');
Route::get('search/{field}/{value}','Front\ProductController@search');
Route::get('filter/{field}/{value}','Front\ProductController@filter');
Route::post('search-by','Front\ProductController@searchBy');
Route::get('latest','Front\ProductController@latest');
Route::get('viewed','Front\ProductController@viewed');
Route::get('about','Front\ProductController@about');
Route::get('disclaimer','Front\ProductController@disclaimer');
Route::get('advertising','Front\ProductController@advertising');
Route::get('contact','Front\ProductController@contact');
Route::post('contact','Front\ProductController@contactus');

/*
|------------------------------------------------|
|               Admin Routes                     |
|------------------------------------------------|
*/
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
	Route::get('/', function () {
	    return view('admin/index');
	});
	
	Route::resource('categories','Admin\CategoriesController');
	Route::resource('products','Admin\ProductController');
	// Setting Routes
	Route::get('general-setting','Admin\SettingController@genral_setting');
	Route::post('general-setting','Admin\SettingController@store_genral_setting');
	Route::get('home-setting','Admin\SettingController@home_setting');
	Route::post('home-setting','Admin\SettingController@store_home_setting');
	Route::get('company-setting','Admin\SettingController@company_setting');
	Route::post('company-setting','Admin\SettingController@store_company_setting');
	Route::get('product-setting','Admin\SettingController@product_setting');
	Route::post('product-setting','Admin\SettingController@store_product_setting');
	Route::resource('users','Admin\UserController');

});


Route::auth();
Route::get('/home', 'HomeController@index');












































































































































































































































Route::get('track', function () {
	    return view('track');
	});
