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
        @include('components.header');

        <div class="flex items-center justify-center h-screen rounded-lg mt-20 mb-20">
            <div class="bg-yellow-300 w-4/5 p-4 rounded-lg">
                <div class="flex">
                    <div class="w-1/3 p-4 rounded-lg bg-gray-200 opacity-70">
                        <label for="file-input" class="flex items-center justify-center h-full border-dashed border-2 border-gray-400 rounded-lg">
                        <div class="text-4xl text-gray-500 mb-2">
  <i id="upload-icon" class="fas fa-plus-circle text-6xl"></i>
</div>
                            <div>
                                <img id="preview-image" src="#" alt="Preview Image" style="display: none; max-width: 300px; max-height: 300px;">
                            </div>
                        </label>
                        <input id="file-input" type="file" class="hidden" onchange="handleFileUpload(event)">
                    </div>
                    <form action="" class="w-2/3 p-4 ml-4">
                        <div>
                            <h1 class="text-2xl font-bold mb-4 text-center">Cat Detail Form</h1>
                            <div class="mb-4">
                                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Cat Name</label>
                                <input type="text" id="nama" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500 rounded-lg" placeholder="Enter the cat's name">
                            </div>
                            <div class="mb-4">
                                <label for="warna" class="block text-gray-700 text-sm font-bold mb-2">Colour</label>
                                <input type="text" id="warna" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500 rounded-lg" placeholder="Enter cat color">
                            </div>
                            <div class="mb-4">
                                <label for="ras" class="block text-gray-700 text-sm font-bold mb-2">Breed</label>
                                <input type="text" id="ras" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500 rounded-lg" placeholder="Enter cat breeds">
                            </div>
                            <div class="mb-4">
                                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                                <div class="flex">
                                    <label class="flex items-center mr-4">
                                        <input type="radio" name="gender" value="jantan" class="mr-2">
                                        Male
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="gender" value="betina" class="mr-2">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="berat" class="block text-gray-700 text-sm font-bold mb-2">Weight (kg)</label>
                                <input type="number" id="berat" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500 rounded-lg" placeholder="Enter the cat's weight">
                            </div>
                            <div class="mb-4">
                                <label for="tinggi" class="block text-gray-700 text-sm font-bold mb-2">Tall (cm)</label>
                                <input type="number" id="tinggi" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500 rounded-lg" placeholder="Enter the cat's height">
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                                <textarea id="deskripsi" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500 rounded-lg" placeholder="Enter a description about the cat"></textarea>
                            </div>
                            <div>
                                <button class="bg-gray-500 text-white font-bold py-2 px-4 rounded-lg mt-2" type="reset">
                                    Clear All
                                </button>
                                <button class="bg-blue-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-lg mt-2" type="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('components.footer');

        <script>
            function handleFileUpload(event) {
                var file = event.target.files[0];
                var reader = new FileReader();
                reader.onload = function (e) {
                    var previewImage = document.getElementById("preview-image");
                    previewImage.src = e.target.result;
                    previewImage.style.display = "block";
                };
                reader.readAsDataURL(file);
            }

            function handleFileUpload(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function (e) {
      var previewImage = document.getElementById("preview-image");
      var uploadIcon = document.getElementById("upload-icon");
      previewImage.src = e.target.result;
      previewImage.style.display = "block";
      uploadIcon.style.display = "none"; // Menyembunyikan ikon upload
    };
    reader.readAsDataURL(file);
  }
        </script>
    </body>
</html>
