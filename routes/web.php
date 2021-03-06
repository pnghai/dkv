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

Route::get('/', 'HomeController@index');
Route::get('/journey', 'JourneyController@index')->name('journey');

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
	// Backpack\CRUD: Define the resources for the entities you want to CRUD.
	CRUD::resource('location', 'Admin\LocationCrudController');
	CRUD::resource('locationtype', 'Admin\LocationTypeCrudController');
	CRUD::resource('route', 'Admin\RouteCrudController');
	CRUD::resource('routevehicle', 'Admin\RouteVehicleCrudController');
    CRUD::resource('vehicle', 'Admin\VehicleCrudController');

	// [...] other routes
});
