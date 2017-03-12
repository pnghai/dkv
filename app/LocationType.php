<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationType extends Model {

	protected $table = 'location_types';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}