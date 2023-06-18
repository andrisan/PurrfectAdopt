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
            'nama' => 'Allison Matos',
            'status' => True,
            'isi' => 'Looking for something to celebrate? June is Adopt a Shelter Cat Month, which means there is no better time to open your heart and home to an adorable, furry friend in need. By adopting a shelter cat, not only do you gain a loving and playful companion, but you also give a second chance to a deserving kitty.
            More of a dog person? Sweet Tea is this weeks Town of Smithtown Animal Shelters Pet of the Week! This poor baby was found wandering busy roads trying desperately to get into passing cars.  This loving young girl (approximately 1-2 years old) had signs of having had a recent litter and was a little underweight.  Sweet Tea is an energetic and social dog that seems to love anyone that will show her attention. She is a little unsure of herself in new surroundings, but she responds well to training.  This lovely lady is showing a 
            healthy interest in other dogs but can be overwhelming with them. Sweat Tea would thrive with a loving, patient adopter. 
            **Double Adoption** Local 1-year-old rescues Elsie and Evan complete each other. Youll find two is better than one when it comes to this sibling duo. Formally shy, Elsie is now taking the lead in play groups while her brother is never far behind. An experienced family (with kids over 8 years old) will have no trouble winning these two over with playtime and treats. After settling into their first real home, they’ll grow excited to learn all about family life from their favorite expert: you! 
            **Double Adoption** The only thing we like more than celebrating our cats birthdays is celebrating their adoption days. For now, Animal League America is thrilled to shower shy 1-year-olds Chanel (Adoption #H211594) and Dior (Adoption #H211595) with treats and toys with a party surrounded by fur friends and humans they have grown to trust. Have experience with nurturing shyness away from feline friends? You’d be their ultimate hero if you could provide them a consistent home (one with kids over twelve) and time to settle into a place in all your family’s hearts. ',
            'galery' => file_get_contents($gambar),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        
$gambar = public_path('img/artikel2.jpg');
DB::table('contents')->insert([
    'judul' => 'The Irresistible Charm of Cats: Our Beloved Feline Friends',
    'nama' => 'Sarah Thompson',
    'status' => True,
    'isi' => 'Introduction:
Cats, with their captivating eyes, soft fur, and playful nature, have a way of stealing our hearts and becoming cherished members of our families. These delightful creatures have enchanted humans for centuries with their independence, grace, and unique personalities. In this article, we delve into the irresistible charm of cats and celebrate the joy they bring to our lives.

The Mystique of Cats:
Cats possess an aura of mystery that has fascinated humans throughout history. From ancient Egyptian goddesses to literary characters like the Cheshire Cat, their enigmatic nature has sparked legends and tales. The way they move with elegance, the glint in their eyes, and their ability to effortlessly land on their feet evoke a sense of awe and wonder.

Companionship and Comfort:
One of the most cherished aspects of cat ownership is the companionship they offer. Cats form deep bonds with their human counterparts, providing comfort and unconditional love. Whether snuggled up on your lap while you read a book or simply being present during moments of solitude, their presence can be a source of solace and contentment.

Endearing Personalities:
Cats are renowned for their individualistic and quirky personalities. Some may be mischievous and adventurous, while others are laid-back and cuddly. Their unique traits and behaviors, such as kneading with their paws or perching on high surfaces, add charm and amusement to our daily lives. Each cat has its distinct character, making them all the more captivating and lovable.

Playful Pursuits:
Witnessing a cats playfulness is an absolute delight. They can turn the simplest objects, like a crumpled paper or a dangling string, into a source of endless entertainment. Their acrobatic leaps, lightning-fast pounces, and the amusing way they chase their tails never fail to bring smiles and laughter. Engaging in playtime with our feline friends strengthens the bond and creates lasting memories.

Health and Happiness:
Studies have shown that owning a cat can have a positive impact on our well-being. The soothing purrs of a cat have a calming effect, reducing stress and anxiety. Interacting with cats can lower blood pressure and even boost our immune system. Caring for these delightful creatures provides a sense of purpose and nurtures our emotional health, making us happier and more fulfilled.

Conclusion:
Cats, with their irresistible charm, bewitching personalities, and comforting presence, bring immeasurable joy into our lives. Their independent nature and playful spirit create a captivating dynamic that makes every day more delightful. As we revel in their antics and bask in their affection, let us embrace the incredible bond we share with these beloved feline friends. ',
    'galery' => file_get_contents($gambar),
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
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
