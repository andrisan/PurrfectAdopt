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
    @include('components.header')

<!--body-->
  <!--judul-->
  <div class="mt-20 w-full text-black-700 text-5xl font-semibold py-1 md:text-left pl-20 mb-3">
    Find Your Cat</div>
  </div>
  <div class="w-2/4 text-gray-700 md:text-left text-xl font-medium py-1 pl-20 mb-2">
    We have a wide variety of breeds, ages, and personalities, catering to all preferences and lifestyles.
  </div>
<!--judul-->

<!--Search Bar-->
<div class="container w-1/2 mx-left pl-20 px-4 mb-5">
    <form class="flex items-center">   
        <label for="default-search" class="mr-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative flex-1">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-400 focus:border-yellow-500" 
            placeholder="Input race" required style="width: 430px;">
            <button type="submit" class="ml-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-lg px-6 py-3">Find</button>
        </div>
    </form>
</div> 
<!--Search Bar-->

<!-- Result -->
<div class="w-2/4 text-gray-900 md:text-left t text-2xl font-bold py-1 pl-20 mb-2">
   Search results :  <span>Anggora</span>
  </div>
<h5 class="md:text-left text-2xl font-bold text-gray-900"></h5>

<!--card-->
<div class="flex justify-center mb-5">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <!-- card 1-->
    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow">
      <a href="#">
        <div class="aspect-w-4 aspect-h-3">
          <img class="object-cover object-center rounded-t-lg h-full w-full" src="{{ asset('/img/cat2.jpg') }}" style="height: 200px; width: 300px;"/>
        </div>
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Simba</h5>
        </a>
        <p class="font-normal text-gray-700">Race     : Anggora</p>
        <p class="font-normal text-gray-700">Gender   : Male</p>
        <p class="font-normal text-gray-700">Weight   : 0</p>
        <p class="font-normal text-gray-700">Height   : 0</p> <br>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500">
          Show more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>

    <!-- card 2-->
    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow">
      <a href="#">
        <div class="aspect-w-4 aspect-h-3">
          <img class="object-cover object-center rounded-t-lg h-full w-full" src="{{ asset('/img/cat1.jpg') }}" style="height: 200px; width: 300px;"/>
       </div>
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Hermione</h5>
        </a>
        <p class="font-normal text-gray-700">Race     : Anggora</p>
        <p class="font-normal text-gray-700">Gender   : Male</p>
        <p class="font-normal text-gray-700">Weight   : 0</p>
        <p class="font-normal text-gray-700">Height   : 0</p> <br>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500">
          Show more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>

    <!-- card 3-->
    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow">
      <a href="#">
        <div class="aspect-w-4 aspect-h-3">
          <img class="object-cover object-center rounded-t-lg h-full w-full" src="{{ asset('/img/cat5.jpg') }}" style="height: 200px; width: 300px;"/>
       </div>
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Taka</h5>
        </a>
        <p class="font-normal text-gray-700">Race     : Anggora</p>
        <p class="font-normal text-gray-700">Gender   : Male</p>
        <p class="font-normal text-gray-700">Weight   : 0</p>
        <p class="font-normal text-gray-700">Height   : 0</p> <br>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500">
          Show more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>

    <!-- card 4-->
    <div class="max-w-xs mx-auto bg-white border border-gray-200 rounded-lg shadow">
      <a href="#">
        <div class="aspect-w-4 aspect-h-3">
          <img class="object-cover object-center rounded-t-lg h-full w-full" src="{{ asset('/img/cat4.jpg') }}" style="height: 200px; width: 300px;"/>
       </div>
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Garfield</h5>
        </a>
        <p class="font-normal text-gray-700">Race     : Anggora</p>
        <p class="font-normal text-gray-700">Gender   : Male</p>
        <p class="font-normal text-gray-700">Weight   : 0</p>
        <p class="font-normal text-gray-700">Height   : 0</p> <br>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500">
          Show more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>

  </div>
</div>
@include('components.footer')
<!-- card-->
</body>
</html>

