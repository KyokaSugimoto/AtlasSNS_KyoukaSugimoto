<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['user_id'=>'1','post'=>'台風が近づいています'],
            ['user_id'=>'2','post'=>'暇すぎ〜〜'],
            ['user_id'=>'1','post'=>'幼少期に戻ってみたい'],
            ['user_id'=>'3','post'=>'今日は早く寝たい'],
            ['user_id'=>'2','post'=>'結婚っていつから意識するんだろう'],
            ['user_id'=>'4','post'=>'ビール飲みたい'],
        ]);
        //
    }
}
