<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt | Article</title>

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
<div class="w-full text-gray-700 md:text-center text-5xl font-semibold pt-20">Welcome to Article</div>
</div>
<div class="w-full text-gray-700 md:text-center text-5xl text-base/6 py-4">Find Your Feline Friend: Experience the Joy of Cat Adoption</div>
</div>

<div class="container w-1/2 mx-auto px-4">
    <form action="{{ route('contents.store') }}" method="POST" enctype="multipart/form-data">
        <label for="post-title" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Post Title</label>
        <input type="text" id="post-title" name="judul" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Enter your post title" required>
        <label for="post-content" class="mt-4 mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Post Content</label>
        <textarea id="post-content" name="isi" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Write your post content" required rows="6"></textarea>
        <label for="post-image" class="mt-4 mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Upload Image</label>
        <input type="file" id="post-image" name="galery" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        accept="image/*" required>
        <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2 mt-4">Create Post</button>
    </form>
</div>
<br> <br>

<!--top article-->
<div class="px-11">
    <div class="container mx-auto">
    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex">
            <a href="#">
                <img class="rounded-l-lg" src="{{ $contents->find(1)->galery }}" alt="" style="max-height: 1200px; max-width: 600px;" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $contents->find(1)->judul }}</h5>
                </a>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    {{ Str::limit($contents->find(1)->isi, 900) }}
                </p>
                <br>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500">
                    Read More
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- top article -->

<!-- article news-->

<div class="w-full text-gray-700 px-11 text-2xl font-semibold pt-20 text-center">Article News</div><br>
<div class="flex container place-content-center">
<div class="grid grid-cols-3 space-x-4">

<!-- card -->
@foreach ($contents as $content)
@if ($content != $contents->find(1))
    <div class="max-w-xs  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
        <img class="rounded-t-lg" src="{{ $content->galery }}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $content->judul }}</h5>
            </a>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ Str::limit($content->isi, 200) }}
            </p>
            <br>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500">
                Read More
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
@endif
@endforeach
<!-- card -->

</div>
</div>
</div>
<!-- article news-->

<br>
@include('components.footer');

</body>
</html>
