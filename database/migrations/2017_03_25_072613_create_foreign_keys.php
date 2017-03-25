<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('location_type_id')->references('id')->on('location_types')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('routes', function(Blueprint $table) {
			$table->foreign('source')->references('id')->on('locations')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('routes', function(Blueprint $table) {
			$table->foreign('target')->references('id')->on('locations')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('route_vehicles', function(Blueprint $table) {
			$table->foreign('route_id')->references('id')->on('routes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('route_vehicles', function(Blueprint $table) {
			$table->foreign('vehicle_id')->references('id')->on('vehicles')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_location_type_id_foreign');
		});
		Schema::table('routes', function(Blueprint $table) {
			$table->dropForeign('routes_source_foreign');
		});
		Schema::table('routes', function(Blueprint $table) {
			$table->dropForeign('routes_target_foreign');
		});
		Schema::table('route_vehicles', function(Blueprint $table) {
			$table->dropForeign('route_vehicles_route_id_foreign');
		});
		Schema::table('route_vehicles', function(Blueprint $table) {
			$table->dropForeign('route_vehicles_vehicle_id_foreign');
		});
	}
}