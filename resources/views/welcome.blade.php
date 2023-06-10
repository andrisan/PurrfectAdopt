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
<body class="leading-normal tracking-normal text-white-400 m-6 bg-cover bg-fixed">
<div class="h-full flex flex-col justify-between">
    <!--Nav-->
    <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-white-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="{{ route('welcome') }}">
                <x-application-logo class="block h-8 pr-2 w-auto fill-current" />
                <span class="text-yellow-400 font-semibold text-lg md:text-xl">PurrfectAdopt</span>
            </a>
            <div class="flex w-1/2 justify-end content-center">
                <a href="{{ route('login') }}"
                class="inline-block text-white no-underline bg-yellow-400 hover:bg-yellow-500 hover:text-white text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out rounded-full">
                    LOGIN <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </a>
            </div>
        </div>
    </div>

    <!--Main-->
    <div class="container mx-auto flex flex-wrap md:flex-nowrap items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-3/5 justify-center lg:items-start overflow-y-hidden">
            <h1 class="my-4 text-4xl md:text-6xl text-black opacity-75 font-bold leading-tight text-center md:text-left">Welcome Cat Lovers!</h1></br>
            <h5 class="leading-normal text-black text-xl md:text-3xl mb-8 text-center md:text-left">
                Unleash Your Love for Cats on Our Website!
            </h5>
            <a href="{{ route('register') }}" class="btn btn-accent space-x-2 bg-yellow-400 flex items-center justify-center py-3 px-6 text-white hover:bg-yellow-500 hover:text-white rounded-sm">
                <span>REGISTER</span>
            </a>
        </div>
        <!--Right Col -->
        <div class="w-full xl:w-2/5 py-6 overflow-hidden mt-auto">
            <img class="w-3/4 h-auto mx-auto" src="{{ asset('/img/hero-kucing.png') }}" alt="Hero Image">
        </div>
    </div>
</div>
</body>
</html>
