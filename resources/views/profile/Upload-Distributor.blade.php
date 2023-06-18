<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Purrfect Adopt</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet">

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

        <div class="flex items-center justify-center h-screen rounded-lg">
    <div class="bg-yellow-300 w-4/5 p-4 rounded-lg">
        <div class="flex">
            <div class="w-1/3 p-4 rounded-lg bg-gray-200 opacity-70">
                <div class="flex items-center justify-center h-full border-dashed border-2 border-gray-400 rounded-lg">
                    <div class="text-4xl text-gray-500 mb-2">
                    </div>
                    <div class="text-6xl text-gray-500">
                        <span>Drag & Drop</span>
                    </div>
                </div>
            </div>

            <div class="w-2/3 p-4 ml-4">
                <div class="bg-white h-20 mb-4 rounded-lg flex items-center pl-4">
                    <input
                        type="text"
                        class="w-full h-full p-4 text-lg text-gray-500 outline-none rounded-lg"
                        placeholder="Title">
                </div>
                <div class="bg-white h-20 mb-4 rounded-lg flex items-center pl-4">
                    <input
                        type="text"
                        class="w-full h-full p-4 text-lg text-gray-500 outline-none rounded-lg"
                        placeholder="Your Address">
                </div>
                <div class="bg-white h-32 mb-4 rounded-lg">
                    <textarea
                        id="caption"
                        class="w-full h-full p-4 text-lg text-gray-500 resize-none outline-none rounded-lg"
                        placeholder="Caption"></textarea>
                </div>
                <div class="bg-white h-20 mb-4 rounded-lg flex items-center pl-4">
                    <input
                        id="phone-number"
                        type="text"
                        class="w-full h-full p-4 text-lg text-gray-500 outline-none rounded-lg"
                        placeholder="Phone Number">
                </div>
                <div class="flex items-end">
                    <a href="#" onclick="clearAllFields()" class="text-blue-500 underline text-sm">Clear All</a>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button
                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mt-2">
                Save
            </button>
        </div>
    </div>
</div>

        @include('components.footer');
    </body>
</html>