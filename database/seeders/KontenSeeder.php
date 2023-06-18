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
        $gambar = public_path('img/artikel1.jpg')
        DB::table('contents')->insert([
            'judul' => 'June Is Adopt a Shelter Cat Month. Here Are Some Cool Cats Available on Long Island',
            'nama' => 'Allison Matos',
            'status' => True,
            'isi' => 'Looking for something to celebrate? June is Adopt a Shelter Cat Month, which means there is no better time to open your heart and home to an adorable, furry friend in need. By adopting a shelter cat, not only do you gain a loving and playful companion, but you also give a second chance to a deserving kitty.
            More of a dog person? Sweet Tea is this weeks Town of Smithtown Animal Shelters Pet of the Week! This poor baby was found wandering busy roads trying desperately to get into passing cars.  This loving young girl (approximately 1-2 years old) had signs of having had a recent litter and was a little underweight.  Sweet Tea is an energetic and social dog that seems to love anyone that will show her attention. She is a little unsure of herself in new surroundings, but she responds well to training.  This lovely lady is showing a 
            healthy interest in other dogs but can be overwhelming with them. Sweat Tea would thrive with a loving, patient adopter. 
            **Double Adoption** Local 1-year-old rescues Elsie (Adoption #BF4151) and Evan (Adoption #BF4152) complete each other. Youll find two is better than one when it comes to this sibling duo. Formally shy, Elsie is now taking the lead in play groups while her brother is never far behind. An experienced family (with kids over 8 years old) will have no trouble winning these two over with playtime and treats. After settling into their first real home, they’ll grow excited to learn all about family life from their favorite expert: you! 
            **Double Adoption** The only thing we like more than celebrating our cats birthdays is celebrating their adoption days. For now, Animal League America is thrilled to shower shy 1-year-olds Chanel (Adoption #H211594) and Dior (Adoption #H211595) with treats and toys with a party surrounded by fur friends and humans they have grown to trust. Have experience with nurturing shyness away from feline friends? You’d be their ultimate hero if you could provide them a consistent home (one with kids over twelve) and time to settle into a place in all your family’s hearts. ',
            'galery' => asset('img/artikel1.jpg');,
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
