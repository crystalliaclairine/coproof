<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name'=>'Budi',
                'email'=>'Budy123@gmail.com',
                'password'=>bcrypt('budyoutube'),
                'role'=>'User',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Siti',
                'email'=>'Sityuks@gmail.com',
                'password'=>bcrypt('Sitian43'),
                'role'=>'User',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Rose',
                'email'=>'rosiearerose@gmail.com',
                'password'=>bcrypt('rosienumberone'),
                'role'=>'Admin',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Jisoo',
                'email'=>'jisooturtlerabbit@gmail.com',
                'password'=>bcrypt('rubyrabbit'),
                'role'=>'Admin',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Jennie',
                'email'=>'jennierubyjane@gmail.com',
                'password'=>bcrypt('kimbyjane'),
                'role'=>'User',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Lisa',
                'email'=>'lalisamanoban@gmail.com',
                'password'=>bcrypt('lalisaloveme'),
                'role'=>'User',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
