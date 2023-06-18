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
<<<<<<< HEAD

=======
>>>>>>> ea153c96f24b35e983bc84c69fb7bf019c916d20
        DB::table('contents')->insert([
            'judul' => 'June Is Adopt a Shelter Cat Month. Here Are Some Cool Cats Available on Long Island',
            'penulis' => 'Allison Matos',
            'isi' => 'Looking for something to celebrate? June is Adopt a Shelter Cat Month, which means there is no better time to open your heart and home to an adorable, furry friend in need. By adopting a shelter cat, not only do you gain a loving and playful companion, but you also give a second chance to a deserving kitty.
            More of a dog person? Sweet Tea is this weeks Town of Smithtown Animal Shelters Pet of the Week! This poor baby was found wandering busy roads trying desperately to get into passing cars.  This loving young girl (approximately 1-2 years old) had signs of having had a recent litter and was a little underweight.  Sweet Tea is an energetic and social dog that seems to love anyone that will show her attention. She is a little unsure of herself in new surroundings, but she responds well to training.  This lovely lady is showing a 
<<<<<<< HEAD
            healthy interest in other dogs but can be overwhelming with them. Sweat Tea would thrive with a loving, patient adopter. Have experience with nurturing shyness away from feline friends? You do be their ultimate hero if you could provide them a consistent home (one with kids over twelve) and time to settle into a place in all your family hearts. ',
            'galery' => asset('img/artikel1.jpg'),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Guide and Considerations for Cat Adoption',
            'penulis' => 'Gerrad',
            'isi' => 'However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.',
            'galery' => asset('img/artikel2.jpg'),
=======
            healthy interest in other dogs but can be overwhelming with them. Sweat Tea would thrive with a loving, patient adopter. 
            **Double Adoption** Local 1-year-old rescues Elsie and Evan complete each other. Youll find two is better than one when it comes to this sibling duo. Formally shy, Elsie is now taking the lead in play groups while her brother is never far behind. An experienced family (with kids over 8 years old) will have no trouble winning these two over with playtime and treats. After settling into their first real home, they’ll grow excited to learn all about family life from their favorite expert: you! 
            **Double Adoption** The only thing we like more than celebrating our cats birthdays is celebrating their adoption days. For now, Animal League America is thrilled to shower shy 1-year-olds Chanel (Adoption #H211594) and Dior (Adoption #H211595) with treats and toys with a party surrounded by fur friends and humans they have grown to trust. Have experience with nurturing shyness away from feline friends? You’d be their ultimate hero if you could provide them a consistent home (one with kids over twelve) and time to settle into a place in all your family’s hearts. ',
            'galery' => file_get_contents($gambar),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        
$gambar2 = public_path('img/artikel2.jpg');
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
    'galery' => file_get_contents($gambar2),
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
>>>>>>> ea153c96f24b35e983bc84c69fb7bf019c916d20
        ]);

        $gambar3 = public_path('img/artikel3.jpg');
        DB::table('contents')->insert([
<<<<<<< HEAD
            'judul' => 'Guide and Considerations for Cat Adoption',
            'penulis' => 'Gyuro',
            'isi' => 'However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.',
            'galery' => asset('img/artikel3.jpg'),
=======
            'judul' => 'Treating Cat Fever',
            'nama' => 'Aberforth',
            'isi' => 'Just like humans, cats can also experience fever. However, cat fever has distinct characteristics. For those who have recently acquired a cat, it is important to pay attention to various aspects of cat fever so that you know how to treat a cat with fever in the future.
            
            Causes of Cat Fever:
            The most common cause of cat fever is usually due to infections that enter through the mouth, nose, eyes, or throat. Cat fever typically occurs as a body response to fight off the infection attacking the body.
            
            Apart from these seasonal factors, cat fever can also be an indication of a serious underlying illness. Therefore, it is important to pay attention to its condition and promptly seek medical attention to receive appropriate treatment.
            
            Signs of Cat Fever:
            Signs that may indicate cat fever include a loss of appetite and decreased water intake that lasts for more than 24 hours. When a cat loses its appetite, its body becomes weaker and lacks energy.
            
            To truly confirm that a cat has a fever, you can perform a rectal temperature check using a thermometer. If the body temperature reads 39.3 degrees Celsius or higher, it is advisable to consult a veterinarian immediately.
            
            Treating Cat Fever:
            When you observe the signs of cat fever, the next step is to seek veterinary care. The veterinarian will conduct an examination and provide appropriate treatment for your cat based on its specific needs and health condition. Typically, when a cat has a fever, the veterinarian will administer medication to reduce the fever, often in the form of liquid medication.',
            'galery' => file_get_contents($gambar3),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
>>>>>>> ea153c96f24b35e983bc84c69fb7bf019c916d20
        ]);

        $gambar4 = public_path('img/artikel4.jpg');
        DB::table('contents')->insert([
<<<<<<< HEAD
            'judul' => 'Guide and Considerations for Cat Adoption',
            'penulis' => 'Fernandes',
            'isi' => 'However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.',
            'galery' => asset('img/artikel4.jpg'),
=======
            'judul' => 'How to groom your cat at home',
            'nama' => 'Bobby Stuart',
            'isi' => 'Pick your moment
            It’s always best to groom your cat when they’re feeling calm and peaceful, not when they’re full of energy and zooming around! Give them a stroke and a bit of fuss first, to help make the experience a positive one.
            
            Choose the right cat grooming tools
            There are a bewildering range of cat grooming tools to choose from, so you might want to experiment with what works best for you and your cat.
            
            A soft bristle brush or grooming mitten may be enough for grooming short-haired cats, and is good for distributing natural oils through their coats. A mitten can be particularly useful for cats that aren’t used to being groomed, as it feels similar to being stroked.
            A pin brush with metal teeth (often capped with plastic) is a good-all-round cat grooming tool that’s helpful for gently working out tangles.
            Cats with medium or long hair are likely to need long-toothed combs and de-matting brushes. A slicker brush – usually a curved or slanted brush, with very fine metal teeth – is good for tackling matting and removing dirt and dead hair in longer-haired breeds.
            A flea comb can be another useful cat grooming tool. Its closely spaced teeth are designed to draw out and help you spot fleas, but can also be used to work out minor tangles.
            ‘If in doubt, ask your vet or groomer,’ says Pamela Campbell of Ayrshire Grooming Salon and Grooming School, the only National Pet College training school in Scotland. ‘They’ll be able to advise on the right brush for your pet’s particular coat type.’
            
            Brushing your cat
            Use a brush to gently brush through their fur, one section at a time. Follow the direction in which the hair grows, groom from root to tip, and use short strokes (much like a cat licking themselves). Note that cats with longer hair may need combing out as well as brushing – see our extra grooming tips for owners of long-haired cats.
            
            Groom familiar areas first
            Start by grooming areas where your cat is familiar with being touched, such as their back and sides, before progressing to more sensitive areas like their belly, neck, head and paws. If your cat isn’t keen to roll over and have their underside brushed, you may need to lift them up slightly to reach their belly, chest and neck fur. If they’re very restless, you may need to wait until they’re in a better position or mood – see below for more tips on grooming reluctant cats. Your cat’s whiskers are their most sensitive area, so try to work around these, or you may find them fidgeting!
            
            Watch out for fleas while grooming
            While brushing or combing your cat, look out for any uninvited visitors! A flea comb is ideal for this. It’s helpful to wipe the comb on a moist piece of white tissue to look for any reddish-brown specks, which could be flea droppings. Be sure to get your cat treated if you find signs of fleas, as combing alone won’t clear the problem.
            
            How to groom a cat that hates it
            It’s always a good idea to start grooming your cat as a kitten to get them comfortable with the sensation. If they haven’t been groomed before, or if your cat hates being groomed, you may need to introduce them to the grooming brush gradually!
            
            At first, simply keep the brush to hand while stroking your cat, and let them check it out in their own time. Reward them with a food treat for doing so, to create a positive association with the brush. Gradually progress to touching your cat with the brush, then giving them one or two gentle strokes with the brush, taking things at their pace and rewarding them at every stage.
            
            While some cats are soon content to be brushed and enjoy the attention, others will fidget or try to get away. Be patient, don’t force them to stay put and stick to very short grooming sessions. The same applies if your cat is getting old and stiff, and doesn’t like to sit in the same position for very long. The more positive the grooming experience for your cat, the easier it will become to groom them in future.
            
            How to keep your cat’s coat healthy
            Regular grooming sessions will help to keep your cat’s coat in good condition. Pay particular attention to prime locations for matts – Pamela highlights areas behind their ears, tails, hips, groins and underarms, where ‘excessive friction can cause hair to matt and tangle.’
            
            You don’t need to bathe your cat unless they really need it – most cats are capable of keeping themselves clean. You can also do your bit to look after their coat by making sure they’re getting a healthy diet. Inadequate nutrition, long-term stress and other health conditions can show up in a cat’s coat. So, if your cat’s fur or skin seems in worse condition than usual, if they’ve stopped grooming themselves or if they’re shedding more than normal, it’s worth booking a veterinary check-up.',
            'galery' => file_get_contents($gambar4),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
>>>>>>> ea153c96f24b35e983bc84c69fb7bf019c916d20
        ]);
    }
}
