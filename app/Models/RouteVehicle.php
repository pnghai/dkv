<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RouteVehicles extends Model {

	use CrudTrait;
	protected $table = 'route_vehicles';
	protected $fillable = ['name'];
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}