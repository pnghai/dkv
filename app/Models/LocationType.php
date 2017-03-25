<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class LocationType extends Model {
	use CrudTrait;
	protected $table = 'location_types';
	protected $fillable = ['name'];
	public $timestamps = true;
	use SoftDeletes;
	/*
		|--------------------------------------------------------------------------
		| FUNCTIONS
		|--------------------------------------------------------------------------
		*/

	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

	public function locations()
	{
		return $this->hasMany('App\Models\Location');
	}

	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
	protected $dates = ['deleted_at'];

}