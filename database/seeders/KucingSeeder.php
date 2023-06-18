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
            'nama'          => 'Charlie',
            'warna'         => 'kuning',
            'ras'           => 'mongolia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat1.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Charlie2',
            'warna'         => 'kuning',
            'ras'           => 'mongolia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat2.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Charlie3',
            'warna'         => 'kuning',
            'ras'           => 'mongolia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat5.jpg',
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
            'foto'          => '/img/cat5.jpg',
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
            'foto'          => '/img/cat5.jpg',
            'video'         => '',
        ]);
    }
}
