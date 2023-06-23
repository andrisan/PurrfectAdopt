<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diskusi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('balasDiskusi.css') }}" />
  </head>
  <body class="bg-yellow-100">
  <x-header/>
  <br>
  <br>
  <br>
    <div class="flex justify-center items-center">
    <h1 style="font-size: 20px; padding: 25px; font-weight: bold">{{ $content->judul }}</h1>
    </div>

    <div class="flex justify-center items-center">
      <svg style="padding-left: 15px; padding-top: 30px" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
        <path
          fill="currentColor"
          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 4c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm0 14c-2.03 0-4.43-.82-6.14-2.88a9.947 9.947 0 0 1 12.28 0C16.43 19.18 14.03 20 12 20z"
        />
      </svg>
      <div class="kotak2">
      <div style="font-size: 1.2vw; padding-left: 55px; padding: 15px">
        <p>{{ $content->nama }}</p>
<p>{{ $content->isi }}</p>
<p>{{ $content->galery }}</p>
        </div>
      </div>
    </div>
    
    </div>
  </body>
</html>
