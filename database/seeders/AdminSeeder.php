<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admin = [
            [
                'user_id'=>'5',
                'approved_at'=>now(),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'user_id'=>'6',
                'approved_at'=>now(),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ];

        DB::table('admins')->insert($admin);
    }
}
