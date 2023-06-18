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
            'nama'          => 'Hermione',
            'warna'         => 'kuning',
            'ras'           => 'Mongolia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat1.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Simba',
            'warna'         => 'kuning',
            'ras'           => 'Anggora',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat2.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Dora',
            'warna'         => 'kuning',
            'ras'           => 'Mongolia',
            'gender'        => '1',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat3.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Zoey',
            'warna'         => 'Putih',
            'ras'           => 'Persia',
            'gender'        => '1',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat4.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Garfield',
            'warna'         => 'Cokelat',
            'ras'           => 'Persia',
            'gender'        => '1',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat5.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Gracie',
            'warna'         => 'Putih',
            'ras'           => 'Persia',
            'gender'        => '1',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat6.jpg',
            'video'         => '',
        ]);
    }
}
