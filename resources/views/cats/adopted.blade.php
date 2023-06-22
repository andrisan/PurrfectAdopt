<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
            margin: 0;
            padding: 0;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menetapkan tinggi elemen ke 100% tinggi viewport */
            padding: 20px 0; /* Perpendek jarak bagian atas dan bawah */
        }
        
        .image-row {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 0px; /* Perpendek jarak antara baris */
            gap: 5px; /* Perpendek jarak antara elemen-elemen child */
        }
        
        .image-box {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            text-align: center;
        }
        
        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-box .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
        }
        
        .image-box:hover .overlay {
            opacity: 1;
        }
        
        .image-box .overlay-content {
            color: #fff;
            text-align: center;
        }
        
        .image-box .overlay-content a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        
        .image-box .overlay-content a:hover {
            text-decoration: underline;
        }

        .center{
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #C07F00;
        }
    </style>
    <title>Purrfect Adopt | My Cat</title>
</head>

<body>
    @include('components.header')

    <section class="bg-white py-8">
        <div class="container mx-auto">
            <br><div class="image-container">
            <h1 class="center">My cat</h1>
                <div class="image-row">
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/1.png') }}" alt="My Cat 1"/>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/2.png') }}" alt="My Cat 2">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/3.png') }}" alt="My Cat 3">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 3</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/4.png') }}" alt="My Cat 4">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 4</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/5.png') }}" alt="My Cat 5">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-row">
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/6.png') }}" alt="My Cat 6">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 6</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/7.png') }}" alt="My Cat 7">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 7</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/8.png') }}" alt="My Cat 8">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 8</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/9.png') }}" alt="My Cat 9">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>My Cat 9</h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('/images/MyCat/Tambah.png') }}" alt="More">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>View All</h3>
                                <a href="#">Click more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     @include('components.footer')
</body>

</html>