<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RouteVehicle extends Model {

	use CrudTrait;
	protected $table = 'route_vehicles';
	protected $fillable = ['name'];
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    public function route()
    {
        return $this->belongsTo('App\Models\Route');
    }
    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }
}