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
  <body class="bg-yellow-100 pl-20 pt-20">
    <div class="pb-20">
        <div class="absolute px-auto text-gray-700 text-5xl font-normal text-left font-poppins">
        Bio and Contact Person
        <img class="absolute right-[-25%] top-[-30%]" src="/images/ORANG.png" alt="ORANG">
        </div>
    </div>

    <div class="justify-center flex flex-row mt-12 top-100"> <!--SEMUA KOTAK  -->
      <div class="flex w-8/12 p-10 bg-yellow-300 rounded-2xl shadow-2xl  ml-0">
        <div class="pl-6 pr-6 pb-6 pt-6 text-3xl">
          Selain merawat kucing-kucing saya sendiri, saya juga aktif dalam
          komunitas pecinta kucing. Saya bergabung dengan kelompok pecinta
          kucing di daerah saya. Saya aktif dalam berbagi pengetahuan tentang
          perawatan kucing melalui media sosial.
        </div>
      </div>
      

      <div class="pl-6 pr-24">
        <div class="w-96 p-6 bg-yellow-300 rounded-2xl shadow-md ml-6">
          <div class="flex items-center">
            <img src="/images/IMAIL.png" alt="email">
            <span style="padding-left:10px"></span>m.hilmi.adz@gmail.com</div>
            <br>
            <div class="flex items-center">
            <img src="/images/TELEPON 1.png" alt="telepon">
            <span style="padding-left:10px"></span>09182301928</div>
            <br>
            <div class="flex items-center">
            <img src="/images/IGE.png" alt="IGE">
            <span style="padding-left:10px"></span>Karyawan</div>
        </div>
      </div>
    </div>

  </body>
</html>