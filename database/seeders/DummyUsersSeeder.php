<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_data = [
            [
                'name'=>'Admin 1',
                'email'=>'admin1@yahoo.com',
                'role'=>'admin',
                'password'=>bcrypt('12345'),
            ],
            [
                'name'=>'Admin 2',
                'email'=>'admin2@yahoo.com',
                'role'=>'admin',
                'password'=>bcrypt('12345'),
            ],
            [
                'name'=>'User 1',
                'email'=>'user1@yahoo.com',
                'role'=>'user',
                'password'=>bcrypt('12345'),
            ],
            [
                'name'=>'User 2',
                'email'=>'user2@yahoo.com',
                'role'=>'user',
                'password'=>bcrypt('12345'),
            ],
        ];

        foreach($user_data as $key=>$value)
        {
            User::create($value);
        }
    }
}
