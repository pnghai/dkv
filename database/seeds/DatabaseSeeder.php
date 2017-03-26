<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		$this->call(LocationTypesTableSeeder::class);
	    $this->call(LocationsTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(RouteVehiclesTableSeeder::class);
        $this->call(ResetSequencesSeeder::class);
    }
}