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
  <!--kartu bio-->
  <body class="bg-yellow-100">
  <div class="flex flex-row justify-center mt-12 top-100">
  <div class="w-64 p-6 bg-yellow-300 rounded shadow-md ml-6">
  Nama saya {{ $bio->name }} dan saya berprofesi sebagai {{ $bio->profesi }}.
  saya tinggal di {{ $bio->alamat }}. saya senang memelihara kucing   
  </div>
  
  <div class="w-64 p-6 bg-yellow-300 rounded shadow-md ml-6">
    <div class="flex items-center">
      <img src="/images/IMAIL.png" alt="email">
      <span style="padding-left:10px"></span>{{ $bio->email }}</div>
      <br>
      <div class="flex items-center">
      <img src="/images/TELEPON 1.png" alt="telepon">
      <span style="padding-left:10px"></span>{{ $bio->kontak }}</div>
      <br>
      <div class="flex items-center">
      <img src="/images/IGE.png" alt="IGE">
      <span style="padding-left:10px"></span>{{ $bio->profesi }}</div>
  </div>
</div>

  </body>
</html>