<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=> 'morten' , 'email' => 'morten@email.com', 'password' => bcrypt('password'), 'admin'=>'1'],
            ['name'=> 'jens' , 'email' => 'jens@email.com', 'password' => bcrypt('password'), 'admin'=>'0'],
            ['name'=> 'bo' , 'email' => 'bo@email.com', 'password' => bcrypt('password'), 'admin'=>'1']
        ]);
    }
}
