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
    <!--Nav-->
<div class="w-full container mx-auto bg-yellow-400">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
            <a class="flex items-center text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl ml-4"
                href="{{ route('welcome') }}">
                <x-application-logo class="block h-8 pr-2 w-auto fill-current" />
                <span class="font-semibold text-lg md:text-xl">PurrfectAdopt</span>
            </a>
        </div>
        <div class="flex items-center space-x-4 px-6">
            <a href="#"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Home
            </a>
            <a href="#"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Article
            </a>
            <a href="#"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                My Chat
            </a>
            <div class="relative ml-auto mr-5">
                <a href="#"
                    class="inline-block text-yellow-400 bg-white no-underline text-center h-10 w-10 rounded-full flex items-center justify-center transform hover:scale-105 duration-300 ease-in-out">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--body-->
<div class="w-full text-gray-700 md:text-center text-5xl font-semibold pt-20">Welcome to Article</div>
</div>
<div class="w-full text-gray-700 md:text-center text-5xl text-base/6 py-4">Find Your Feline Friend: Experience the Joy of Cat Adoption</div>
</div>

<div class="container w-1/2 mx-auto px-4">
<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class=" w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
        placeholder="Find your cat here" required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
</div>
<br> <br>

<!--card-->
<div class="px-11">
<div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal h-auto w-auto">
<div class="grid grid-rows-3 grid-flow-col gap-4">
    <div class="row-span-3 ...">
        <img src="img/artikel1.jpg" alt="">
    </div>

    <div class="row-span-1 col-span-2 ...">
        <h3>Embracing Feline Love:The Power of Cat Adoption</h3>
    </div>

    <div class="row-span-2 col-span-2 ...">
        <p>In a world where companionship knows no bounds, there is one creature that effortlessly captures our hearts - the humble feline. Cats, with their playful demeanor and soothing purrs, have the remarkable ability to bring joy and comfort into our lives. However, many cats find themselves in need of a loving home and caring guardians. This article delves into the significance of cat adoption and explores the transformative power it holds for both humans and these delightful creatures.</p>
    </div>
</div>
</div>
</div>
<br>
<br>

<!-- card-->

<!-- article news-->
<div class="w-full text-gray-700 px-11 text-2xl font-semibold pt-20">Article News</div><br>
<div class="flex container place-content-center">
<div class="grid grid-cols-3 space-x-4">

<div class="max-w-xs  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
    <img class="rounded-t-lg" src="{{ asset('/img/artikel2.jpg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guide and Considerations for Cat Adoption</h5>
        </a>
        <p class="font-normal text-gray-700 dark:text-gray-400">However, before you adopt a cat, there are several things to consider to ensure a successful adoption process and provide proper care for your new feline companion.</p> <br>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>

</div>
</div>
</div>
<!-- article news-->


</body>
</html>
