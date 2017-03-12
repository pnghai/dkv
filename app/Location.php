<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model {

	protected $table = 'locations';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}