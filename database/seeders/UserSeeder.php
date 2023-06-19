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
            'name' => 'Anya Geraldine',
            'email' => 'anya@yahoo.com',
            'password' => bcrypt('12345'),
            'role' => 'user',
            'gender' => '1',
            'profesi' => 'karyawan',
            'alamat' => 'jalan',
            'usia' => '21',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '0812',
            'status' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'Abdul Genta',
            'email' => 'genta@yahoo.com',
            'password' => bcrypt('12345'),
            'role' => 'user',
            'gender' => '1',
            'profesi' => 'karyawan',
            'alamat' => 'jalan',
            'usia' => '20',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '0812',
            'status' => '0',        
        ]);
        DB::table('users')->insert([
            'name' => 'Serra Hanif',
            'email' => 'serra@yahoo.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
            'gender' => '1',
            'profesi' => 'karyawan',
            'alamat' => 'jalan',
            'usia' => '21',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '0812',
            'status' => '0',
        ]);  
        DB::table('users')->insert([
            'name' => 'Amon Hollman',
            'email' => 'jegeru@yahoo.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
            'gender' => '1',
            'profesi' => 'karyawan',
            'alamat' => 'jalan',
            'usia' => '20',
            'ekonomi' => '5jt',
            'crime_hist' => '-',
            'kontak' => '0812',
            'status' => '0',        
        ]);  
    }
}
