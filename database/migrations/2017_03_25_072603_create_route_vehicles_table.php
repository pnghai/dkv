<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRouteVehiclesTable extends Migration {

	public function up()
	{
		Schema::create('route_vehicles', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('route_id')->unsigned();
			$table->bigInteger('vehicle_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('route_vehicles');
	}
}