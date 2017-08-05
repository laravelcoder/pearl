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
                'id' => 4,
                'published' => 1,
                'name' => 'Double Heart Design',
                'slug' => 'double-heart-design',
                'image' => 'a:1:{i:0;s:16:"SPDOUBHEART1.jpg";}',
                'button_code' => 'PAY PAL BUTTON CODE GOES HERE',
                'short_details' => 'Short details example
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<h2>Main details example</h2><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.<br></p>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 09:39:21',
                'updated_at' => '2017-08-05 09:39:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'published' => 1,
                'name' => 'Double Star Design',
                'slug' => 'double-star-design',
                'image' => 'a:1:{i:0;s:15:"SPDOUBSTAR1.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.<br></p>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 09:50:37',
                'updated_at' => '2017-08-05 09:50:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'published' => 1,
                'name' => 'Elephant Design',
                'slug' => 'elephant-design',
                'image' => 'a:1:{i:0;s:14:"SPELEPHANT.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><div><br></div>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 10:09:29',
                'updated_at' => '2017-08-05 10:09:29',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'published' => 1,
                'name' => 'Flower Design',
                'slug' => 'flower-design',
                'image' => 'a:1:{i:0;s:13:"SPFLOWER1.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><div><br></div>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 10:10:22',
                'updated_at' => '2017-08-05 10:10:22',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'published' => 1,
                'name' => 'Monkey Design',
                'slug' => 'monkey-design',
                'image' => 'a:1:{i:0;s:13:"SPMONKEY1.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><div><br></div>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 10:11:07',
                'updated_at' => '2017-08-05 10:11:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'published' => 1,
                'name' => 'Owl Design',
                'slug' => 'owl-design',
                'image' => 'a:1:{i:0;s:10:"SPOWL1.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><div><br></div>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 10:11:49',
                'updated_at' => '2017-08-05 10:11:49',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'published' => 1,
                'name' => 'Paw Design',
                'slug' => 'paw-design',
                'image' => 'a:1:{i:0;s:9:"SPPAW.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><div><br></div>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 10:12:30',
                'updated_at' => '2017-08-05 10:13:21',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'published' => 1,
                'name' => 'Star Design',
                'slug' => 'star-design',
                'image' => 'a:1:{i:0;s:11:"SPSTAR1.jpg";}',
                'button_code' => NULL,
                'short_details' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.',
                'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><div><br></div>',
                'price' => '75.00',
                'availability' => 'Available',
                'created_at' => '2017-08-05 10:17:29',
                'updated_at' => '2017-08-05 10:17:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}