<!DOCTYPE html>
<html>

<head>
  <title>Testimoni My Pet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="testimonipet.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>

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
