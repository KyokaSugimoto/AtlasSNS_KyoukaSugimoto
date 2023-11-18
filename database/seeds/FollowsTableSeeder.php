<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            ['following_id'=>'21','followed_id'=>'23'],
            ['following_id'=>'22','followed_id'=>'21'],
            ['following_id'=>'23','followed_id'=>'22'],
            ['following_id'=>'24','followed_id'=>'22'],
        ]);

        //
    }
}
