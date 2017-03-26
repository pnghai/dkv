<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Thai Dep Trai',
                'email' => 'nvthai.fr@gmail.com',
                'password' => '$2y$10$E2F86i3WntIOByYDfKuBH.628i6vS7UBDZrnCr21VIc0MDTb2aWzi',
                'remember_token' => NULL,
                'created_at' => '2017-03-26 09:32:06',
                'updated_at' => '2017-03-26 09:32:06',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'pnghai',
                'email' => 'pnghai@gmail.com',
                'password' => '$2y$10$5Nt7jRi92Syg1/kELivyk.57CmQjby.AomNW/WUe24yFSeUTKLCOC',
                'remember_token' => 'VMNssOj6r6aylhmYStRCNgK9ggAEOPEtkXfuK9LRtuarqPUvU7hb3cu0lpPk',
                'created_at' => '2017-03-25 16:40:16',
                'updated_at' => '2017-03-25 16:40:16',
            ),
        ));
        
        
    }
}