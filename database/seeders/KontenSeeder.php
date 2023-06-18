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
        $gambar = public_path('img/artikel1.jpg');

        DB::table('contents')->insert([
            'judul' => 'June Is Adopt a Shelter Cat Month. Here Are Some Cool Cats Available on Long Island',
            'penulis' => 'Allison Matos',
            'isi' => 'Looking for something to celebrate? June is Adopt a Shelter Cat Month, which means there is no better time to open your heart and home to an adorable, furry friend in need. By adopting a shelter cat, not only do you gain a loving and playful companion, but you also give a second chance to a deserving kitty.
            More of a dog person? Sweet Tea is this weeks Town of Smithtown Animal Shelters Pet of the Week! This poor baby was found wandering busy roads trying desperately to get into passing cars.  This loving young girl (approximately 1-2 years old) had signs of having had a recent litter and was a little underweight.  Sweet Tea is an energetic and social dog that seems to love anyone that will show her attention. She is a little unsure of herself in new surroundings, but she responds well to training.  This lovely lady is showing a 
            healthy interest in other dogs but can be overwhelming with them. Sweat Tea would thrive with a loving, patient adopter. Have experience with nurturing shyness away from feline friends? You do be their ultimate hero if you could provide them a consistent home (one with kids over twelve) and time to settle into a place in all your family hearts. ',
            'galery' => asset('img/artikel1.jpg'),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Guide and Considerations for Cat Adoption',
            'penulis' => 'Gerrad',
            'isi' => 'However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.',
            'galery' => asset('img/artikel2.jpg'),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Guide and Considerations for Cat Adoption',
            'penulis' => 'Gyuro',
            'isi' => 'However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.',
            'galery' => asset('img/artikel3.jpg'),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Guide and Considerations for Cat Adoption',
            'penulis' => 'Fernandes',
            'isi' => 'However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.',
            'galery' => asset('img/artikel4.jpg'),
        ]);
    }
}
