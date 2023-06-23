<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            'nama'          => 'Diana Sariayu',
            'testi'         => 'How do I add a post of the cat I\'m offering to my account?',
            'jawab'         => 'Thank you for your trust and support in choosing our website for cat adoption. If you have any further questions or require assistance, please don\'t hesitate to reach out to us.',
            'bintang'       => '/images/bintang.png',
        ]);
        DB::table('faq')->insert([
            'nama'          => 'Indah Kumalasari',
            'testi'         => 'This cat adoption website is the best place to find the perfect pet cat. I have adopted two cats through this website, and both experiences have been amazing. I am highly impressed with the friendly customer service and assistance provided by the website team.',
            'jawab'         => 'Thank you for your testimonial about our cat adoption website. We\'re thrilled that you have had amazing experiences adopting two cats through our website. It\'s always a joy for us to be a part of the journey in bringing new furry friends into loving homes.',
            'bintang'       => '/images/bintang.png',
        ]);
        DB::table('faq')->insert([
            'nama'          => 'Eka Abimanyu',
            'testi'         => 'I recently adopted a cat through this cat adoption website, and I couldn\'t be happier. I received comprehensive information about the cat I wanted to adopt, and I was able to contact the previous owner to ask more questions. The cat I adopted is incredibly cute and sweet. Thank you so much!',
            'jawab'         => 'Thank you for sharing your testimonial about adopting a cat through our cat adoption website. It\'s delightful to know that the cat you adopted is incredibly cute and sweet. We hope that your new furry friend brings you immense joy and companionship.',
            'bintang'       => '/images/bintang1.png',
        ]);
        DB::table('faq')->insert([
            'nama'          => 'Amelia Intan',
            'testi'         => 'I am very impressed with the quality of service provided by this cat adoption website. I deeply appreciate the selective adoption process, as it gives me confidence that the cat I adopt is healthy and vaccinated. I truly enjoy my adoption experience through this website.',
            'jawab'         => 'Thank you for your trust and support in choosing our website for cat adoption. If you have any further questions or require assistance, please don\'t hesitate to reach out to us.',
            'bintang'       => '/images/bintang.png',
        ]);
        DB::table('faq')->insert([
            'nama'          => 'Permata Cinta Via',
            'testi'         => 'I would like to share my positive experience with this cat adoption website. The search system provided made it easy for me to find a cat that matches my preferences. The adoption process was very transparent, and I felt secure in entrusting my home to the cat I adopted.',
            'jawab'         => 'Thank you for sharing your positive experience with our cat adoption website. We are thrilled to hear that you had a great time using our services.',
            'bintang'       => '/images/bintang2.png',
        ]);
        DB::table('faq')->insert([
            'nama'          => 'Indah Kumalasari',
            'testi'         => 'This cat adoption website is the best place to find the perfect pet cat. I have adopted two cats through this website, and both experiences have been amazing. I am highly impressed with the friendly customer service and assistance provided by the website team.',
            'jawab'         => 'Thank you for your testimonial about our cat adoption website. We\'re thrilled that you have had amazing experiences adopting two cats through our website. It\'s always a joy for us to be a part of the journey in bringing new furry friends into loving homes.',
            'bintang'       => '/images/bintang.png',
        ]);
        DB::table('faq')->insert([
            'nama'          => 'Eka Abimanyu',
            'testi'         => 'I recently adopted a cat through this cat adoption website, and I couldn\'t be happier. I received comprehensive information about the cat I wanted to adopt, and I was able to contact the previous owner to ask more questions. The cat I adopted is incredibly cute and sweet. Thank you so much!',
            'jawab'         => 'Thank you for sharing your testimonial about adopting a cat through our cat adoption website. It\'s delightful to know that the cat you adopted is incredibly cute and sweet. We hope that your new furry friend brings you immense joy and companionship.',
            'bintang'       => '/images/bintang2.png',
        ]);
    }
}
