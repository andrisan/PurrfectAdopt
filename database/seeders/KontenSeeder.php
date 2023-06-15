<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;
use Illuminate\Support\Facades\DB;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            'judul' => 'Artikel 1',
            'nama' => 'Nama Artikel 1',
            'isi' => 'n',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 2',
            'nama' => 'Nama Artikel 2',
            'isi' => 'm',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 3',
            'nama' => 'Nama Artikel 3',
            'isi' => 'p',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 4',
            'nama' => 'Nama Artikel 4',
            'isi' => 'q',
            'galery' => '',
        ]);
    }
}
