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
                'id' => 1,
                'name' => 'phillipmadsen',
                'email' => 'wecodelaravel@gmail.com',
                'password' => '$2y$10$PHnAu/qQNx4AkDYaFWdXKuj80oRrxJyGHaKb2i3okTTfDd1x.XOJ6',
                'remember_token' => NULL,
                'created_at' => '2017-06-12 23:17:45',
                'updated_at' => '2017-06-12 23:17:45',
            ),
            array (
                'id' => 2,
                'name' => 'andpar79',
                'email' => 'contact@orderpearlessence.com',
                'password' => bcrypt('Pearl2017'),
                'remember_token' => NULL,
                'created_at' => '2017-06-12 23:17:45',
                'updated_at' => '2017-06-12 23:17:45',
            )
        ));
        
        
    }
}