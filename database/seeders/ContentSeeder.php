<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $content = [
            [
                'user_id'=>'1',
                'title'=>'Doa Ibu',
                'concept'=>'Buat video bakfbweyrfbjabfewrfbuiwqbdiwr',
                'status'=>'Belum di ACC',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                
                'user_id'=>'5',
                'title'=>'Digital Agency',
                'concept'=>'Buat Design Instagram 5 slide dfliausgblahsbgliawbgr',
                'status'=>'ACC',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'user_id'=>'2',
                'title'=>'Doa Ibu',
                'concept'=>'Buat video bakfbweyrfbjabfewrfbuiwqbdiwr',
                'status'=>'Di Tolak',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                
                'user_id'=>'6',
                'title'=>'Digital Agency',
                'concept'=>'Buat Design Instagram 3 slide dfliausgblahsbgliawbgr',
                'status'=>'Dalam Proses',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'user_id'=>'1',
                'title'=>'Digital Marketing',
                'concept'=>'Buat video bakfbweyrfbjabfewrfbuiwqbdiwr',
                'status'=>'Sudah di Upload',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                
                'user_id'=>'2',
                'title'=>'Digital Marketing',
                'concept'=>'Buat Design Instagram 5 slide dfliausgblahsbgliawbgr',
                'status'=>'Belum di Upload',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ];

        DB::table('contents')->insert($content);
    }
}
