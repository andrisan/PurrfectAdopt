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
            'judul' => 'June Is Adopt a Shelter Cat Month. Here Are Some Cool Cats Available on Long Island',
            'penulis' => 'Allison Matos',
            'status' => True,
            'isi' => 'Looking for something to celebrate? June is Adopt a Shelter Cat Month, which means there is no better time to open your heart and home to an adorable, furry friend in need. By adopting a shelter cat, not only do you gain a loving and playful companion, but you also give a second chance to a deserving kitty.
            More of a dog person? Sweet Tea is this weeks Town of Smithtown Animal Shelters Pet of the Week! This poor baby was found wandering busy roads trying desperately to get into passing cars.  This loving young girl (approximately 1-2 years old) had signs of having had a recent litter and was a little underweight.  Sweet Tea is an energetic and social dog that seems to love anyone that will show her attention. She is a little unsure of herself in new surroundings, but she responds well to training.  This lovely lady is showing a 
            healthy interest in other dogs but can be overwhelming with them. Sweat Tea would thrive with a loving, patient adopter. 
            **Double Adoption** Local 1-year-old rescues Elsie and Evan complete each other. Youll find two is better than one when it comes to this sibling duo. Formally shy, Elsie is now taking the lead in play groups while her brother is never far behind. An experienced family (with kids over 8 years old) will have no trouble winning these two over with playtime and treats. After settling into their first real home, they’ll grow excited to learn all about family life from their favorite expert: you! 
            **Double Adoption** The only thing we like more than celebrating our cats birthdays is celebrating their adoption days. For now, Animal League America is thrilled to shower shy 1-year-olds Chanel (Adoption #H211594) and Dior (Adoption #H211595) with treats and toys with a party surrounded by fur friends and humans they have grown to trust. Have experience with nurturing shyness away from feline friends? You’d be their ultimate hero if you could provide them a consistent home (one with kids over twelve) and time to settle into a place in all your family’s hearts. ',
            'galery' => '/img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        
DB::table('contents')->insert([
    'judul' => 'The Irresistible Charm of Cats: Our Beloved Feline Friends',
    'penulis' => 'Sarah Thompson',
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
    'galery' => '/img/artikel2.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('contents')->insert([
            'judul' => 'Treating Cat Fever',
            'penulis' => 'Aberforth',
            'status' => True,
            'isi' => 'Just like humans, cats can also experience fever. However, cat fever has distinct characteristics. For those who have recently acquired a cat, it is important to pay attention to various aspects of cat fever so that you know how to treat a cat with fever in the future.
            
            Causes of Cat Fever:
            The most common cause of cat fever is usually due to infections that enter through the mouth, nose, eyes, or throat. Cat fever typically occurs as a body response to fight off the infection attacking the body.
            
            Apart from these seasonal factors, cat fever can also be an indication of a serious underlying illness. Therefore, it is important to pay attention to its condition and promptly seek medical attention to receive appropriate treatment.
            
            Signs of Cat Fever:
            Signs that may indicate cat fever include a loss of appetite and decreased water intake that lasts for more than 24 hours. When a cat loses its appetite, its body becomes weaker and lacks energy.
            
            To truly confirm that a cat has a fever, you can perform a rectal temperature check using a thermometer. If the body temperature reads 39.3 degrees Celsius or higher, it is advisable to consult a veterinarian immediately.
            
            Treating Cat Fever:
            When you observe the signs of cat fever, the next step is to seek veterinary care. The veterinarian will conduct an examination and provide appropriate treatment for your cat based on its specific needs and health condition. Typically, when a cat has a fever, the veterinarian will administer medication to reduce the fever, often in the form of liquid medication.',
            'galery' => '/img/artikel3.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

DB::table('contents')->insert([
    'judul' => 'How to groom your cat at home',
    'penulis' => 'Bobby Stuart',
    'status' => True,
    'isi' => "Pick your moment.
    It is always best to groom your cat when they are feeling calm and peaceful, not when they are full of energy and zooming around! Give them a stroke and a bit of fuss first, to help make the experience a positive one. Choose the right cat grooming tools.
    There are a bewildering range of cat grooming tools to choose from, so you might want to experiment with what works best for you and your cat.

A soft bristle brush or grooming mitten may be enough for grooming short-haired cats, and is good for distributing natural oils through their coats. A mitten can be particularly useful for cats that are not used to being groomed, as it feels similar to being stroked.
A pin brush with metal teeth (often capped with plastic) is a good-all-round cat grooming tool that is helpful for gently working out tangles.
Cats with medium or long hair are likely to need long-toothed combs and de-matting brushes. A slicker brush - usually a curved or slanted brush, with very fine metal teeth - is good for tackling matting and removing dirt and dead hair in longer-haired breeds.
A flea comb can be another useful cat grooming tool. Its closely spaced teeth are designed to draw out and help you spot fleas, but can also be used to work out minor tangles.

If in doubt, ask your vet or groomer, says Pamela Campbell of Ayrshire Grooming Salon and Grooming School, the only National Pet College training school in Scotland. They will be able to advise on the right brush for your pet's particular coat type.

Brushing your cat:
Use a brush to gently brush through their fur, one section at a time. Follow the direction in which the hair grows, groom from root to tip, and use short strokes (much like a cat licking themselves). Note that cats with longer hair may need combing out as well as brushing - see our extra grooming tips for owners of long-haired cats.

Groom familiar areas first:
Start by grooming areas where your cat is familiar with being touched, such as their back and sides, before progressing to more sensitive areas like their belly, neck, head, and paws. If your cat is not keen to roll over and have their underside brushed, you may need to lift them up slightly to reach their belly, chest, and neck fur. If they are very restless, you may need to wait until they are in a better position or mood – see below for more tips on grooming reluctant cats. Your cat's whiskers are their most sensitive area, so try to work around these, or you may find them fidgeting!

Watch out for fleas while grooming:
While brushing or combing your cat, look out for any uninvited visitors! A flea comb is ideal for this. It is helpful to wipe the comb on a moist piece of white tissue to look for any reddish-brown specks, which could be flea droppings. Be sure to get your cat treated if you find signs of fleas, as combing alone won't clear the problem.

How to groom a cat that hates it:
It is always a good idea to start grooming your cat as a kitten to get them comfortable with the sensation. If they have not been groomed before, or if your cat hates being groomed, you may need to introduce them to the grooming brush gradually!

At first, simply keep the brush at hand while stroking your

 cat, and let them check it out in their own time. Reward them with a food treat for doing so, to create a positive association with the brush. Gradually progress to touching your cat with the brush, then giving them one or two gentle strokes with the brush, taking things at their pace",
    'galery' => '/img/artikel4.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);

DB::table('contents')->insert([
    'judul' => 'Cat Funny War with the Automatic Feeder Is Cracking Everyone Up',
    'penulis' => 'Gabrielle LaFrank',
    'status' => True,
    'isi' => '
    Cats Funny War with the Automatic Feeder Is Cracking Everyone Up
    Pets can be creatures of habit, so changing up something as simple as a feeder can really take them for a spin. Just take @winston.naughtypaws for example! This white and tabby cat has developed quite the rivalry with his new automatic feeder, and its just as entertaining as it sounds.
    
    The hungry kitty is still convinced that he can get his food out of the feeder, and honestly--maybe he can! Winstons mama has already had to make several adjustments to keep the feeder in place while he figures it out, but that might not even be enough to keep him at bay.
    
    View the original article to see embedded media.
    
    LMAO! Winston went from inconvenienced to downright enraged in just a few moments, but this is only day 2 of his time with the automatic cat feeder. Were sure hell figure out that he cant make it dispense food, but his attempts in the meantime are pretty darn funny.
    
    "I love how angry they get," said commenter @ohhthatsssheeer. "They all act like we dont feed them for days when it goes off." Thats so true! All of the cat food is gobbled up in seconds, and then theyre upset when they cant get any more until the next meal. Its a tale as old as time!
    
    Every cat will have their own appetite levels, but it can be normal to run into challenges like Winstons when switching from free-feeding to a routine meal schedule. Everyone at home will adjust in time! Keeping your cat on a consistent feeding schedule can help add a sense of routine and normalcy to their days, so its worth considering despite the adjustment period.
    
    Looking for more PetHelpful updates? Follow us on YouTube for more entertaining videos.
    
    Or, share your own adorable pet by submitting a video, and sign up for our newsletter for the latest pet updates and tips.',
    'galery' => '/img/artikel4.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);

DB::table('contents')->insert([
    'judul' => 'British Shorthairs Reaction To Human Sister in Cat Costume Is Cracking Everyone Up',
    'penulis' => 'Eve Vawter',
    'status' => True,
    'isi' => 'British Shorthairs Reaction To Human Sister in Cat Costume Is Cracking Everyone Up
    In a hilarious showdown of "Who Wore It Better," we have a bona fide feline superstar, a dashing British shorthair, pitted against his human accomplice, a pint-sized girl donning cat ears and whiskers. Brace yourselves for this expected reaction—this genuine cat is seething with feline fury at his human copycat. He is just not having it.
    
    Check out the following video posted by TikTok user @Bronxy to see this cat real cranky about this situation.
    
    View the original article to see embedded media.
    
    He has no idea who this new giant cat is but hes more than ready to evict her. TikTok users are finding this all too hilarious and @Mixalis comments, "He for real said "Call the police,  we are getting robbed!" @Tina adds, "What cat? I only see a very distinguished centerpiece." A very distinguished, very furious centerpiece. @Melly is all too familiar with this scenario and comments, "My cats reacted like this when I wore headphones with cat ears on it." @Itsdanik thinks it may be due to socialization, and replies, "Um excuse me you are actually supposed to do slow introductions with new cats." LOL!
    
    Cats are always just so extra. They get so jealous if they think another cat is going to get more attention than they are. We had love to see Bronxys reaction if his human sister dressed up like a dog or a bird. Or even better, a can of cat food.
    
    Looking for more PetHelpful updates? Follow us on YouTube for more entertaining videos. Or, share your own adorable pet by submitting a video, and sign up for our newsletter for the latest pet updates and tips.',
    'galery' => '/img/artikel1.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);

DB::table('contents')->insert([
    'judul' => 'Orange Cat Walks Into a Third Grade Classroom and Quickly Turns It Into His Home',
    'penulis' => 'Regina Sienra',
    'status' => True,
    'isi' => 'We have heard stories of cats finding a home by simply wandering into a home and adopting the humans living in it. 
        But one very clever kitty walked into a more academic location and got itself a tiny legion of adoring friends. Tombi the cat used to roam the grounds of an elementary school in Izmir, Turkey, greeting students and asking for pets.
        One day, he made his way to a third-grade classroom. What at first seemed a one-day occurrence quickly turned into a long-term thing, as Tombi settled in and turned the classroom into his home, much to the students delight.
        While many may think the cat could easily turn into a distraction for the kids, Tombi had the opposite effect on them. “The children come on time to school, and they are taking care of Tombi,” the third grade teacher, Özlem Pınar Ivaşcu, told The Dodo. “This is good for them.”

        Instead of running around and playing in between lessons, the students remained calm during breaks for Tombi. Ivaşcus photos show him sitting on students desks while they work, almost as if he was an assistant teacher guiding students through a lesson.

        The cat seemed to love the kids as much as they loved him. Unfortunately, one students parents filed a complaint about Tombi, as he could pose a health risk, and the cat was moved into an actual home. Tombi really missed his friends, and stopped eating for three days. Hoping to cheer him up, Ivaşcu brought him into her home, but he was not happy there either. Meanwhile, the students sent him drawings and letters to let him know they had not forgotten about him. Worried about his state, the teacher turned to social media, and after getting support from her manager and the director of education in Izmir—and a change of heart from the students parents—Tombi was welcomed back into the classroom.',
    'galery' => '/img/artikel2.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);

DB::table('contents')->insert([
    'judul' => 'Domestic cat',
    'penulis' => 'Azalea Yumiko',
    'status' => True,
    'isi' => 'Where do cats come from?
From ancient Egyptians to today’s internet users, people have always loved their cats. In the U.S. alone, cats reign over about 45.3 million households. There are at least 45 domestic breeds, which differ widely in features such as coat color, tail length, hair texture, and temperament, according to the Cat Fancier’s Association. The Maine Coon is the largest, with males reaching an average of 3.5 feet long. The smallest breed is the Singapura, native to Singapore, with adult females weighing as little as four pounds. One of the most unusual-looking cats is the Sphynx, a mostly hairless cat known for being robust and intelligent. Like their big cat cousins, house cats are obligate carnivores, meaning they have to eat meat to stay healthy. Though they’ve been domesticated for thousands of years, these predators have maintained a strong hunting instinct, relying on stealth to stalk prey and attack with sharp claws and teeth. (Learn surprising things you never knew about your cat.) As mostly nocturnal animals, cats have excellent vision and hearing, with ears that can turn like satellite dishes. Their reputation for having nine lives stems in part from their ability to navigate difficult environments, for example using their tail to balance and mostly land their lean, muscular bodies on all fours. Cushioning discs between vertebrae also give cat bodies exceptional flexibility and speed.

Kitty origins
People began to domesticate cats in the Fertile Crescent about 10,000 years ago, according to DNA research. Modern-day cats descended from a subspecies of African wildcat, Felis silvestris lybica, which today is the most common and widespread wildcat. (Read more about little-known small wildcats.) Thousands of years ago, these wildcats were likely drawn to human settlements and their plentiful mice and food scraps. People realized these rodent catchers were helpful to have around, and eventually the two species began living together. Later, people began to bring felines aboard ships as they traveled the world. (Read about house cat ancestors’ remains found in Polish caves.) Another, independent foray into cat domestication occurred in China about 5,000 years ago with another wildcat species the leopard cat. Since domestic cats today aren’t related to leopard cats, the harmony doesn’t seem to have lasted..',
    'galery' => '/img/artikel4.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);

DB::table('contents')->insert([
    'judul' => 'Managing your pet's weight',
    'penulis' => 'Zayn Malik',
    'status' => True,
    'isi' => 'Feeding the correct food
Dog vs Cat diets – a brief biology lesson
Dogs are considered omnivores, having evolved over thousands of years to live alongside humans and relying on them for scraps of food. Because of this, dogs have adapted to digest both meat and vegetation. Like humans, dogs can synthesize taurine (an essential amino acid building block for protein) from other proteins, which is essential for good health. Cats can only derive taurine from meat and fish, so it’s vital to feed them a balanced feline diet. Cats typically have a higher protein requirement than dogs. They do not need carbohydrates and are typically classified as carnivorous, historically being hunting predators. Feeding a cat dog food or a vegetarian diet can cause deficiencies and lead to health problems.

Lifestage diets
Kitten and puppy foods are higher in calories and are fed for the growth phase. They are generally suitable for up to a year old. However, some pets may be more likely to gain weight when they are neutered so may need to switch to an adult diet from 6 months. Growth phases are longer in very large breeds of dogs so they may be fed puppy foods for longer, or they may be able to switch to an in-between junior food. Senior foods are typically fed once a pet reaches 7 to 8 yrs old and generally contains fewer calories and different vitamins and minerals to suit the requirements of an older pet.

Wet vs dry food
Tinned or pouch foods (wet foods) are relatively easy to store, have a stronger smell, and are thought to be more appealing to an animal. It has high water content at around 80%, which means your pet won’t drink as much. This is particularly noticeable in cats. Dry foods are convenient to feed, easy to store and generally less expensive than wet food. Good quality dry foods are very well researched and balanced. The down side is that dry foods generally contain a greater amount of calories from carbohydrates in a smaller amount of food so extra care must be taken to feed the correct amount. Water content is much lower (between 15 to 30%) so you must make sure fresh water is available at every opportunity. Combinations of wet and dry can be fed, as long as the total amount fed is correct for your pet’s ideal body weight. ',
    'galery' => '/img/artikel1.jpg',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
]);
    }
}
