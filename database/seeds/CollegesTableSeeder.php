<?php

use Illuminate\Database\Seeder;

class CollegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colleges')->delete();
        
        \DB::table('colleges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'FPMOZ',
                'location' => 'Matice Hrvatske b.b.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'FSRE',
                'location' => 'Matice Hrvatske b.b.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fakultet zdravstvenih studija',
                'location' => 'Zrinskog Frankopana 34',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}