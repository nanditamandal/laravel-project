<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

//admin login
Route::get('/adminlogin', 'adminLoginController@adminlogin')->name('adminlogin.adminlogin');
// Route::post('/adminlogin', 'adminLoginController@validation');

//admin home 
Route::get('/admin/home', 'adminhomecontroller@index')->name('home.index');
Route::get('/logout','adminlogoutcontroller@index')->name('logout.index');

//ajax search

Route::get('/admin/home/search', 'adminhomecontroller@search')->name('home.search');

//employe create
Route::get('/employe/create', 'employecontroller@create')->name('employe.create');
Route::post('/employe/create', 'employecontroller@store')->name('employe.store');

//employe- Show
Route::get('/employe/show','employecontroller@show')->name('employe.show');

//employe edit
Route::get('/employe/{id}/edit', 'employecontroller@edit')->name('employe.edit');
Route::post('/employe/{id}/edit', 'employecontroller@update')->name('employe.update');

//employee 

Route::get('/employe/{id}/delete','employecontroller@delete')->name('employe.delete');
Route::post('/employe/{id}/delete','employecontroller@destroy')->name('employe.destroy');

Route::get('/bar-chart', 'ChartController@index');


// //employe create
// Route::get('/employee/create', 'employeeController@create')->name('employee.create');
// Route::post('/employee/create', 'employeeController@store')->name('employee.store');

// //employe edit
// Route::get('/employee/edit', 'employeeController@edit')->name('employee.edit');
// Route::post('/employee/edit', 'employeeController@update')->name('employee.update');

// //employe- Show
// Route::get('/employee/show','employeeController@show')->name('employee.show');

// Route::get('/employee/delete','employeeController@delete')->name('employee.delete');
//Route::post('/employe/delete','employecontroller@destroy')->name('employe.destroy');



Route::group(['middleware'=>['sess']], function(){

	Route::get('/employee', 'employeeController@index')->name('employee.index');

	Route::get('/employee/addCatagory', 'employeeController@addCatagory')->name('employee.addCatagory');
	Route::post('/employee/addCatagory', 'CatagoryController@store');

	Route::get('/employee/addSubCatagory', 'SubCatagoryController@create')->name('subcatagory.addSubCatagory');
	Route::post('/employee/addSubCatagory', 'SubCatagoryController@store');

	Route::get('/employee/addManufacturer', 'ManufacturerController@create')->name('manufacturer.addManufacturer');
	Route::post('/employee/addManufacturer', 'ManufacturerController@store');

	Route::get('/employee/addSupplier', 'SupplierController@create')->name('supplier.addSupplier');
	Route::post('/employee/addSupplier', 'SupplierController@store');

	Route::get('/employee/addProduct', 'ProductController@create')->name('product.create');
	Route::post('/employee/addProduct', 'ProductController@store');

	Route::get('/employee/addProductDetails', 'ProductDetailsController@create')->name('productdetails.addProductDetails');

	Route::get('/employee/faddProductDetails/{id}', 'ProductDetailsController@faddProductDetails')->name('productdetails.faddProductDetails');

	Route::post('/employee/faddProductDetails/{id}', 'ProductDetailsController@fstoreProductDetails');

	Route::get('/employee/showCatagory', 'CatagoryController@index')->name('catagory.showCatagory');
	Route::get('/employee/showCatagory/delete/{id}', 'CatagoryController@destroy')->name('catagory.delete');

	Route::get('/employee/modifyCatagory/{id}', 'CatagoryController@edit')->name('catagory.modifyCatagory');
	Route::post('/employee/modifyCatagory/{id}', 'CatagoryController@update');

	Route::get('/employee/showSubCatagory', 'SubCatagoryController@index')->name('subCatagory.showSubCatagory');
	Route::get('/employee/showSubCatagory/delete/{id}', 'SubCatagoryController@destroy')->name('subCatagory.delete');

	Route::get('/employee/showManufacturer', 'ManufacturerController@index')->name('manufacturer.showManufacturer');
	Route::get('/employee/showManufacturer/delete/{id}', 'ManufacturerController@destroy')->name('manufacturer.delete');

	Route::get('/employee/showProduct', 'ProductController@index')->name('product.showProduct');
	Route::get('/employee/showProduct/delete/{id}', 'ProductController@destroy')->name('product.delete');

	Route::get('/employee/showSupplier', 'SupplierController@index')->name('supplier.showSupplier');
	Route::get('/employee/showSupplier/delete/{id}', 'SupplierController@destroy')->name('supplier.destroy');

	Route::get('/employee/modifySubCatagory/{id}', 'SubCatagoryController@edit')->name('subcatagory.modifySubCatagory');
	Route::post('/employee/modifySubCatagory/{id}', 'SubCatagoryController@update');

	Route::get('/employee/modifyManufacturer/{id}', 'ManufacturerController@edit')->name('manufacturer.modifyManufacturer');
	Route::post('/employee/modifyManufacturer/{id}', 'ManufacturerController@update');

	Route::get('/employee/modifySupplier/{id}', 'SupplierController@edit')->name('supplier.modifySupplier');
	Route::post('/employee/modifySupplier/{id}', 'SupplierController@update');

	Route::get('/employee/modifyProduct/{id}', 'ProductController@edit')->name('product.modifyProduct');
	Route::post('/employee/modifyProduct/{id}', 'ProductController@update');

	Route::get('/employee/showProductDetails', 'ProductDetailsController@show')->name('prodet.showProdit');


	Route::get('/employee/showCatagory/{id}','CatagoryController@destroy')->name('catagory.destroy');

	Route::get('/employee/showProductDetails/{id}','ProductDetailsController@edit')->name('productdetails.show');
	Route::post('/employee/showProductDetails/{id}','ProductDetailsController@update');

	Route::get('/employee/showProductDetails/delete/{id}','ProductDetailsController@destroy')->name('productdetails.delete');

	Route::get('/employee/showProductDetail/search','eSearchController@index')->name('employeeSearch1.show');

	Route::get('employee/search','eSearchController@action')->name('employeeSearch1.action');
	
});





Route::get('/login','adminLogincontroller@index')->name('login.index');
Route::post('/login','adminLogincontroller@verify');

///customer router

//customer create
Route::get('/customer/create', 'customerController@create')->name('customer.create');
Route::post('/customer/create', 'customerController@store')->name('customer.store');
//customer home 
Route::get('/customer/homepage', 'customerController@homepage')->name('customer.homepage');
//search
Route::get('/customer/search','customerController@search')->name('customer.search');

Route::get('/add_to_cart/{id}','cartController@show')->name('cart.show');
Route::post('/add_to_cart/{id}', 'cartController@insertcart')->name('cart.insertcart');
//show my cart
Route::get('/my_cart','cartController@showcart')->name('cart.showcart');
Route::get('/my_cart/bill','cartController@totalbill')->name('cart.totalbill');
//edit cart

Route::get('/cart/{id}/edit', 'cartController@edit')->name('cart.edit');
Route::post('/cart/{id}/edit', 'cartController@update')->name('cart.update');
Route::get('/cart/{id}/delete','cartController@destroy')->name('cart.destroy');

Route::get('/order/confirm','cartController@confirm')->name('cart.confirm');

//show all product

Route::get('/product/show','cartController@showallproduct')->name('cart.showallproduct');