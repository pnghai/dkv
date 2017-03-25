<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RouteVehicles extends Model {

	protected $table = 'route_vehicles';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}