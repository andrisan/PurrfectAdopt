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
            'tinggi_badan'  => '30',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat1.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Meow2',
            'warna'         => 'putih',
            'ras'           => 'persia',
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
          
            'nama'          => 'Simba',
            'warna'         => 'kuning',
            'ras'           => 'Anggora',
            'gender'        => '0',
            'berat_badan'   => '25',
            'tinggi_badan'  => '30',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat2.jpg',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
            'nama'          => 'Meow4',
            'warna'         => 'abu-abu',
            'ras'           => 'siamese',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '',
            'video'         => '',
        ]);
        DB::table('kucings')->insert([
          
            'nama'          => 'Dora',
            'warna'         => 'kuning',
            'ras'           => 'Mongolia',
            'gender'        => '1',
            'berat_badan'   => '28',
            'tinggi_badan'  => '31',
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
            'berat_badan'   => '29',
            'tinggi_badan'  => '27',
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
            'berat_badan'   => '24',
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
            'berat_badan'   => '25',
            'tinggi_badan'  => '32',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '/img/cat6.jpg',
            'video'         => '',
            'status'        => '1'
        ]);
    }
}
