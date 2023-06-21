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
            'warna'         => 'orange',
            'ras'           => 'mongolia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '30',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Meow2',
            'warna'         => 'putih',
            'ras'           => 'mongolia',
            'gender'        => '1',
            'berat_badan'   => '15',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '',
            'video'         => '',
            'status'        => '1'
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Meow3',
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
