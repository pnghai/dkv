<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model {

	use CrudTrait;
	protected $table = 'routes';
	protected $fillable = ['name','cost','source','target'];
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	public function sourceLocation()
	{
		return $this->belongsTo('App\Models\Location','source');
	}
	public function targetLocation()
	{
		return $this->belongsTo('App\Models\Location','target');
	}
}