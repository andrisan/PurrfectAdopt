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

        /* ... Kode CSS lainnya ... */

        
        .img-object {
            height: 300px; /* Ubah sesuai tinggi yang diinginkan */
            width: 300px; /* Ubah sesuai lebar yang diinginkan */
            object-fit: cover;
            object-position: center;
            border-radius: 10px;
        }

        .add-post-button {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 300px;
            width: 300px;
            border: 2px dashed #999;
            border-radius: 10px;
            background-color: #F3F3F3;
            cursor: pointer;
        }

        .add-post-button:hover {
            background-color: #EAEAEA;
        }

        .add-post-button i {
            font-size: 6rem;
            color: #888;
        }

        .add-post-button span {
            margin-top: 1rem;
            font-size: 1.2rem;
            color: #888;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header');
    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            @foreach ($kucings as $kucing)
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="{{ route('profileCat_more', $kucing->id) }}">
                        <img class="hover:grow hover:shadow-lg img-object" src="{{ asset($kucing->foto) }}">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">{{ $kucing->nama }}</p>
                            <i class="fa-solid fa-heart fa-xl" style="color: #ff0505;"></i>
                        </div>
                        <p class="pt-1 text-gray-900"> </p>
                    </a>
                </div>
            @endforeach

            <label for="file-input" class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col items-center">
                <div class="add-post-button">
                <a href="{{ route('Upload-Distributor') }}">
                    <i class="fas fa-plus-circle"></i>
                </div>
            </label>
        </div>
    </section>

    @include('components.footer');
</body>
</html>