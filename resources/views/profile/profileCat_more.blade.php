<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header');
    <div class="container mx-auto flex flex-wrap md:flex-nowrap mt-20">
    <div id="love-container">
    <button id="toggleButton" onclick="toggleHeart()"><i id="heartIcon" class="fa-regular fa-heart fa-2xl" style="color: #ff0505;"></i></button>
</div>
        <div class="w-full xl:w-4/8 py-7 mt-7">
            <img class="w-3/4 h-auto mx-auto" src="{{ asset('/img/Kuceng.png') }}">
        </div>
        <div class="flex flex-col xl:w-3/4 mt-20 text-left">
        <h1 class="text-6xl mb-8 text-black">BUDYANTO</h1>
        <h3 class="">PET Description</h3>
        <ul class="list-disc ml-6 mt-2">
        <li>Type  : Cat</li>
        <li>Sex   : Male</li>
        <li>Breed : British Short Hair</li>
        <li>Age   : 1 Years</li>
        <li>Color : Brown</li>
        <li>Weight: 10 Lbs</li>
        </ul>
        <div>
        <p class="block capitalize text-2xl text-yellow-700 mt-4">details</p>
        <div class="flex mt-1">
        <div class="box border rounded p-1 w-1 h-21 bg-yellow-400">
        </div>
        <div class="box border rounded p-2 w-3/4 ml-3 bg-yellow-400">
         <h5 class="">Kucing yang termasuk dalam spesies British Short Hair, yang memiliki ciri khas bulu pendek dan padat. Kucing ini memiliki warna bulu yang indah berupa nuansa coklat yang memikat mata.</h5>
        </div>
    </div>
        </div>
        </div>
    </div>
</div>
    @include('components.footer');
    <script>
  var isCondition1 = true;
  
  function toggleHeart() {
    var heartIcon = document.getElementById('heartIcon');
    
    if (isCondition1) {
      heartIcon.classList.remove('fa-regular');
      heartIcon.classList.add('fa-solid');
      isCondition1 = false;
    } else {
      heartIcon.classList.remove('fa-solid');
      heartIcon.classList.add('fa-regular');
      isCondition1 = true;
    }
  }
</script>
</body>
</html>