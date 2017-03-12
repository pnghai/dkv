<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model {

	protected $table = 'routes';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}