<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicles')->delete();
        
        \DB::table('vehicles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Motorbike',
                'created_at' => '2017-03-26 14:09:24',
                'updated_at' => '2017-03-26 14:09:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Car',
                'created_at' => '2017-03-26 14:09:32',
                'updated_at' => '2017-03-26 14:09:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}