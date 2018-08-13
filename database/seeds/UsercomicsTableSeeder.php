<?php

use Illuminate\Database\Seeder;

class UsercomicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usercomics')->insert([
            ['user_id'=> '2' , 'comic_id' => '1', 'condition' => '4', 'status' => '0'],
           
        ]);
    }
}
