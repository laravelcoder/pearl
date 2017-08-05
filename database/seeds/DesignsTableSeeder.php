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
                'image' => 'a:2:{i:0;s:16:"SPDOUBHEART1.JPG";i:1;s:22:"SPDOUBHEART1-thumb.jpg";}',
                'short_details' => 'short details of design one',
                'button_code' => NULL,
                'published' => 1,
                'details' => 'main  details',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-07-17 03:30:00',
                'updated_at' => '2017-08-05 00:43:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Design 1',
                'slug' => 'design1',
                'image' => NULL,
                'short_details' => 'short details of design one',
                'button_code' => NULL,
                'published' => 1,
                'details' => 'main  details',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-07-17 03:30:05',
                'updated_at' => '2017-07-17 03:33:29',
                'deleted_at' => '2017-07-17 03:33:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'name',
                'slug' => 'slug',
                'image' => 'a:1:{i:0;s:21:"SPDOUBSTAR1-thumb.JPG";}',
                'short_details' => 'short_details',
                'button_code' => 'button_code',
                'published' => 1,
                'details' => '<p>lorem    </p>',
                'price' => '25.00',
                'availability' => 'Available',
                'created_at' => '2017-08-01 00:10:10',
                'updated_at' => '2017-08-04 23:44:27',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}