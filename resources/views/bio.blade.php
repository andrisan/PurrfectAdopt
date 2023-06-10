<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Purrfect Adopt</title>
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
  <body class="bg-yellow-100">
  <div class="absolute top-32 left-20 text-gray-700 text-5xl font-normal text-left font-poppins">
    Bio and Contact Person
    <img class="absolute right-[-24%] top-[-50%]" src="/images/ORANG.png" alt="ORANG">
    <div class="flex top-16 left-0 text-gray-700 text-base font-normal text-left font-poppins">Bio</div>
  </div>
  
  <div class="absolute top-56 left-20 w-[36%] h-60 flex items-center px-12 absolute rounded-2xl bg-yellow-300 shadow-lg">
    <img class="absolute top-5 right-5" src="/images/PENSIL.png" alt="">
    <div class="absolute text-gray-700 text-xl right-10 left-10 font-normal text-left">
      Selain merawat kucing-kucing saya sendiri, saya juga aktif dalam
      komunitas pecinta kucing. Saya bergabung dengan kelompok pecinta
      kucing di daerah saya. Saya aktif dalam berbagi pengetahuan tentang
      perawatan kucing melalui media sosial.
    </div>
  </body>
</html>