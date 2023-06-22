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
            'warna'         => 'Yellow',
            'ras'           => 'Mongolia',
            'gender'        => '0',
            'berat_badan'   => '4 kg',
            'tinggi_badan'  => '25 cm',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat1.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Simba',
            'warna'         => 'Yellow',
            'ras'           => 'Anggora',
            'gender'        => '0',
            'berat_badan'   => '5 kg',
            'tinggi_badan'  => '30 cm',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat2.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Dora',
            'warna'         => 'Yellow',
            'ras'           => 'Mongolia',
            'gender'        => '1',
            'berat_badan'   => '3 kg',
            'tinggi_badan'  => '24 cm',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat3.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Zoey',
            'warna'         => 'White',
            'ras'           => 'Persia',
            'gender'        => '1',
            'berat_badan'   => '4 kg',
            'tinggi_badan'  => '27 cm',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat4.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Garfield',
            'warna'         => 'Brown',
            'ras'           => 'Persia',
            'gender'        => '1',
            'berat_badan'   => '4 kg',
            'tinggi_badan'  => '24 cm',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat5.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Gracie',
            'warna'         => 'White',
            'ras'           => 'Persia',
            'gender'        => '1',
            'berat_badan'   => '4 kg',
            'tinggi_badan'  => '28 cm',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat6.jpg',
            'video'         => '',
        ]);
    }
}
