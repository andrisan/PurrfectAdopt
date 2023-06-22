<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserKucingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_kucings')->insert([
            'user_id'          => 1,
            'kucing_id'         => 1,
        ]);
        DB::table('user_kucings')->insert([
            'user_id'          => 1,
            'kucing_id'         => 2,
        ]);
        DB::table('user_kucings')->insert([
            'user_id'          => 2,
            'kucing_id'         => 3,
        ]);
    }
}
