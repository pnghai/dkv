<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class Location extends Model {

	use CrudTrait;
	protected $table = 'locations';
	protected $fillable = ['name', 'location_type_id'];
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	public function locationtype()
	{
		return $this->belongsTo('App\Models\LocationType','location_type_id');
	}

	public function sourceLocations()
	{
		return $this->hasMany('App\Models\Route','source');
	}

	public function targetLocations()
	{
		return $this->hasMany('App\Models\Location','target');
	}
}