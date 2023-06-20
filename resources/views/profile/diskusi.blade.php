<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskusi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('diskusi.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="bg-yellow-100">
<x-header/>
      <div class="discussions" style="margin-top: 20px;">
        <div class="flex justify-center items-center mt-70">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path fill="currentColor" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05c1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
            <h1 class="ml-2" style="font-size:xx-large; font-weight: bold; font-size: 32px;">Diskusi</h1>
          </div>
          <p class="flex justify-center items-center ;" style="font-weight: bold; font-size: 20px;">Diskusi kepada Pemilik untuk informasi tentang kucing</p>
      </div>


<ul>
    @foreach ($contents as $content)
        <div class="flex justify-center items-center">
  <div class="kotak">
    <div class="flex justify-center items-center" style="padding:10px">
    <li><a class="ml-2" style="font-size:xx-large; font-weight: medium; font-size: 20px;" href="{{ route('balasDiskusi', $content->id) }}">{{ $content->judul }}</a></li>
    </div>
  </div>
</div>
    @endforeach
</ul>


</body>
</html>