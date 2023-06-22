<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Eiko',
            'email' => 'eiko@gmail.com',
            'password' => '123',
            'gender' => '1',
            'profesi' => 'karyawan',
            'alamat' => 'jalan',
            'usia' => '21',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '081264312',
            'status' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Farah',
            'email' => 'farah@gmail.com',
            'password' => '123',
            'gender' => '1',
            'profesi' => 'guru',
            'alamat' => 'jalan',
            'usia' => '20',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '081264312',
            'status' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Diva',
            'email' => 'diva@gmail.com',
            'password' => '123',
            'gender' => '1',
            'profesi' => 'programmer',
            'alamat' => 'jalan',
            'usia' => '21',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '081264312',
            'status' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'Agist',
            'email' => 'agist@gmail.com',
            'password' => '123',
            'gender' => '0',
            'profesi' => 'programmer',
            'alamat' => 'jalan',
            'usia' => '21',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '081264312',
            'status' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'Ashila',
            'email' => 'ashill@gmail.com',
            'password' => '123',
            'gender' => '1',
            'profesi' => 'programmer',
            'alamat' => 'jalan',
            'usia' => '21',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '081264312',
            'status' => '0',
        ]);
    }
}
