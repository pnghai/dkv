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

Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
	// Backpack\CRUD: Define the resources for the entities you want to CRUD.
	CRUD::resource('location', 'Admin\LocationCrudController');
	CRUD::resource('locationtype', 'Admin\LocationTypesCrudController');
	CRUD::resource('route', 'Admin\RoutesCrudController');
	CRUD::resource('routevehicle', 'Admin\RouteVehiclesCrudController');

	// [...] other routes
});
Route::resource('location', 'LocationController');
Route::resource('locationtype', 'LocationTypeController');
Route::resource('route', 'RouteController');
Route::resource('vehicle', 'VehicleController');
Route::resource('routevehicles', 'RouteVehiclesController');
