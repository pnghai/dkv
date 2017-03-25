<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model {
	use CrudTrait;
	protected $table = 'vehicles';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}