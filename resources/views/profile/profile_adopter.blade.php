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
    <div class="bg-yellow-300 p-3 m-5 rounded-lg hover:shadow">
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

<!-- section 2 -->\

<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center md:text-left">
    <div
      class="bg-yellow-300 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
      <div class="bg-yellow-300 flex flex-wrap items-center">
        <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
          <img src="{{ asset($user->fotoProfil) }}" alt="Trendy Pants and Shoes"
            class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
        </div>
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
          <div class="bg-yellow-300 px-6 py-12 md:px-12">
            <h2 class="mb-2 text-3xl font-bold text-primary dark:text-primary-400">{{ $user->name }}</h2>
            <p class="mb-4 font-semibold">{{ $user->alamat }}</p>
            <p class="mb-6 text-black dark:text-black text-justify">
              Ad, at blanditiis quaerat laborum officia incidunt cupiditate
              dignissimos voluptates eius aliquid minus praesentium!
              Perferendis et totam ipsum ex aut earum libero accusamus
              voluptas quod numquam saepe, consequuntur nihil quia tenetur
              consequatur. Quis, explicabo deserunt quasi assumenda ea
              maiores nulla, et dolor saepe praesentium natus error
              reiciendis voluptas iste. Esse, laudantium ipsum animi, quos
              voluptatibus atque vero repellat sit eligendi autem maiores
              quasi cum aperiam. Aperiam rerum culpa accusantium, ducimus
              deserunt aliquid alias vitae quasi corporis placeat vel
              maiores explicabo commodi!
            </p>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">More</button>
                <button type="submit" class="mx-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">My Pet</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->

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