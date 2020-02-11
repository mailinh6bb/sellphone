<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name'=>'mailinh','email'=>'mailinh6bb@gmail.com','password'=>bcrypt('123456'),'gender'=>'1','phone'=>'378635050','address'=>'Bình Tú - Thăng Bình - Quảng Nam']

        ]);
        DB::table('users')->insert([
            ['name'=>'Linh Neko','email'=>'admin@gmail.com','password'=>bcrypt('123456'),'gender'=>'1','phone'=>'378635050','address'=>'Đà nẵng']

        ]);
    }
}
