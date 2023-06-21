<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
        <link href="{{ asset('adopter.css')}}" rel="stylesheet" />

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
<!-- kode -->
<div class="container mx-auto my-5 p-5">
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <div class="w-full md:w-3/12 md:mx-2">
                <div class="p-3 rounded">
                    <img class="h-auto w-full mx-auto rounded-lg" src="{{ asset($user->fotoProfil) }}" alt="">
                </div>
                <div class="my-4"></div>
            </div>
            <div class="w-full md:w-9/12 mx-2 h-64">
                <div class="p-3 rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span class="px-4 py-2 tracking-wide font-semibold">{{ $user->name }}</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid text-sm">
                            <div class="grid">
                                <div class="px-4">{{ $user->alamat }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- p iki form -->
    <div class="bg-white p-3 m-5 rounded-lg hover:shadow">
    @php
        $editing = false; // Menambahkan inisialisasi variabel $editing
    @endphp

    @if ($editing)
        <!-- view form edit data -->
        <form method="POST" action="{{ route('profile.updateBio') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Enter your mail:</label>
                <input class="border border-gray-400 rounded-md py-2 px-3 w-full" id="email" type="text"
                    name="email" value="{{ $user->email ?? '' }}">
                <br>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="kontak">Enter your phone number:</label>
                <input class="border border-gray-400 rounded-md py-2 px-3 w-full" id="kontak" type="text"
                    name="kontak" value="{{ $user->kontak ?? '' }}">
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
            </div>
        </form>
    @else
        <!-- view email dan nomor telepon -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email:</label>
            <input class="border border-gray-400 rounded-md py-2 px-3 w-full" id="email" type="text"
                value="{{ $user->email ?? '' }}" readonly>
            <br>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kontak">Nomor Telepon:</label>
            <input class="border border-gray-400 rounded-md py-2 px-3 w-full" id="kontak" type="text"
                value="{{ $user->kontak ?? '' }}" readonly>
        </div>
        <div class="flex justify-end">
            <button onclick="editProfile()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Data</button>
        </div>
    @endif
</div>

<!-- custom js -->
<script>
    function editProfile() {
        document.getElementById('email').removeAttribute('readonly');
        document.getElementById('kontak').removeAttribute('readonly');
        document.getElementById('email').focus();
        document.getElementById('kontak').focus();

        var editButton = document.createElement("button");
        editButton.innerHTML = "Simpan";
        editButton.classList.add("bg-green-500", "hover:bg-green-700", "text-white", "font-bold", "py-2", "px-4", "rounded");
        editButton.onclick = saveProfile;

        var parentDiv = document.querySelector(".flex.justify-end");
        parentDiv.innerHTML = "";
        parentDiv.appendChild(editButton);
    }

    function saveProfile() {
        document.getElementById('email').setAttribute('readonly', true);
        document.getElementById('kontak').setAttribute('readonly', true);

        var editButton = document.createElement("button");
        editButton.innerHTML = "Edit Data";
        editButton.classList.add("bg-blue-500", "hover:bg-blue-700", "text-white", "font-bold", "py-2", "px-4", "rounded");
        editButton.onclick = editProfile;

        var parentDiv = document.querySelector(".flex.justify-end");
        parentDiv.innerHTML = "";
        parentDiv.appendChild(editButton);
    }
</script>



    
</body>
</html>