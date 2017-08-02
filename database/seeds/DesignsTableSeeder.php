<?php

use Illuminate\Database\Seeder;

class DesignsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('designs')->delete();
        
        \DB::table('designs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Design 1',
                'slug' => 'design1',
                'image' => NULL,
                'short_details' => 'short details of design one',
                'details' => 'main  details',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-07-17 03:30:00',
                'updated_at' => '2017-07-17 03:30:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Design 1',
                'slug' => 'design1',
                'image' => NULL,
                'short_details' => 'short details of design one',
                'details' => 'main  details',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-07-17 03:30:05',
                'updated_at' => '2017-07-17 03:33:29',
                'deleted_at' => '2017-07-17 03:33:29',
            ),
        ));
        
        
    }
}