<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kucing;
use Illuminate\Support\Facades\DB;

class KucingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kucings')->insert([
            'nama'          => 'Meow',
            'warna'         => 'kuning',
            'ras'           => 'mongolia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '',
            'video'         => '',
        ]);
    }
}
