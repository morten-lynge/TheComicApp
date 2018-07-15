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
            ['user_id'=> '2' , 'comic_id' => '1', 'condition' => '4', 'status' => '1'],
            ['user_id'=> '2' , 'comic_id' => '4', 'condition' => '4','status' => '1'],
            ['user_id'=> '2' , 'comic_id' => '5', 'condition' => '4','status' => '1'],
            ['user_id'=> '2' , 'comic_id' => '11', 'condition' => '4','status' => '1'],
            ['user_id'=> '3' , 'comic_id' => '11', 'condition' => '4','status' => '1'],
            ['user_id'=> '2' , 'comic_id' => '12', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '15', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '16', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '17', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '18', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '19', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '20', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '21', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '22', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '23', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '24', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '25', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '26', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '27', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '28', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '29', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '30', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '31', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '32', 'condition' => '4','status' => '1'],
            ['user_id'=> '2' , 'comic_id' => '33', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '34', 'condition' => '4','status' => '1'],
            ['user_id'=> '1' , 'comic_id' => '35', 'condition' => '4','status' => '1'],
        ]);
    }
}
