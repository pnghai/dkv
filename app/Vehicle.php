<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model {

	protected $table = 'vehicles';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}