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
            'status'        => FALSE,
            'description'   => 'This cats name is Hermione, and it is a male Mongolian breed cat with a yellow color. It has a considerable weight of 20 kilograms and a body height of 20 centimeters.',
            'save'          => FALSE
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
            'status'        => FALSE,
            'description'   => 'This cats name is Simba, and it is an Angora breed cat with a yellow color. It is a male cat and has a large body weight of 25 kilograms and a body height of 30 cm.',
            'save'          => FALSE
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
            'status'        => FALSE,
            'description'   => 'This cat is named Dora, and it is a Mongolian breed cat with a yellow color. It is a female cat and has a large body weight of 28 kilograms and a body height of 31 cm.',
            'save'          => FALSE
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
            'status'        => FALSE,
            'description'   => 'This cat is named Zoey, and it is a Persian breed cat with a white color. It is a female cat and has a large body weight, weighing in at 29 kilograms, and a relatively smaller body height of 27 cm.',
            'save'          => FALSE
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
            'status'        => FALSE,
            'description'   => 'This cat is named Garfield, and it is a Persian breed cat with a brown color. It is a female cat and has a relatively lighter body weight of 24 kilograms and a smaller body height of 20 cm.',
            'save'          => FALSE
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
            'status'        => FALSE,
            'description'   => 'This cat is named Gracie, and she is a Persian breed cat with a white color. She is a female cat and has a relatively lighter body weight of 25 kilograms and a smaller body height of 32 cm.',
            'save'          => FALSE
        ]);
    }
}
