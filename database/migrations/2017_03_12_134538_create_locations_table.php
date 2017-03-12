<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	public function up()
	{
		Schema::create('locations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('location_types_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('locations');
	}
}