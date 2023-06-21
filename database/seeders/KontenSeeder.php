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
        DB::table('contents')->insert([
            'judul' => 'Artikel 5',
            'nama' => 'Nama Artikel 5',
            'isi' => 'q',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 6',
            'nama' => 'Nama Artikel 6',
            'isi' => 'q',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 7',
            'nama' => 'Nama Artikel 7',
            'isi' => 'q',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 8',
            'nama' => 'Nama Artikel 8',
            'isi' => 'q',
            'galery' => '',
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 9',
            'nama' => 'Nama Artikel 9',
            'isi' => 'q',
            'galery' => '',
        ]);
    }
}
