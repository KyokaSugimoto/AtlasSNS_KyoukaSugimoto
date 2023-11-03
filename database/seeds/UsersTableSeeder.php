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
            ['username'=>'Atlas花子','mail'=>'aaa@co.jp','password'=>bcrypt('hanako'),'bio'=>'花が好きです','images'=>"storage/images/icon1.png"],
            ['username'=>'Atlas優男','mail'=>'bbb@co.jp','password'=>bcrypt('yasao'),'bio'=>'それなりに優しいです','images'=>"storage/images/icon2.png"],
            ['username'=>'Atlas京子','mail'=>'ccc@co.jp','password'=>bcrypt('kyoko'),'bio'=>'京都出身です','images'=>"storage/images/icon3.png"],
            ['username'=>'Atlas屑男','mail'=>'DDD@co.jp','password'=>bcrypt('kuzuo'),'bio'=>'クズな男です','images'=>"storage/images/icon4.png"],
            ['username'=>'Atlas英子','mail'=>'eee@co.jp','password'=>bcrypt('eiko'),'bio'=>'英語ペラペラです','images'=>"storage/images/icon5.png"]
        ]);
        //
    }
}
