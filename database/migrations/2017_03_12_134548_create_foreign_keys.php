<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('location_types_id')->references('id')->on('location_types')
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
	}

	public function down()
	{
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_location_types_id_foreign');
		});
		Schema::table('routes', function(Blueprint $table) {
			$table->dropForeign('routes_source_foreign');
		});
		Schema::table('routes', function(Blueprint $table) {
			$table->dropForeign('routes_target_foreign');
		});
	}
}