<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Pearl Parties',
                'meta_description' => '1',
                'banner' => 'sd.jpg',
                'slug' => 'pearl-party',
                'lang' => 'en',
                'created_at' => '2017-08-04 20:30:35',
                'updated_at' => '2017-08-04 20:30:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}