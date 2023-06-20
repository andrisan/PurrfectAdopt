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

                    <div class="p-3 rounded ">
                        
                            <img class="h-auto w-full mx-auto rounded-lg"
                                src="{{ asset('/img/hero_adopter.jpg') }}"
                                alt="">

                    </div>

                    <div class="my-4"></div>



                </div>

                <div class="w-full md:w-9/12 mx-2 h-64">

                    <div class=" p-3 rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span class="px-4 py-2 tracking-wide font-semibold">Nickname Pengguna</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid  text-sm">
                                <div class="grid ">
                                    <!-- <div class="px-4 py-2">Rating</div> -->
                                    <div class="px-4">JL. KEMBANG KERTAS, LOWOKWARU, MALANG</div>
                                </div>
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
        <form method="POST" action="{{ route('profile.update') }}">
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


<!-- section 2 3 -->
    <!-- <div class="v52_1071">
        <div class="v52_1072">
            
        </div><div class="v52_1073"></div><span class="v52_1074">LOGO</span><div class="v52_1075"></div><div class="v52_1076"></div><span class="v52_1077">Login</span><span class="v52_1078">Sign Up</span><span class="v52_1079">Search Bar</span><div class="v52_1080"><div class="v52_1081"></div><div class="v52_1082"></div></div></div><div class="v52_1283"><div class="v52_1284"></div><div class="v52_1285"><div class="v52_1286"></div></div><div class="v52_1287"><div class="v52_1288"></div></div><div class="v52_1289"><div class="v52_1290"></div></div><span class="v52_1291">0856-4574-8425</span><span class="v52_1292">dwiwardhana12@gmail.com</span><span class="v52_1293">Contact Us</span><span class="v52_1294">Lorem ipsum dolor sit amet consectetur. Eu ullamcorper arcu varius id at lacinia aliquam metus. Vestibulum tristique duis non habitasse tincidunt montes amet praesent. Adipiscing rhoncus lacus pharetra elementum. Sed tincidunt ut pellentesque placerat lectus praesent praesent amet pretium.</span><span class="v52_1295">About</span><span class="v52_1296">Lorem ipsum dolor sit amet consectetur. Eu ullamcorper arcu varius id at lacinia aliquam metus. Vestibulum tristique duis non habitasse tincidunt montes amet praesent. Adipiscing rhoncus lacus pharetra elementum. Sed tincidunt ut pellentesque placerat lectus praesent praesent amet pretium.</span><span class="v52_1297">LOGO</span><div class="v52_1298"><div class="v52_1299"></div></div><div class="v52_1300"><div class="v52_1301"></div></div><span class="v52_1302">WORK</span><span class="v52_1303">CONTACT</span><span class="v52_1304">ABOUT</span></div><div class="v52_879"><div class="v52_880"></div><span class="v52_882">Saved Post</span><div class="v52_949"></div><div class="v46_151"><div class="v46_152"></div><span class="v46_153">Your Bookmark</span></div><div class="v52_1268"><div class="v52_1269"></div><span class="v52_1270">Your Bookmark</span></div><div class="v46_154"><div class="v46_155"></div><span class="v46_156">Your Bookmark</span></div><div class="v46_161"><div class="v46_162"></div><span class="v46_163">Your Bookmark</span></div><div class="v52_1281"><div class="v52_1271"><div class="v52_1272"></div><span class="v52_1273">Your Bookmark</span></div><div class="v52_1274"></div><div class="v52_1275"><div class="v52_1276"></div><span class="v52_1277">Your Bookmark</span></div><div class="v52_1278"><div class="v52_1279"></div><span class="v52_1280">Your Bookmark</span></div></div><div class="v52_1282"></div></div><div class="v52_951"><div class="v52_952"></div><span class="v52_953">My Pet</span><div class="v52_954"></div><span class="v52_976">DAREKECILCOMEL</span><span class="v52_977">Lorem ipsum dolor sit amet consectetur. Ornare ac massa ut at. Id aliquam sagittis faucibus in varius sit. At ut vitae tellus sed eget vitae elementum urna sagittis. Sit tincidunt vitae libero dui consequat sed tincidunt tristique.</span><span class="v52_978">Jawa Timur</span><div class="v52_979"><div class="v52_980"></div><div class="v52_981"></div><div class="v52_982"></div><div class="v52_983"></div></div><div class="v52_984"><div class="v52_985"></div><div class="v52_986"><div class="v52_987"></div></div><span class="v52_988">+62 843 - 7656 - 3452</span></div></div></div> -->

    
</body>
</html>