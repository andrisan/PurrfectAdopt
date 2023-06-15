<!DOCTYPE html>
<html>

<head>
    <title>Testimoni 2</title>
    <link rel="stylesheet" href="{{ asset('testimonipet.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="wrapper-header">
                <img src="bintang1.png">
                <span class="title">Diana Sariayu</span>
            </div>
            <span class="content">Woww the website is great, makes it easier for me if I want to adopt a cat. Maybe in the future more features will be added! Hopefully it can be useful for many people, especially cat lovers like me.</span>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <div class="container">
        <div class="box">
            <div class="wrapper-header">
                <img src="bintang.png">
                <span class="title">Permata Cinta Via</span>
            </div>
            <span class="content">I would like to share my positive experience with this cat adoption website. The search system provided made it easy for me to find a cat that matched my preferences. The adoption process was very transparent and I felt safe giving up my home to my adopted cat.</span>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <div class="container">
        <div class="box">
            <div class="wrapper-header">
                <img src="bintang2.png">
                <span class="title">Ayu Kumalasari</span>
            </div>
            <span class="content">Last time I adopted a cat here I got a Himalayan cat. The price is not as expensive as others, adopting a cat through this website is very affordable. Can also COD for Malang and surrounding areas.</span>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <div class="container">
        <div class="box">
            <div class="wrapper-header">
                <img src="bintang1.png">
                <span class="title">Bagus Saputra</span>
            </div>    
            <span class="content">This website is very helpful!</span>
        </div>
    </div>

    <?php
  $testimonies = [
    [
      'image' => 'bintang.png',
      'name' => 'Amelia Intan',
      'content' => 'I am very impressed with the quality of service provided by this cat adoption website. I deeply appreciate the selective adoption process, as it gives me confidence that the cat I adopt is healthy and vaccinated. I truly enjoy my adoption experience through this website.'
    ],
    [
      'image' => 'bintang2.png',
      'name' => 'Permata Cinta Via',
      'content' => 'I would like to share my positive experience with this cat adoption website. The search system provided made it easy for me to find a cat that matches my preferences. The adoption process was very transparent, and I felt secure in entrusting my home to the cat I adopted.'
    ],
    [
      'image' => 'bintang.png',
      'name' => 'Indah Kumalasari',
      'content' => 'This cat adoption website is the best place to find the perfect pet cat. I have adopted two cats through this website, and both experiences have been amazing. I am highly impressed with the friendly customer service and assistance provided by the website team.'
    ],
    [
      'image' => 'bintang3.png',
      'name' => 'Eka Abimanyu',
      'content' => 'I recently adopted a cat through this cat adoption website, and I couldn\'t be happier. I received comprehensive information about the cat I wanted to adopt, and I was able to contact the previous owner to ask more questions. The cat I adopted is incredibly cute and sweet. Thank you so much!'
    ]
  ];
  ?>

  <?php foreach ($testimonies as $testimony) : ?>
    <div class="container mx-auto">
      <div class="box mx-auto">
        <div class="wrapper-header">
          <img src="<?php echo $testimony['image']; ?>">
          <span class="title"><?php echo $testimony['name']; ?></span>
        </div>
        <span class="content"><?php echo $testimony['content']; ?></span>
      </div>
    </div>
  <?php endforeach; ?>
</body>
 
</html>