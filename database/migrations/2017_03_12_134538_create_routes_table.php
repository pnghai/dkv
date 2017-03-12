<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoutesTable extends Migration {

	public function up()
	{
		Schema::create('routes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('source')->unsigned()->nullable();
			$table->integer('target')->unsigned()->nullable();
			$table->float('cost');
		});
	}

	public function down()
	{
		Schema::drop('routes');
	}
}