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

<!--body-->
<section>
  <!--judul-->
<div class="w-full text-black-700 text-5xl font-semibold py-1 md:text-left pl-20">
    Find Your Cat</div>
</div>


<br>
<div class="w-2/4 text-gray-700 md:text-left text-2xl font-medium py-1 pl-20">
    We have a wide variety of breeds, ages, and personalities, catering to all preferences and lifestyles.
</div>
<!--judul-->

<!--Search Bar-->
<div class="container w-1/2 mx-left pl-20 px-4">
    <form class="flex items-center">   
        <label for="default-search" class="mr-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative flex-1">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Input color/breeds" required style="width: 430px; background-color: #FFD95A;">
            <button type="submit" class="ml-2 text-black bg-yellow-400 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-6 py-3 dark:bg-yellow dark:hover:bg-yellow dark:focus:ring-white-800">Find</button>

        </div>
    </form>
</div>
<!--Search Bar-->

<!--card-->
<div class="flex container justify-center px-20">
  <div class="grid grid-cols-4 grid-rows-3 space-x-4 space-y-4">

  <!--row1 -->
  <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat2.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Simba</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>


    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat2.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Simba</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>


<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat4.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Garfield</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>

<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat5.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hermione</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>
<!-- row1 -->

<!-- row2 -->
<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat5.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taka</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>


    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat2.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Simba</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>


<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat4.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Garfield</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>

<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat5.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hermione</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>
<!-- row2 -->

<!-- row3 -->
<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat5.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taka</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>


    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat2.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Simba</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>


<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat4.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Garfield</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>

<div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <div class="aspect-w-4 aspect-h-3">
      <img class="object-cover object-center rounded-t-lg" src="{{ asset('/img/cat5.jpg') }}" alt="" />
    </div>
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hermione</h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">Race     : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Gender   : Male</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Weight   : Anggora</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Height   : Anggora</p> <br>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Show more
      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>
<!-- row3 -->
</div>
</div>
<!-- card-->

<!-- Previous Button -->

<br>
<div class="flex justify-center items-center mt-4 mb-4">
  <div class="button-container mx-auto">
    <div class="flex flex-row">
      <a href="#" class="inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-black-500 bg-yellow-400 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
        Previous
      </a>
      <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-black-500 bg-yellow-400 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Next
        <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </a>
    </div>
  </div>
</div>
<!-- Previous Button -->


</body>
</html>

