<!DOCTYPE html>
<html>

<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="{{ asset('testimonipet.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-yellow-100">
<div class="navbar" style="position: center;margin-top: 20px;">
  <div class="flex justify-center items-center" style="position: center;">       
    <h1 class="flex justify-center items-center " style="font-size:xx-large; font-weight: bold; font-size: 32px;">FAQ</h1><br>
    <p class="flex justify-center items-center ;" style="font-weight: bold; font-size: 20px;">Frequently Question and Answer</p>
  </div>          
</div>
@foreach($faqs as $faq)
  <div class="container mx-auto">
    <div class="box mx-auto">
      <div class="wrapper-header">
        <img src="{{ $faq -> bintang }}">
        <span class="title">{{ $faq -> nama }}</span>
      </div>
      <span class="content">{{ $faq -> testi }}</span>
    </div>
  </div>
  <p>
    <div style="position: relative; width: 100%; height: 100%;">
      <div class="container mx-auto">
        <img src="/images/Admin.png" alt="Gambar" style="padding-left: 70px;padding-top: 20px;padding-right: 20px; position: flex; left: 10px; top: 0.5px; width: 81px; height: 81px;">
        <div class="box mx-auto">
          <div class="wrapper-header">
          </div>
          <span class="content">{{ $faq -> jawab }}</span>
        </div>
      </div>
    </div>
    <p>
@endforeach
</body>
 
</html>