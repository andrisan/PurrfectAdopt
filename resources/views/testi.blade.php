<!DOCTYPE html>
<html>

<head>
    <title>Testimoni 2</title>
    <link rel="stylesheet" href="{{ asset('testimonipet.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar" style="position: center;margin-top: 20px;">
  <div class="flex justify-center items-center" style="position: center;">       
    <h1 class="flex justify-center items-center " style="font-size:xx-large; font-weight: bold; font-size: 32px;">FAQ</h1>
    <p class="flex justify-center items-center ;" style="font-weight: bold; font-size: 20px;">Frequently Question and Answer</p>
  </div>          
</div>
  <div class="container mx-auto">
    <div class="box mx-auto">
      <div class="wrapper-header">
        <img src="bintang.png" >
        <span class="title">Diana Sariayu</span>
      </div>
      <span class="content">How do I add a post of the cat I'm offering to my account?</span>
    </div>
  </div>
  <p>
    <div style="position: relative; width: 100%; height: 100%;">
      
      <div class="container mx-auto">
        <img src="Admin.png" alt="Gambar" style="padding-left: 70px;padding-top: 20px;padding-right: 20px; position: flex; left: 10px; top: 0.5px; width: 81px; height: 81px;">
        <div class="box mx-auto">
          <div class="wrapper-header">
          </div>
          <span class="content">Thank you for your trust and support in choosing our website for cat adoption. If you have any further questions or require assistance, please don't hesitate to reach out to us.</span>
        </div>
      </div>
    </div>
<<<<<<< HEAD
  

  <div class="container mx-auto">
    <div class="box mx-auto">
      <div class="wrapper-header">
        <img src="bintang2.png">
        <span class="title">Cintania Vertika</span>
      </div>
      <span class="content">I would like to share my positive experience with this cat adoption website. The search system provided made it easy for me to find a cat that matches my preferences. The adoption process was very transparent, and I felt secure in entrusting my home to the cat I adopted.</span>
    </div>
  </div>
  <p>
    <div style="position: relative; width: 100%; height: 100%;">
      
=======
    <p>
    <div style="position: relative; width: 100%; height: 100%;">

>>>>>>> 61f79bb6968c4975c85b3c7b1e70bb0bf6e9ee05
      <div class="container mx-auto">
        <img src="Admin.png" alt="Gambar" style="padding-left: 70px;padding-top: 20px;padding-right: 20px; position: flex; left: 10px; top: 0.5px; width: 81px; height: 81px;">
        <div class="box mx-auto">
          <div class="wrapper-header">
          </div>
<<<<<<< HEAD
          <span class="content">Thank you for sharing your positive experience with our cat adoption website. We are thrilled to hear that you had a great time using our services.</span>
        </div>
      </div>
    </div>

  <div class="container mx-auto">
    <div class="box mx-auto">
      <div class="wrapper-header">
        <img src="bintang.png">
        <span class="title">Indah Kumalasari</span>
      </div>
      <span class="content">This cat adoption website is the best place to find the perfect pet cat. I have adopted two cats through this website, and both experiences have been amazing. I am highly impressed with the friendly customer service and assistance provided by the website team.</span>
    </div>
  </div>
  <p>
    <div style="position: relative; width: 100%; height: 100%;">
      
      <div class="container mx-auto">
        <img src="Admin.png" alt="Gambar" style="padding-left: 70px;padding-top: 20px;padding-right: 20px; position: flex; left: 10px; top: 0.5px; width: 81px; height: 81px;">
        <div class="box mx-auto">
          <div class="wrapper-header">
          </div>
          <span class="content">Thank you for your testimonial about our cat adoption website. We're thrilled that you have had amazing experiences adopting two cats through our website. It's always a joy for us to be a part of the journey in bringing new furry friends into loving homes.</span>
        </div>
      </div>
    </div>

  <div class="container mx-auto">
    <div class="box mx-auto">
      <div class="wrapper-header">
        <img src="bintang3.png">
        <span class="title">Eka Abimanyu</span>
      </div>
      <span class="content">I recently adopted a cat through this cat adoption website, and I couldn't be happier. I received comprehensive information about the cat I wanted to adopt, and I was able to contact the previous owner to ask more questions. The cat I adopted is incredibly cute and sweet. Thank you so much!</span>
    </div>
  </div>
  <p>
    <div style="position: relative; width: 100%; height: 100%;">
      
      <div class="container mx-auto">
        <img src="Admin.png" alt="Gambar" style="padding-left: 70px;padding-top: 20px;padding-right: 20px; position: flex; left: 10px; top: 0.5px; width: 81px; height: 81px;">
        <div class="box mx-auto">
          <div class="wrapper-header">
          </div>
          <span class="content">Thank you for sharing your testimonial about adopting a cat through our cat adoption website. It's delightful to know that the cat you adopted is incredibly cute and sweet. We hope that your new furry friend brings you immense joy and companionship.</span>
        </div>
      </div>
    </div>
=======
          <?php if ($testimony['name'] === 'Amelia Intan') : ?>
            <span class="content">Thank you for your trust and support in choosing our website for cat adoption. If you have any further questions or require assistance, please don't hesitate to reach out to us.</span>
          <?php elseif ($testimony['name'] === 'Permata Cinta Via') : ?>
            <span class="content">Thank you for sharing your positive experience with our cat adoption website. We are thrilled to hear that you had a great time using our services.</span>
          <?php elseif ($testimony['name'] === 'Indah Kumalasari') : ?>
            <span class="content">Thank you for your testimonial about our cat adoption website. We're thrilled that you have had amazing experiences adopting two cats through our website. It's always a joy for us to be a part of the journey in bringing new furry friends into loving homes.</span>
          <?php elseif ($testimony['name'] === 'Eka Abimanyu') : ?>
            <span class="content">Thank you for sharing your testimonial about adopting a cat through our cat adoption website. It's delightful to know that the cat you adopted is incredibly cute and sweet. We hope that your new furry friend brings you immense joy and companionship.</span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
>>>>>>> 61f79bb6968c4975c85b3c7b1e70bb0bf6e9ee05

</body>
 
</html>