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
    <link href="{{ asset('distributor.css')}}" rel="stylesheet" />

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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="">

 

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <div class="w-full md:w-3/12 md:mx-2">
                <div class="p-3 rounded ">
                    <img class="h-auto w-full mx-auto rounded"
                        src="{{ asset($user->fotoProfil) }}">
                </div>
            </div>
            <div class="w-full md:w-9/12 mx-2 h-64">
                <div class=" p-3 rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span class="px-4 py-2 tracking-wide font-semibold">{{ $user->name }}</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid  text-sm">
                            <div class="grid ">
                                <div class="px-4 py-2">⭐⭐⭐⭐⭐ - Rating</div>
                                <div class="px-4">{{ $user->alamat }}</div>
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

    <!--section 2-->
<!-- 
        <div class="v54_17">
            <div class="v54_29">

            </div>
            <div class="v54_70">

            </div>
            <span class="v54_73">My Posted Cat</span>
            <div class="v54_74">
                <div class="v54_75">

                </div>
                <span class="v54_76">Sangkalan</span>
                <span class="v54_77">Describe</span>
                <span class="v54_78">British ShortHair berumur 3 tahun dari Kota Nganjuk, Jawa Timur.</span>
                <span class="v54_79">British ShortHair</span>
                <div class="v54_80">

                </div>
                <span class="v54_81">Rating</span>
                <div class="v54_82">
                    <div class="v54_83">

                    </div>
                    <div class="v54_84">

                    </div>
                </div>
                <div class="v54_85">
                    <div class="v54_86">

                    </div>
                    <div class="v54_87">

                    </div>
                </div>
                <div class="v54_88">
                    <div class="v54_89">

                    </div>
                    <div class="v54_90">

                    </div>
                </div>
                <div class="v54_91">
                    <div class="v54_92">

                    </div>
                    <div class="v54_93">

                    </div>
                </div>
                <div class="v54_94">
                    <div class="v54_95">

                    </div>
                </div>
                <div class="v54_97">
                    <div class="v54_98">
                        <div class="v54_99">

                        </div>
                        <div class="v54_100">

                        </div>
                    </div>
                    <div class="v54_101">
                        <div class="v54_102">

                        </div>
                        <div class="v54_103">

                        </div>
                    </div>
                    <div class="v54_104">
                        <div class="v54_105">

                        </div><div class="v54_106">

                        </div>
                    </div>
                    <div class="v54_107">
                        <div class="v54_108">

                        </div>
                        <div class="v54_109">

                        </div>
                    </div>
                    <div class="v54_110">
                        <div class="v54_111">

                        </div>
                        <div class="v54_112">

                        </div>
                    </div>
                </div>
            </div>
            <div class="v54_96">

            </div>
            <div class="v54_119">

            </div>
            <div class="v54_157">

            </div>
            <div class="v54_162">

            </div><div class="v54_167">

            </div>
            <span class="v54_114">Name</span>
            <span class="v54_159">Name</span>
            <span class="v54_164">Name</span>
            <span class="v54_169">Name</span>
            <span class="v54_115">Description......</span>
            <span class="v54_160">Description......</span>
            <span class="v54_165">Description......</span>
            <span class="v54_170">Description......</span>
            <div class="v54_172">
                <div class="v54_173">

                </div>
                <span class="v54_174">View All Post</span>
            </div>
            <div class="v54_175">
                <div class="v54_176">

                </div>
                <span class="v54_177">Upload Post</span>
            </div>
            <div class="v52_991">
                <div class="v54_158">

                </div>
                <div class="v52_990">

                </div>
            </div>
            <div class="v52_998">
                <div class="v52_999">

                </div>
                <div class="v52_1000">

                </div>
            </div>
            <div class="v52_992">
                <div class="v52_993">

                </div>
                <div class="v52_994">

                </div>
            </div>
            <div class="v52_995">
                <div class="v52_996">

                </div>
                <div class="v52_997">

                </div>
            </div>
            <div class="v54_274">

            </div>
            <span class="v54_275">More ></span>
        </div>
        <div class="v54_178">
            <div class="v54_248">
                <div class="v54_249">

                </div>
                <span class="v54_250">Log Out</span>
                <div class="v54_251">
                    <div class="v54_252">

                    </div>
                    <div class="v54_253">

                    </div>
                </div>
            </div>
            <div class="v54_254">
                <div class="v54_255">

                </div>
                <span class="v54_256">Setting</span>
                <div class="v54_257">
                    <div class="v54_258">

                    </div>
                    <div class="v54_259">

                    </div>
                </div>
            </div>
            <div class="v54_260">
                <div class="v54_261">

                </div>
                <span class="v54_262">Ulasan</span>
                <div class="v54_263">
                    <div class="v54_264">

                    </div>
                    <div class="v54_265">

                    </div>
                </div>
            </div>
            <div class="v54_266">
                <div class="v54_267">
                    <div class="v54_268">

                    </div>
                    <span class="v54_269">Diskusi</span>
                    <div class="v54_270">
                        <div class="v54_271">

                        </div>
                        <div class="v54_272"></div></div></div></div><span class="v54_273">More</span><div class="v54_1228"></div><div class="v54_1282"></div><div class="v54_1255"></div><div class="v54_1229"><div class="v54_1230"></div><span class="v54_1231">Ferry Pangateu</span><div class="v54_1232"><div class="v54_1233"><div class="v54_1234"></div><div class="v54_1235"></div></div><div class="v54_1236"><div class="v54_1237"></div><div class="v54_1238"></div></div><div class="v54_1239"><div class="v54_1240"></div><div class="v54_1241"></div></div><div class="v54_1242"><div class="v54_1243"></div><div class="v54_1244"></div></div><div class="v54_1245"><div class="v54_1246"></div><div class="v54_1247"></div></div></div></div><div class="v54_1283"><div class="v54_1284"></div><span class="v54_1285">Ferry Pangateu</span><div class="v54_1286"><div class="v54_1287"><div class="v54_1288"></div><div class="v54_1289"></div></div><div class="v54_1290"><div class="v54_1291"></div><div class="v54_1292"></div></div><div class="v54_1293"><div class="v54_1294"></div><div class="v54_1295"></div></div><div class="v54_1296"><div class="v54_1297"></div><div class="v54_1298"></div></div><div class="v54_1299"><div class="v54_1300"></div><div class="v54_1301"></div></div></div></div><div class="v54_1256"><div class="v54_1257"></div><span class="v54_1258">Ferry Pangateu</span></div><span class="v54_1248">Lorem ipsum dolor sit amet consectetur. Ornare ac massa ut at. Id aliquam sagittis faucibus in varius sit. At ut vitae tellus sed eget vitae elementum urna sagittis. Sit tincidunt vitae libero dui consequat sed tincidunt tristique.</span><span class="v54_1302">Lorem ipsum dolor sit amet consectetur. Ornare ac massa ut at. Id aliquam sagittis faucibus in varius sit. At ut vitae tellus sed eget vitae elementum urna sagittis. Sit tincidunt vitae libero dui consequat sed tincidunt tristique.</span><span class="v54_1275">Lorem ipsum dolor sit amet consectetur. Ornare ac massa ut at. Id aliquam sagittis faucibus in varius sit. At ut vitae tellus sed eget vitae elementum urna sagittis. Sit tincidunt vitae libero dui consequat sed tincidunt tristique?</span><div class="v54_1249"><div class="v54_1250"></div><span class="v54_1251">Balas</span></div><div class="v54_1303"><div class="v54_1304"></div><span class="v54_1305">Balas</span></div><div class="v54_1276"><div class="v54_1277"></div><span class="v54_1278">Balas</span></div><div class="v54_1279"><div class="v54_1280"></div><span class="v54_1281">More ></span></div><div class="v54_1317"><div class="v54_1318"></div><span class="v54_1319">More ></span></div></div><div class="v52_1070"><div class="v54_4"></div><div class="v54_5"></div><span class="v54_16">LOGO</span><div class="v52_871"></div><div class="v52_872"></div><span class="v52_873">Login</span><span class="v52_874">Sign Up</span><span class="v54_15">Search Bar</span><div class="v54_14"><div class="v54_12"></div><div class="v54_13"></div></div></div><div class="v48_8"><div class="v48_9"></div><div class="v48_10"><div class="v48_11"></div></div><div class="v48_12"><div class="v48_13"></div></div><div class="v48_14"><div class="v48_15"></div></div><span class="v48_16">0856-4574-8425</span><span class="v48_17">dwiwardhana12@gmail.com</span><span class="v48_18">Contact Us</span><span class="v48_19">Lorem ipsum dolor sit amet consectetur. Eu ullamcorper arcu varius id at lacinia aliquam metus. Vestibulum tristique duis non habitasse tincidunt montes amet praesent. Adipiscing rhoncus lacus pharetra elementum. Sed tincidunt ut pellentesque placerat lectus praesent praesent amet pretium.</span><span class="v48_20">About</span><span class="v48_21">Lorem ipsum dolor sit amet consectetur. Eu ullamcorper arcu varius id at lacinia aliquam metus. Vestibulum tristique duis non habitasse tincidunt montes amet praesent. Adipiscing rhoncus lacus pharetra elementum. Sed tincidunt ut pellentesque placerat lectus praesent praesent amet pretium.</span><span class="v48_22">LOGO</span><div class="v48_23"><div class="v48_24"></div></div><div class="v48_25"><div class="v48_26"></div></div><span class="v48_28">WORK</span><span class="v48_29">CONTACT</span><span class="v48_30">ABOUT</span></div></div>

 -->

</body>
</html>