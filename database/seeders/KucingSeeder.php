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
            'ras'           => 'persia',
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
            'nama'          => 'Meow3',
            'warna'         => 'kuning',
            'ras'           => 'persia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '',
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
            'nama'          => 'Meow5',
            'warna'         => 'putih',
            'ras'           => 'siberia',
            'gender'        => '0',
            'berat_badan'   => '20',
            'tinggi_badan'  => '20',
            'kesehatan'     => '',
            'sikap'         => '',
            'foto'          => '',
            'video'         => '',
            'status'        => '1'
        ]);
    }
}
